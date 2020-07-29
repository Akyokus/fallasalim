<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!route(1)){
    $route[1] = 'index';
}

if(!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

$menus = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'tachometer'
    ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog'
    ],
    'users' => [
        'title' => 'Üyeler',
        'icon' => 'user',
        'submenu' => [
            'add-user' => 'Üye Ekle',
            'users' => 'Üyeleri Listele'
        ]
    ]
];
require admin_controller(route(1));

