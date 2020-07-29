<?php
if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{

    $in_pool_fale = teller::in_pool_fale();

    require teller_view('havuz');
}



