<?php
if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{

    $fale = teller::count_ncompleted_fale(0);

    require teller_view('bekleyenler');
}



