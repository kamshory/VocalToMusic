const playbackStates = {
  INIT: "INIT",
  PLAYING: "PLAYING",
  STOPPED: "STOPPED",
  PAUSED: "PAUSED",
};

class PlaybackEngine {
  constructor() {
    this.ac = new AudioContext();
    this.ac.suspend();
    this.defaultBpm = 100;

    this.cursor = null;
    this.sheet = null;
    this.iterator = null;
    this.denominator = null;
    this.currentIndex = 0;

    this.scheduler = null;

    this.iterationSteps = 0;
    this.currentIterationStep = 0;

    this.timeoutHandles = [];
    this.animateTimeout = {};

    this.playbackSettings = {
      bpm: this.defaultBpm,
      instrument: null,
      volumes: {
        master: 1,
        instruments: [],
      },
    };

    this.state = playbackStates.INIT;
    this.scrollTop = 0;
    this.currentScrollTop = 0;
    this.instrumentMap = {};
    this.getScrollPosition = function () {
      return window.pageYOffset || document.documentElement.scrollTop;
    };
    this.scroll = function () {
      let top = osmd.cursor.cursorElement.offsetTop;
      let pos = top - 65;
      if (pos < 0) {
        pos = 0;
      }
      if (this.getScrollPosition() != pos) {
        this.scrollTop = pos;
        this.currentScrollTop = pos;
        document.querySelector("#osmdCanvas").scroll({ top: pos });
      }
    };

    this.getInstrumentMap = function (instruments) {
      let tracks = [];
      for (let instrument of instruments) {
        if (instrument) {
          for (let subinstrument of instrument.subInstruments) {
            let idString = subinstrument.idString;
            let voice = subinstrument;
            let map = {
              idString: idString,
              partId: instrument.idString,
              partAbbreviation: instrument.partAbbreviation,
              voice: voice,
              hasSibling: instrument.subInstruments.length > 1,
            };
            this.instrumentMap[idString] = map;
            tracks.push(map);
          }
        }
      }
      this.instrumentMap = tracks;
      return tracks;
    };
  }

  get wholeNoteLength() {
    return Math.round(
      (60 / this.playbackSettings.bpm) * this.denominator * 1000
    );
  }

  async loadInstrument(instrumentName) {
    this.playbackSettings.instrument = await Soundfont.instrument(
      this.ac,
      instrumentName
    );
  }

  loadScore(osmd) {
    this.sheet = osmd.sheet;
    this.cursor = osmd.cursor;
    this.denominator = this.sheet.playbackSettings.rhythm.denominator;
    if (this.sheet.HasBPMInfo) {
      this.setBpm(this.sheet.DefaultStartTempoInBpm);
    }

    let instruments = this.sheet.Instruments.map((i) => {
      return {
        name: i.Name,
        id: i.id,
        voices: i.Voices.map((v) => {
          return {
            name: "Voice " + v.VoiceId,
            id: v.VoiceId,
            volume: 1,
          };
        }),
      };
    });

    this.playbackSettings.volumes.instruments = instruments;

    this.scheduler = new PlaybackScheduler(
      this.denominator,
      this.wholeNoteLength,
      this.ac,
      (delay, notes) => this._notePlaybackCallback(delay, notes)
    );
    this._countAndSetIterationSteps();
  }

  async play() {
    if (!this.playbackSettings.instrument) {
      await this.loadInstrument("acoustic_grand_piano");
    }
    await this.ac.resume();
    this.scroll();
    this.scheduler.start();
    this.cursor.show();
    this.state = playbackStates.PLAYING;
  }

  async stop() {
    this.state = playbackStates.STOPPED;
    if (this.playbackSettings.instrument)
      this.playbackSettings.instrument.stop();
    this._clearTimeouts();
    this.scheduler.reset();
    this.cursor.reset();
    this.currentIterationStep = 0;
    this.cursor.hide();
  }

  pause() {
    this.state = playbackStates.PAUSED;
    this.ac.suspend();
    if (this.playbackSettings.instrument)
      this.playbackSettings.instrument.stop();
    this.scheduler.setIterationStep(this.currentIterationStep);
    this.scheduler.pause();
    this._clearTimeouts();
  }

  resume() {
    this.state = playbackStates.PLAYING;
    this.scheduler.resume();
    this.ac.resume();
  }

  jumpToStep(step) {
    this.pause();
    if (this.currentIterationStep > step) {
      this.cursor.hide();
      this.cursor.reset();
      this.currentIterationStep = 0;
    }
    while (this.currentIterationStep < step) {
      this.cursor.next();
      ++this.currentIterationStep;
    }
    let schedulerStep = this.currentIterationStep;
    if (
      this.currentIterationStep > 0 &&
      this.currentIterationStep < this.iterationSteps
    )
      ++schedulerStep;
    this.scheduler.setIterationStep(schedulerStep);
    this.cursor.show();
  }

