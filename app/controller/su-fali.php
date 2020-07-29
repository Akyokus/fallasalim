<?php


$tellers = fortune_teller::special_type_teller_listing('3');



if (session('user_id')){

    require view('water_fale');
}else{
    require 'app/controller/uye-giris.php';
}
