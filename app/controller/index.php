<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$meta = [
    'title' => setting("title"),
    'description' => setting("description"),
    'keywords' => setting("keywords")
];

$tellers = fortune_teller::teller_listing();
$comment = user::get_comment();


require view('index');
