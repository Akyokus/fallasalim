<?php
if (!session('admin_id')){
    require 'admin/controller/login.php';
}else{
    require admin_view('users');
}

