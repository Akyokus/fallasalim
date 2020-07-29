<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function site_url($url = false){
    return URL . $url ;
}

function public_url($url = false){
    return URL . '/public/' . $url;

}
