<!DOCTYPE html>
<html>

<head>
    <title>Web App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/css/bootstrap.css?v=350') ?>">
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/css/datepicker.css?v=3476') ?>">
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/css/theme.css?v=232') ?>">
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/js/swiper/swiper.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/js/sweet/sweet.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/js/timepicker/timepicker.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/css/responsive.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= teller_public_url('assets/css/icon.css') ?>">
    <script src="<?= teller_public_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= teller_public_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?= teller_public_url('assets/js/swiper/swiper.js') ?>"></script>
    <script src="<?= teller_public_url('assets/js/sweet/sweet.js') ?>"></script>
    <script src="<?= teller_public_url('assets/js/timepicker/timepicker.js') ?>"></script>
    <script src="<?= teller_public_url('assets/js/datepicker.js') ?>"></script>
    <!-- ses kaydi icin -->
    <script src="<?= teller_public_url('assets/js/recorder/recorder.js') ?>"></script>
    <script src="<?= teller_public_url('assets/js/recorder/Fr.voice.js') ?>"></script>
    <script src="<?= teller_public_url('assets/js/recorder/init.js') ?>"></script>
    <!-- ses kaydi icin -->
    <script src="<?= teller_public_url('assets/js/app.js') ?>"></script>
    <meta name="theme-color" content="#fff">
</head>

<body>
<!-- header -->
<header class="bg-white navbar navbar-expand-lg navbar-light sticky page-header" id="header">
    <a href="index.html" class="navbar-brand"><img src="<?= teller_public_url('assets/img/logo-dark.svg') ?>" height="24"></a>
    <a href="javascript:;" class="nav-link px-3 d-flex d-lg-none" data-toggle="modal" data-target="#mobile-menu">
        <i class="far fa-bars fa-lg"></i>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
                <a href="giris.html" class="nav-link">
                    <i class="fad fa-bells text-18"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center py-1 px-lg-0 px-2 text-color">
                    <?php $user=teller::get_teller(session('teller_id')) ?>
                    <span class="avatar w-36 bg-primary-lt"><?= $user['uname'][0] ?></span>
                    <span class="mx-3 d-none leading-normal d-lg-block">
                            <small class='text-fade d-block mb-1'>Merhaba,</small>

                            <span> <?= $user['uname'] . ' ' .$user['surname'] ?></span>
                        </span>
                </a>
            </li>
        </ul>
    </div>
</header>
