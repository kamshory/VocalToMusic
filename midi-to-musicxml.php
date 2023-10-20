<?php

use MusicXML\MusicXMLFromMidi;
use MusicXML\Util\MXL;

require_once "inc.lib/autoload.php";


$directory = __DIR__ . "/files";

$musicXML = new MusicXMLFromMidi();
try {
    if(isset($_POST['data']))
    {
        $midiData = base64_decode($_POST['data']);
        $filename = $directory . "/".date('YmdHis').mt_rand(100000, 999999);
        $source = $filename.".mid";        
        file_put_contents($source, $midiData);


        $midi = $musicXML->parseMidi($midiData);
        $mxl = new MXL();
        $xml = $musicXML->midiToMusicXml($midi, "My Song", "4.0", MXL::FORMAT_XML);

        //compressed version]
        
        //uncompressed version
        $result = $filename.".musicxml";
        header('Content-type: application/vnd.recordare.musicxml+xml');
        echo $xml;
        file_put_contents($result, $xml);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
