<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$teller = fortune_teller::get_liste(post('id'));
$comment = fortune_teller::general_get_comment_type(post('id'));
$comment = fortune_teller::get_one_type($comment);
if (post('submit')){
    if ($_FILES['image0']['error'] == 4 || $_FILES['image1']['error'] == 4 ||$_FILES['image2']['error'] == 4 || $_FILES['image3']['error'] == 4 || $_FILES['image4']['error'] == 4){
        $error = 'Fincan fotoğraflarınızı yüklemeyi unuttunuz. :)';
    }else{
        $bilgiler = [
            $image = [
                '0' => $_FILES['image0'],
                '1' => $_FILES['image1'],
                '2' => $_FILES['image2'],
                '3' => $_FILES['image3'],
                '4' => $_FILES['image4']
            ],
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
            'f_id' => post('id')
        ];

        if (fale::add_coffe_fale($bilgiler) == true){
            $success = 'Falınız başarıyla yorumcumuza ulaştı.'.'<br>'.'En kısa sürede yorumlanacaktır...';
//        header('Refresh:5;url = '.site_url(''));
        }
    }



}
if (session('user_id')){

    require view('send_coffe');
}else{
    require 'app/controller/uye-giris.php';
}
