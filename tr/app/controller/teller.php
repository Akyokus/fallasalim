<?php
if(!route(1)){
    $route[1] = 'index';
}

if(!file_exists(teller_controller(route(1)))){
    $route[1] = '404';
}

require teller_controller(route(1));
