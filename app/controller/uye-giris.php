<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$meta = [
    'title' => 'Giriş Yap'
];

if(post('submit')) {
    $email = post('email');
    $password = post('password');

//to do:eğer facebook ile giriş yapıldıysa
    if (!$email) {
        $error = 'Lütfen email adresinizi giriniz.';
    } else if (!$password) {
        $error = 'Lütfen şifrenizi giriniz.';
    } else {
        //üye var mı
        $user_type = 0;
        $row = user::userExist($email,$user_type);

        if ($row) {
            //parola kontrolü
            $password_verify = password_verify($password, $row['password']);
            if ($password_verify) {
                $success = 'Başarıyla giriş yaptınız. Yönlendiriliyorsunuz...';
                user::Login([
                    'id' => $row['id'],
                    'uname' => $row['uname']
                ]);
                header('Refresh:1;url=' . site_url());
            } else {
                $error = 'Hatalı bir şifre girdiniz. Lütfen tekrar deneyiniz.';
            }

        } else {
            $error = 'Böyle bir email ile kayıtlı üye bulunmamaktadır.';
        }
    }
}


require view('login');
