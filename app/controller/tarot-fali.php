<?php


$tellers = fortune_teller::special_type_teller_listing('2');



if (session('user_id')){

    require view('tarot_fale');
}else{
    require 'app/controller/uye-giris.php';
}
