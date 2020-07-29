<?php

$tellers = fortune_teller::special_type_teller_listing('4');

if (session('user_id')){

    require view('hand_fale');
}else{
    require 'app/controller/uye-giris.php';
}

