<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
ob_start();

function loadClasses($className){
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}
$autoload = spl_autoload_register('loadClasses');


$config = require  __DIR__ . '/config.php';

try{
    $db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
    $db->exec("set names utf8");
}catch (PDOException $e){
    echo $e;
}


require __DIR__ . '/settings.php';


foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
        require $helperFile;

}


