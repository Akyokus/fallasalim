<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function post($name){
        if(isset($_POST[$name])){
            if (is_array($_POST[$name]))
                return array_map(function ($item){
                    return htmlspecialchars(trim($item));
                }, $_POST[$name]);
            return htmlspecialchars(trim($_POST[$name]));
            echo 'tamamlandı';
        }

}

function get($name){
    if(isset($_GET[$name])){
        if (is_array($_GET[$name])){
            return array_map(function ($item){
                return htmlspecialchars(trim($item));
            }, $_GET[$name]);
        }
        return htmlspecialchars(trim($_GET[$name]));
    }
}
