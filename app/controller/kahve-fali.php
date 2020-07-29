<?php
error_reporting(0);


    $tellers = fortune_teller::special_type_teller_listing('1');
    $comment = fortune_teller::get_by_comment_type('1');
if (session('user_id')){
    require view('coffe_fale');
}else{
    require 'app/controller/uye-giris.php';
}
