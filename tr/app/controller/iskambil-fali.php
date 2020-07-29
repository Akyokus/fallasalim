<?php


$tellers = fortune_teller::special_type_teller_listing('8');

if (session('user_id')){
    require view('iskambil_fale');
}else{
    require 'app/controller/uye-giris.php';
}

