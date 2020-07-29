<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_destroy();
header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
exit;
