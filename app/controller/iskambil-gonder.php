<?php

$teller = fortune_teller::get_liste(post('id'));
$comment = fortune_teller::general_get_comment_type(post('id'));
$comment = fortune_teller::get_one_type($comment);

if (post('submit')){
    for ($i=0;$i<53;$i++){
        $selected[] =post('value'.$i);
    }
    $selected = array_values(array_filter($selected));
    if (post('value0') == 0){
        $selected[] = 0;
    }


    $bilgiler = [
        'ad' => post('name'),
        'soyad' => post('surname'),
        'dogum' => post('bdate'),
        'sehir' => post('sehir'),
        'iliski' => post('iliski'),
        'cinsiyet' => post('cinsiyet'),
        'spesifik' => post('spesifik'),
        'yorum_turu' => post('yorum_turu'),
        'tel_no' => post('telno'),
        'yorum_dili' => post('yorumdili'),
        'f_id' => post('id'),
        'tarot_type' => post('acilim'),
        'f_t_id' => '8'

    ];

    if (fale::add_tarot_fale($bilgiler,$selected)){
        $success = 'Falınız başarıyla yorumcumuza ulaştı.'.'<br>'.'En kısa sürede yorumlanacaktır...';
        header('Refresh:5;url = '.site_url(''));
    }


}
if (session('user_id')){
    require view('send_iskambil');
}else{
    require 'app/controller/uye-giris.php';
}
