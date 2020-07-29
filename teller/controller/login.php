<?php


if (post('submit')){

        $teller_email = post('email');
        $teller_password = post('password');


    $row = teller::tellerExist($teller_email);

        if ($row){
            $password_verify = password_verify($teller_password,$row['password']);

            if ($row['password']===$teller_password){
                $success = 'Yorumcu paneline hoşgeldiniz. Yönlendiriliyorsunuz...';

                user::teller_login([
                    'teller_id' => $row['id'],
                    'teller_uname' => $row['uname']
                ]);
                header('Refresh:5;url=' . teller_url());
            }else{
                $success = 'Hatalı bir şifre girdiniz.';
            }
        }else{
            $success = 'Böyle bir üyelik bulunmamaktadır.';
        }
}


require teller_view('login');
