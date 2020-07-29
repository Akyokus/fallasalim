<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?=  setting('title') ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/css/bootstrap.css?v=3487') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/css/datepicker.css?v=4788') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/css/theme.css?v=396') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/js/swiper/swiper.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/js/sweet/sweet.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/js/timepicker/timepicker.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/css/responsive.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_url('new_theme/assets/css/icon.css') ?>">
    <script src="<?= public_url('new_theme/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= public_url('new_theme/assets/js/bootstrap.js') ?>"></script>
    <script src="<?= public_url('new_theme/assets/js/swiper/swiper.js') ?>"></script>
    <script src="<?= public_url('new_theme/assets/js/sweet/sweet.js') ?>"></script>
    <script src="<?= public_url('new_theme/assets/js/timepicker/timepicker.js') ?>"></script>
    <script src="<?= public_url('new_theme/assets/js/datepicker.js') ?>"></script>
    <!-- ses kaydi icin -->
    <script src="<?= public_url('new_theme/assets/js/recorder/recorder.js') ?>"></script>
    <script src="<?= public_url('new_theme/assets/js/recorder/Fr.voice.js') ?>"></script>
    <script src="<?= public_url('new_theme/assets/js/recorder/init.js') ?>"></script>
    <script src="cdn/src/recorder.js"></script>
    <script src="cdn/src/Fr.voice.js"></script>
    <script src="cdn/js/jquery.js"></script>
    <script src="cdn/js/app.js"></script>
    <!-- ses kaydi icin -->
    <script src="<?= public_url('new_theme/assets/js/app.js') ?>"></script>
    <meta name="theme-color" content="#fff">
</head>

<body>
<!-- hero -->
<div class="hero">
    <!-- header -->
    <header class="header navbar navbar-expand-lg navbar-dark py-3" id="header">
        <div class="container">
            <a href="<?= site_url('') ?>" class="navbar-brand"><img src="<?= public_url('new_theme/assets/img/logo.svg') ?>" height="34"></a>
            <a href="javascript:;" class="nav-link px-3 d-flex d-lg-none" data-toggle="modal" data-target="#mobile-menu">
                <i class="far fa-bars fa-lg text-white"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto align-items-center ml-4">
                    <li class="nav-item">
                        <a href="<?= site_url('fal-turleri') ?>" class="nav-link px-3">Fal Türleri</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('liste') ?>" class="nav-link px-3">Yorumcular</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('kredi-yukle') ?>" class="nav-link px-3">Kredi Yükle</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto align-items-center">
                    <?php if(session('user_id')): ?>
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item">
                                <a href="<?= site_url('profile'); ?>" class="nav-link">
                                    <?= session('user_name'); ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('logout') ?>" class="nav-link pr-md-0">
                                    Çıkış Yap
                                </a>
                            </li>
                        </ul>
                    <?php else: ?>
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item">
                                <a href="<?= site_url('kayit-ol'); ?>" class="nav-link">
                                    Kaydol
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= site_url('uye-giris') ?>" class="nav-link pr-md-0">
                                    Giriş yap
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a href="<?= site_url('iletisim') ?>" class="nav-link pr-md-0">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
