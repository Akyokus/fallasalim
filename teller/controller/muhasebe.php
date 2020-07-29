<?php
if (!session('teller_id')){
    require 'teller/controller/login.php';
}else{

    $fale = teller::count_ncompleted_fale(1);
    $total_cost = teller::sum_fale_cost();

    require teller_view('muhasebe');
}



