<?php



$user = user::get_user(session('user_id'));


if (post('submit')){
    $bilgiler = [
        'tel_no' => post('tel_no'),
        'dogum_gunu' => post('bdate'),
        'iliski' => post('iliski'),
        'cinsiyet' => post('cinsiyet'),
        'id' => session('user_id')
    ];
    if (user::update_user($bilgiler)){
        $success = 'Bilgileriniz başarıyla değiştirildi.';
    }else{
        $success = 'Bilgilerinizi değiştirirken bir sorunla karşılaştık. Lütfen sonra deneyiniz.';
    }
}

if (session('user_id')){
        require view('profile');
}else{
    require 'app/controller/uye-giris.php';
}
