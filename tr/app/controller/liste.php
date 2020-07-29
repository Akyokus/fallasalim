<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



$tellers = fortune_teller::teller_listing();


    require view('liste');



