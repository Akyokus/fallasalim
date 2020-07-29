<?php
if (!session('admin_id')){
    require 'admin/controller/login.php';
}else{
    require admin_view('add-user');
}


require admin_view('add-user');

