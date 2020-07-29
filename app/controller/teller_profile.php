<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



            $teller_id = post('id');
            $teller = fortune_teller::get_liste($teller_id);
            $comment = fortune_teller::get_comment_type($teller_id);




if (session('user_id')){

    require view('teller_profile');
}else{
    require 'app/controller/uye-giris.php';
}
