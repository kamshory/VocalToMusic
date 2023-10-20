let audioPicker;
let midiCreator;
let maxTempo = 130;
let resolution = 16;
let channel = 0;
let sampleRate = 32000;
let init = false;
let player;
let playing = false;
let lastMidiData;
let timeout = null;
let noteOff = 1000;


function initPlayer() {
  if (!init) {
    JZZ.synth.Tiny.register("Web Audio");
    player = new JZZ.gui.Player("player");
    player.onPlay = function () {
      playing = true;
    };
    player.onStop = function () {
      playing = false;
    };
    player.onPause = function () {
      playing = false;
    };
  }
  init = true;
}

function playMidi(data) {
  lastMidiData = data;
  initPlayer();
  if (playing) {
    player.stop();
  }
  player.load(new JZZ.MIDI.SMF(data));
  let classList = document.querySelector(".button--midi").classList;
  if (classList?.contains("button--disabled")) {
    document
      .querySelector(".button--midi")
      .classList.remove("button--disabled");
  }
}

/**
 * Download MIDI
 */
function downloadMidi() {
  window.open("data:audio/midi;base64," + JZZ.lib.toBase64(lastMidiData));
}

/**
 * Clear piano roll
 */
function clearNote() {
  if(timeout != null)
  {
    clearTimeout(timeout);
  }
  let elems = document.querySelectorAll(".piano-roll .note-on");
  if (elems != null) {
    let max = elems.length;
    for (let i = 0; i < max; i++) {
      elems[i].classList.remove("note-on");
    }
  }
}



function highlight(e) {
  e.target.classList.add("highlight");
}

function unhighlight(e) {
  e.target.classList.remove("highlight");
}
function preventDefaults(e) {
  e.preventDefault();
  e.stopPropagation();
}
function handleClick(e) {
  document.querySelector("#localfile").click();
}
function handleDrop(e) {
  let dt = e.dataTransfer;
  let files = dt.files;

  handleFiles(files);
}
function handleFiles(files) {
  [...files].forEach(processLocalFile);
}

function processLocalFile(file) {
  let mc = new MidiCreator({
    tempo: getBpm(),
    maxTempo: maxTempo,
    resolution: resolution,
    channel: channel,
    sampleRate: sampleRate,
    beats: getBeats(),
    beatType: getBeatType(),
    interchangable: getInterchangable()
  });

  mc.loadLocalAudioFile(file, function (float32Array) {
    mc.soundToNote();
    let data = mc.createMidi(true);
    playMidi(data);
  });
}

function processRemoteFile(path) {
  let mc = new MidiCreator({
    tempo: getBpm(),
    maxTempo: maxTempo,
    resolution: resolution,
    channel: channel,
    sampleRate: sampleRate,
    beats: getBeats(),
    beatType: getBeatType(),
    interchangable: getInterchangable()
  });

  mc.loadRemoteAudioFile(path, function (float32Array) {
    mc.soundToNote();
    let data = mc.createMidi(true);
    playMidi(data);
  });
}

function createPianoRoll(elem) {
  let factor = 16;
  let min = 12;
  let max = 133;
  let width = 71 * factor; // 10 octave
  elem.style.width = width + "px";
  for (let i = min; i < max; i++) {
    let tuts = document.createElement("div");
    let mod = i % 12;
    let octave = Math.floor((i - min) / 12);
    let key = inf[mod];
    if (key.type == 1) {
      tuts.className = "tuts tuts-white";
      tuts.setAttribute("data-index", i);
      tuts.style.left = octave * 7 * factor + key.offset * factor + "px";
      tuts.style.width = key.width * factor + "px";
      elem.appendChild(tuts);
    }
  }
  for (let i = min; i < max; i++) {
    let tuts = document.createElement("div");
    let mod = i % 12;
    let octave = Math.floor((i - min) / 12);
    let key = inf[mod];
    if (key.type == 2) {
      tuts.className = "tuts tuts-black";
      tuts.setAttribute("data-index", i);
      tuts.style.left = octave * 7 * factor + key.offset * factor + "px";
      tuts.style.width = key.width * factor + "px";
      elem.appendChild(tuts);
    }
  }
}

let inf = [
  {
    type: 1,
    offset: 0,
    width: 1,
  },
  {
    type: 2,
    offset: 0.5,
    width: 0.8,
  },
  {
    type: 1,
    offset: 1,
    width: 1,
  },
  {
    type: 2,
    offset: 1.7,
    width: 0.8,
  },
  {
    type: 1,
    offset: 2,
    width: 1,
  },
  {
    type: 1,
    offset: 3,
    width: 1,
  },
  {
    type: 2,
    offset: 3.5,
    width: 0.8,
  },
  {
    type: 1,
    offset: 4,
    width: 1,
  },
  {
    type: 2,
    offset: 4.6,
    width: 0.8,
  },
  {
    type: 1,
    offset: 5,
    width: 1,
  },
  {
    type: 1,
    offset: 6,
    width: 1,
  },
  {
    type: 2,
    offset: 5.7,
    width: 0.8,
  },
];

