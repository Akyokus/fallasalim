<?php

$teller = fortune_teller::get_liste(post('id'));
$comment = fortune_teller::general_get_comment_type(post('id'));
$comment = fortune_teller::get_one_type($comment);
if (post('submit')) {
    $bilgiler = [
        'ad' => post('name'),
        'soyad' => post('surname'),
        'dogum' => post('bdate'),
        'sehir' => post('sehir'),
        'd_tarih' => post('dogum_tarihi'),
        'iliski' => post('iliski'),
        'd_zamani' => post('dogum_zamani'),
        'cinsiyet' => post('cinsiyet'),
        'spesifik' => post('spesifik'),
        'yorum_turu' => post('yorum_turu'),
        'tel_no' => post('telno'),
        'yorum_dili' => post('yorumdili'),
        'f_id' => post('id'),
        'f_t_p_id' => '4'
    ];
    if (fale::add_num_and_star_fale($bilgiler)){

        $success = 'Falınız başarıyla yorumcumuza ulaştı.'.'<br>'.'En kısa sürede yorumlanacaktır...';
        header('Refresh:5;url = '.site_url(''));
    }
}

if (session('user_id')){

    require view('send_water');
}else{
    require 'app/controller/uye-giris.php';
}
