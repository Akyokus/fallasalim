<?php

$tellers = fortune_teller::special_type_teller_listing('7');

if (session('user_id')){

    require view('yildizname');
}else{
    require 'app/controller/uye-giris.php';
}
