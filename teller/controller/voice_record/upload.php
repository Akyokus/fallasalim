<?php
error_reporting(0);
if(isset($_POST['audio'])){
    $audio = $_POST['audio'];
    print_r($audio);
    $audio = str_replace('data:audio/wav;base64,', '', $audio);
    $decoded = base64_decode($audio);
    $file_name = "recorded_audio".rand(0,9999).rand(0,9999).rand(999,999999).".wav";
    $file_location = $file_name;

    file_put_contents($file_location, $decoded);
    fale::upload_voice_name($file_location,'3');
}
require teller_view('fale_detail');
