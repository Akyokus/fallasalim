<?php

if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{
    $fale = teller::count_ncompleted_fale(0);
    $completed_fale = teller::count_ncompleted_fale(1);
    $in_pool_fale = teller::in_pool_fale();

    require teller_view('index');
}





