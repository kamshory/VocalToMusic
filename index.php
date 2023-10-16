<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIDI Creator</title>
    <link rel="stylesheet" href="lib.assets/css/css.css">
    <link rel="stylesheet" href="lib.assets/css/fontawesome-free-6.4.2/css/all.min.css">
    <script src="lib.assets/js/jzz/JZZ.js"></script>
    <script src="lib.assets/js/jzz/JZZ.midi.SMF.js"></script>
    <script src="lib.assets/js/jzz/JZZ.gui.Player.js"></script>
    <script src="lib.assets/js/jzz/JZZ.synth.Tiny.js"></script>
    <script src="lib.assets/js/sound-picker.js"></script>
    <script src="lib.assets/js/midi-creator.js"></script>
    <script src="lib.assets/js/js.js"></script>


    <script src="js/soundfont-player.js"></script>
    <script src="js/PlaybackEngine.js"></script>
    <script src="js/PlaybackScheduler.js"></script>
    <script src="js/StepQueue.js"></script>
    <script src="js/opensheetmusicdisplay.min.js"></script> <!-- you need to provide the .js file, see README.md-->
    <script src="js/fileSelectAndLoadOSMD.js"></script>
    <link rel="stylesheet" href="css/style.css">


    <script>
        
    </script>
</head>

<body>

    <div class="all">
        <div class="container">
            <div class="sound-recorder">

            
                <div class="js-message message"></div>
                <div class="recorder">
                    <div class="toolbar">
                        <button class="js-file button button--open"><i class="fa fa-folder"
                                aria-hidden="true"></i></button>
                        <button class="js-record button button--record"><i class="fa fa-microphone"
                                aria-hidden="true"></i></button>
                        <button class="js-play button button--play button--disabled"><i class="fa fa-play"
                                aria-hidden="true"></i></button>
                        <button class="js-midi button button--midi button--disabled"><i class="fa fa-music"
                                aria-hidden="true"></i></button>
                        <audio class="js-audio audio audio--hidden" controls />
                        <input type="file" id="localfile" aria-hidden="true">
                    </div>

                    <div class="constrol">
                        Min <select name="minpitch" id="minpitch"></select>
                        Max <select name="maxpitch" id="maxpitch"></select>
                        BPM <input type="number" min="20" max="255" value="" name="bpm" id="bpm">
                        Time Sig: 
                        <select name="timesignature" id="timesignature"></select>
                    </div>

                    <div class="waveform">
                        <canvas class="js-canvas waveform__canvas"></canvas>
                    </div>

                </div>
            </div>

            <div class="piano-roll">

            </div>

            <div class="player-wrapper">
                <div id="player"></div>
            </div>


        </div>
    </div>

    <div id="container">
        <div id="sidebar">

            <div id="instruments">

            </div>

        </div>
        <div id="osmdCanvas"></div>
    </div>
</body>

</html>