let noteFlats = "C Db D Eb E F Gb G Ab A Bb B".split(" ");
let noteSharps = "C C# D D# E F F# G G# A A# B".split(" ");

function noteFromNumber(midi, sharps) {
  midi = Math.round(midi);
  let pcs = sharps === true ? noteSharps : noteFlats;
  let pc = pcs[midi % 12];
  let o = Math.floor(midi / 12) - 1;
  return pc + o;
};

function getBeats()
{
  let val = document.querySelector('select[name="timesignature"]').value;
  val = val.split(' ')[0].split('/')[0];
  return parseInt(val);
}
function getBeatType()
{
  let val = document.querySelector('select[name="timesignature"]').value;
  val = val.split(' ')[0].split('/')[1];
  return parseInt(val);
}
function getInterchangable()
{
  let val = document.querySelector('select[name="timesignature"]').value;
  val = val.split(' ')[1];
  return parseInt(val);
}

function getMinPitch()
{
  let val = document.querySelector('select[name="minpitch"]').value;
  return parseFloat(val);
}
function getMaxPitch()
{
  let val = document.querySelector('select[name="maxpitch"]').value;
  return parseFloat(val);
}
function getBpm()
{
  let val = document.querySelector('input[name="bpm"]').value;
  return parseFloat(val);
}

function frequencyFromNoteNumber(midi) {
  return 440 * Math.pow(2, (midi - 69) / 12);
};

function convertMidiToMusicXML(data)
{
  let encoded = JZZ.lib.toBase64(data);
  let httpRequest = new XMLHttpRequest();
  if (!httpRequest) {
    return false;
  }
  httpRequest.onreadystatechange = function(){
    console.log(httpRequest.responseText);
    loadXML(httpRequest.responseText);
    
  };
  httpRequest.open("POST", "midi-to-musicxml.php");
  httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  httpRequest.send('data='+encoded);
}

window.onload = function () {
  let minEl = document.querySelector('select[name="minpitch"]');
  let maxEl = document.querySelector('select[name="maxpitch"]');
  let ts = document.querySelector('select[name="timesignature"]');
  for(let i = 0; i<128; i++)
  {
    let noteName = noteFromNumber(i, true);
    let frequency = frequencyFromNoteNumber(i);
    minEl.append(new Option(noteName, frequency));
    maxEl.append(new Option(noteName, frequency));
  }

  minEl.value = frequencyFromNoteNumber(32);
  maxEl.value = frequencyFromNoteNumber(50);

  let ts1 = '4/4 8';
  let ts2 = '3/4 8';
  

  ts.append(new Option(ts1, ts1));
  ts.append(new Option(ts2, ts2));

  let bpm = document.querySelector('input[name="bpm"]');
  bpm.value = 130;
  
  let elem = document.querySelector(".piano-roll");
  audioPicker = new SoundPicker();
  audioPicker.onStartRecording = function (sampleRate) {
    midiCreator = new MidiCreator({
      tempo: getBpm(),
      maxTempo: maxTempo,
      resolution: resolution,
      sampleRate: sampleRate,
      channel: channel,
      beats: getBeats(),
      beatType: getBeatType(),
      interchangable: getInterchangable(),
      pitcMin: getMinPitch(),
      pitcMax: getMaxPitch()
    });
    midiCreator.onPreviewNote = function (data) {
      
      clearNote();
      let tut = elem.querySelector('[data-index="' + data.midi + '"]');
      if (tut != null) {
        tut.classList.add("note-on");
        timeout = setTimeout(function(){
          clearNote();
        }, noteOff);
      }
    };
  };
  audioPicker.onStopRecording = function (duration) {
    clearNote();
    let data = midiCreator.createMidi(true);
    playMidi(data);
    convertMidiToMusicXML(data);
  };
  audioPicker.onProcessSample = function (time, pitcInfo) {
    midiCreator.addNote(pitcInfo.pitch, pitcInfo.velocity, time);
  };

  createPianoRoll(elem);

  let dropArea = document.querySelector(".button--open");
  ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
    dropArea.addEventListener(eventName, preventDefaults, false);
  });

  ["dragenter", "dragover"].forEach((eventName) => {
    dropArea.addEventListener(eventName, highlight, false);
  });
  ["dragleave", "drop"].forEach((eventName) => {
    dropArea.addEventListener(eventName, unhighlight, false);
  });
  dropArea.addEventListener("drop", handleDrop, false);
  dropArea.addEventListener("click", handleClick, false);
  document.querySelector("#localfile").addEventListener("change", function (e) {
    handleFiles(e.target.files);
  });

  document
    .querySelector(".button--midi")
    .addEventListener("click", function (e) {
      downloadMidi();
      e.preventDefault();
    });
};