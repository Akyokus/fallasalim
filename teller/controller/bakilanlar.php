<?php
if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{

    $fale = teller::count_ncompleted_fale(1);

    require teller_view('bakilanlar');
}



