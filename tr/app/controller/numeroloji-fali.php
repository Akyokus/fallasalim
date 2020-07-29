<?php


$tellers = fortune_teller::special_type_teller_listing('5');

if (session('user_id')){
    require view('num_fale');
}else{
    require 'app/controller/uye-giris.php';
}
