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
        'part_adi' => post('part_adi'),
        'part_soyadi' => post('part_soyadi'),
        'part_d_tarihi' => post('part_dogum_tarihi'),
        'part_sehir' => post('part_sehir'),
        'part_cinsiyet' => post('part_cinsiyet'),
        'cinsiyet' => post('cinsiyet'),
        'spesifik' => post('spesifik'),
        'yorum_turu' => post('yorum_turu'),
        'tel_no' => post('telno'),
        'yorum_dili' => post('yorumdili'),
        'f_id' => post('id'),
        'f_t_p_id' => '6',
        'u_id' => session('user_id'),
        'state' => '0'
    ];
    if (fale::add_love_fale($bilgiler)) {
        $success = 'Falınız başarıyla yorumcumuza ulaştı.' . '<br>' . 'En kısa sürede yorumlanacaktır...';
        header('Refresh:5;url = ' . site_url(''));
    }
}

if (session('user_id')){

    require view('send_love');
}else{
    require 'app/controller/uye-giris.php';
}
