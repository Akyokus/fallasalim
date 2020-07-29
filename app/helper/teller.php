<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function teller_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/teller/controller/' . $controllerName .'.php';
}

function teller_view($viewName){
    return PATH . '/teller/view/' . $viewName . '.php';
}


function teller_url($url = false){
    return URL . '/version.1.4/teller/' . $url;
}

function teller_public_url($url = false){
    return URL . '/version.1.4/teller/public/' . $url;

}

