<?php

if (isset($_POST['audio'])) {
    echo 'geldi';
    $audio = $_POST['audio'];
    $audio = str_replace('data:audio/wav;base64,', '', $audio);
    $decoded = base64_decode($audio);
    $file_location = "./save_folder/recorded_audio.wav";

    file_put_contents($file_location, $decoded);
}
require teller_view('ses_kayit');
