<?php

if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{
    $fortune_teller = fortune_teller::get_liste(session('teller_id'));
    $comment = fortune_teller::general_get_comment_type(session('teller_id'));
    $total_fale = fortune_teller::get_total_fale(session('teller_id'));
    $coffe_comment = fortune_teller::get_fale_comment(session('teller_id'),1);
    $tarot_comment = fortune_teller::get_fale_comment(session('teller_id'),2);
    $water_comment = fortune_teller::get_fale_comment(session('teller_id'),3);
    $hand_comment = fortune_teller::get_fale_comment(session('teller_id'),4);
    $num_comment = fortune_teller::get_fale_comment(session('teller_id'),5);
    $love_comment = fortune_teller::get_fale_comment(session('teller_id'),6);
    $yildizname_comment = fortune_teller::get_fale_comment(session('teller_id'),7);
    $iskambil_comment = fortune_teller::get_fale_comment(session('teller_id'),8);
    require teller_view('profile');
}
