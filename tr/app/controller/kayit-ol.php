<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$meta = [
    'title' => setting("title"),
];

try {

    if (post('submit')) {
        $name = post('rname');
        $surname = post('surname');
        $email = post('email');
        $telno = post('telno');
        $password = post('pass');
        $pass_again = post('pass_again');

        function pass_sec($password){
            $num = 0;
            $alph = 0;
            $space = 0;
            $pass_sec = str_split($password);
            foreach ($pass_sec as $temp){
                is_numeric($temp) ? $num++ : null;
                is_string($temp) ? $alph++ : null;
                $temp === ' ' ? $space++ : null;
            }
            if($num < $alph && $space == 0){
                return true;
            }else{
                return false;
            }
        }
        if (!$name) {
            $error = 'Lütfen isminizi giriniz.';
        } elseif (!$email) {
            $error = 'Lütfen mail adresinizi giriniz.';
        }elseif (!$telno) {
            $error = 'Lütfen telefon numaranızı giriniz.';
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Lütfen geçerli bir mail adresi giriniz.';
        } elseif (!$password || !$pass_again) {
            $error = 'Lütfen şifrenizi giriniz.';
        } elseif (!($password === $pass_again)) {
            $error = 'Girdiğiniz şifreler aynı değil.';
        }elseif (strlen($telno) != 11) {
            $error = 'Lütfen telefon numaranızı belirtilen formatta giriniz.';
        }elseif ((strlen($name)) < 2) {
            $error = 'Lütfen gerçek adınızı giriniz.';
        } elseif (strlen($password) < 7 || pass_sec($password) == false) {
            $error = 'Lütfen daha güçlü bir şifre seçiniz';
        } else {
            $row = user::userExist($email);
            if ($row) {
                $error = 'Bu mail adresiyle daha önce zaten bir üyelik var!';
            } else {
                $result = user::register([
                    $name, $surname, $email, password_hash($password, PASSWORD_DEFAULT),$telno
                ]);
                if ($result) {
                    $success = 'Üyeliğiniz başarıyla oluşturuldu, Yönlendiriliyorsunuz...';
                    user::Login([
                        'id' => $db->lastInsertId(),
                        'uname' =>  $name,
                    ]);
                    header('Refresh:1;url=' . site_url());
                } else {
                    $error = 'Veritabanı hatası';
                }
            }
        }
    }
} catch (Exception $e) {
    var_dump($e);
}
require view('register');
