<?php

$user = user::get_user(session('user_id'));
$fale = fale::get_completed_fale(0);
if (session('user_id')){

    require view('bekleyen_fallarim');
}else{
    require 'app/controller/uye-giris.php';
}

