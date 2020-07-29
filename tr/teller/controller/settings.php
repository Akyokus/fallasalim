<?php

if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{

    $teller = fortune_teller::get_liste(session('teller_id'));


    $cinsiyet= 0;

    if (post('submit')){
        if ($teller['gender'] == 3){
            $cinsiyet = post('cinsiyet');
            $cinsiyet = 3;
        }
        $data = [
            'phone_no' => post('tel_no'),
            'gender' => $cinsiyet,
            'f_t_id' => implode(',',post('fale_type')),
            'f_l_type' => implode(',',post('fale_look_type')),
            'title' => post('title'),
            'detail' => post('detail'),
            'id' => session('teller_id')
        ] ;
        print_r($data);
        ;
        if (teller::update_teller($data)){
            header('Refresh:0;');
        }



    }
    require teller_view('ayarlar');
}
