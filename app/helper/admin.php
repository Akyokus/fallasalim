<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function admin_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/admin/controller/' . $controllerName .'.php';
}

function admin_view($viewName){
    return PATH . '/admin/view/' . $viewName . '.php';
}


function admin_url($url = false){
    return URL . '/version.1.4/admin/' . $url;
}

function admin_public_url($url = false){
    return URL . '/version.1.4/admin/public/' . $url;

}

