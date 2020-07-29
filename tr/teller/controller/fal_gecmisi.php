<?php
if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{

    $all_fale = teller::all_fale();

    require teller_view('fal_gecmisi');
}



