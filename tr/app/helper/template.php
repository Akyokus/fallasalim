<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function site_url($url){
    return URL . '/tr/' . $url ;
}

function public_url($url = false){
    return URL . '/tr/public/' . $url;

}
