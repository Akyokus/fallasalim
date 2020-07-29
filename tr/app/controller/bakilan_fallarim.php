<?php
$user = user::get_user(session('user_id'));
$fale = fale::get_completed_fale(1);
if (session('user_id')){
    require view('bakilan_fallarim');
}else{
    require 'app/controller/uye-giris.php';
}