  animate(note, noteVolume, noteDuration) {
    //let parentId = note.voiceEntry.parentVoice.parent.idString;
    //let voiceId = note.voiceEntry.parentVoice.voiceId;
    //let halfTone = note.halfTone;
    for (let subInstrument of note.voiceEntry.parentVoice.parent
      .subInstruments) {
      /*
      console.log({
        subInstrumentId:subInstrument.idString, 
        midiInstrumentID:subInstrument.midiInstrumentID,
        parentId:parentId, 
        voiceId:voiceId,
        name:subInstrument.name,
        pan:subInstrument.subinstrument,
        volume:subInstrument.volume,
        halfTone:halfTone,
        noteVolume:noteVolume,
        noteDuration:noteDuration
      });
      */
      let cls2 = ".instr-" + subInstrument.idString;
      this.animateInstr(cls2, subInstrument.volume, noteDuration);

      for (
        let idx = 0;
        idx <
        osmd.cursor.iterator.currentMeasure.verticalMeasureList.length - 1;
        idx++
      ) {
        let top =
          osmd.cursor.iterator.currentMeasure.verticalMeasureList[idx].stave.y -
          osmd.cursor.cursorElement.offsetTop;
        let cls = ".box-" + idx;
        document.querySelector(cls).style.top = top + "px";
      }
    }
  }

  animateInstr(cls, volume, noteDuration) {
    if (typeof this.animateTimeout[cls] != "undefined") {
      clearTimeout(this.animateTimeout[cls]);
    }
    this.animateTimeout[cls] = setTimeout(function () {
      document.querySelector(cls + " img").style.transform = "scale(1)";
    }, noteDuration / 5);
    let scale = 1 + volume / 15;
    document.querySelector(cls + " img").style.transform =
      "scale(" + scale + ")";
  }

  setVoiceVolume(instrumentId, voiceId, volume) {
    let playbackInstrument = this.playbackSettings.volumes.instruments.find(
      (i) => i.id === instrumentId
    );
    let playbackVoice = playbackInstrument.voices.find((v) => v.id === voiceId);
    playbackVoice.volume = volume;
  }

  setBpm(bpm) {
    this.playbackSettings.bpm = bpm;
    if (this.scheduler) this.scheduler.wholeNoteLength = this.wholeNoteLength;
  }

  _countAndSetIterationSteps() {
    this.cursor.reset();
    let steps = 0;
    while (!this.cursor.iterator.endReached) {
      if (this.cursor.iterator.currentVoiceEntries) {
        this.scheduler.loadNotes(this.cursor.iterator.currentVoiceEntries);
      }
      this.cursor.next();
      ++steps;
    }
    this.iterationSteps = steps;
    this.cursor.reset();
  }

  _notePlaybackCallback(audioDelay, notes) {
    if (this.state !== playbackStates.PLAYING) return;

    //console.log(notes);

    let scheduledNotes = [];

    for (let note of notes) {
      let noteDuration = this._getNoteDuration(note);
      if (noteDuration === 0) continue;
      let noteVolume = this._getNoteVolume(note);

      this.animate(note, noteVolume, noteDuration);

      scheduledNotes.push({
        note: note.halfTone,
        duration: noteDuration / 1000,
        gain: noteVolume,
      });
    }
    this.playbackSettings.instrument.schedule(
      this.ac.currentTime + audioDelay,
      scheduledNotes
    );

    this.timeoutHandles.push(
      setTimeout(
        () => this._iterationCallback(),
        Math.max(0, audioDelay * 1000 - 40)
      )
    ); // Subtracting 40 milliseconds to compensate for update delay
  }

  // Used to avoid duplicate cursor movements after a rapid pause/resume action
  _clearTimeouts() {
    for (let h of this.timeoutHandles) {
      clearTimeout(h);
    }
    this.timeoutHandles = [];
  }

  _iterationCallback() {
    if (this.state !== playbackStates.PLAYING) {
      return;
    }
    if (this.currentIterationStep > 0) {
      osmd.cursor.next();
      this.scroll();
    }
    ++this.currentIterationStep;
  }

  _getNoteDuration(note) {
    let duration = note.length.realValue * this.wholeNoteLength;
    if (note.NoteTie) {
      if (Object.is(note.NoteTie.StartNote, note) && note.NoteTie.notes[1]) {
        duration +=
          note.NoteTie.notes[1].length.realValue * this.wholeNoteLength;
      } else {
        duration = 0;
      }
    }
    return duration;
  }

  _getNoteVolume(note) {
    let instrument = note.voiceEntry.ParentVoice.Parent;
    let playbackInstrument = this.playbackSettings.volumes.instruments.find(
      (i) => i.id === instrument.Id
    );
    let playbackVoice = playbackInstrument.voices.find(
      (v) => v.id === note.voiceEntry.ParentVoice.VoiceId
    );
    return playbackVoice.volume;
  }
}
