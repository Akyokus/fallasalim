<!-- footer -->
<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<div class="py-5 bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pb-4">
                    <?php if($musteri_hiz = setting('musteri_hiz')): ?>
                        <div class="text-12">Müşteri Hizmetleri</div>
                        <div class="text-18 font-weight-bold"><?= $musteri_hiz ?></div>
                    <?php endif; ?>

                </div>
                <div class="d-flex align-items-center">
                    <?php if($facebook = setting('facebook')) : ?>
                        <a href="<?= $facebook ?>" class="bg-facebook btn-icon mr-2"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if($twitter = setting('twitter')) : ?>
                        <a href="<?= $twitter ?>" class="bg-twitter btn-icon mr-2"><i class="fab fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if($instagram = setting('instagram')) : ?>
                        <a href="<?= $instagram ?>" class="bg-instagram btn-icon mr-2"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if($youtube = setting('youtube')) : ?>
                        <a href="<?= $youtube ?>" class="bg-youtube btn-icon mr-2"><i class="fab fa-youtube"></i></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="nav text-14 font-weight-bold flex-column">
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">
                            Kahve Falı</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">
                            Tarot Falı</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">
                            İskambil Falı</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">
                            El Falı</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">
                            Numeroloji Falı</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">
                            Mum Falı</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="nav text-14 font-weight-bold flex-column">
                    <li class="nav-item">
                        <a class="nav-link py-1" href="yorumcu-ol">Yorumcu Ol</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">Gizlilik Koşulları</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">Kullanıcı Sözleşmesi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="#">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- .mobile menu -->
<div class="aside-sm aside" id="mobile-menu">
    <div class="modal-dialog bg-white m-0 w-md">
        <div class="sidenav ">
            <div class="scrollable py-3 flex w-100">
                <?php if (session('user_id')): ?>
                    <?php $name = session('user_name') ?>
                    <div class="px-3 d-flex align-items-center">
                        <span class="avatar w-36 bg-primary-lt"><?= $name[0] ?></span>
                        <span class="mx-3 ">
                            <span class="font-weight-bold"><?= session('user_name') ?></span>
                            <small class='text-fade d-block mbt-1'><?php
                                global $db;
                                $query = $db->prepare('SELECT credit,user_type FROM users WHERE id = :id');
                                $query->execute([
                                    'id' => session('user_id')
                                ]);
                                $row = $query->fetch(PDO::FETCH_ASSOC);
                                echo $row['credit'].' Kredi';
                                ?></small>
                        </span>
                    </div>
                    <div class="px-3 d-flex align-items-center my-3">
                        <a href="" class="btn btn-block btn-rounded btn-primary-gradient">Kredi Yükle</a>
                    </div>
                <?php endif; ?>


                <div class="nav-border b-primary auto-nav" data-nav>
                    <ul class="nav">
                        <li>
                            <a href="<?= site_url('') ?>">
                                <span class="nav-icon"><i class="fad fa-home"></i></span>
                                <span class="nav-text">Anasayfa</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('liste') ?>">
                                <span class="nav-icon"><i class="fad fa-users"></i></span>
                                <span class="nav-text">Yorumcular</span>
                            </a>
                        </li>
                        <?php if (!session('user_id')): ?>
                            <li>
                                <a href="<?= site_url('kayit-ol') ?>">
                                    <span class="nav-icon"><i class="fad fa-cabinet-filing"></i></span>
                                    <span class="nav-text">Kaydol</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= site_url('uye-giris') ?>">
                                    <span class="nav-icon"><i class="fad fa-sign-in"></i></span>
                                    <span class="nav-text">Giriş yap</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($row['user_type'] == 0): ?>
                            <li class="nav-header hidden-folded mt-2">
                                <span>Kullanıcı</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-club"></i></span>
                                    <span class="nav-text">Fallarım</span>
                                    <span class="nav-caret"></span>
                                </a>
                                <ul class="nav-sub">
                                    <li>
                                        <a href="#">
                                            <span class="nav-text">Bekleyen Fallarım</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="nav-text">Bakılan Fallarım</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-cog"></i></span>
                                    <span class="nav-text">Ayarlar</span>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="nav-header hidden-folded mt-2">
                                <span>Yorumcu</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-club"></i></span>
                                    <span class="nav-text">Fallarım</span>
                                    <span class="nav-caret"></span>
                                </a>
                                <ul class="nav-sub">
                                    <li>
                                        <a href="#">
                                            <span class="nav-text">Fal Geçmişim</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="nav-text">Bekleyen Fallarım</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="nav-text">Bakılan Fallarım</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="nav-text">Havuzdaki Fallar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-sack-dollar"></i></span>
                                    <span class="nav-text">Muhasebe</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-bells"></i></span>
                                    <span class="nav-text">Bildirimler</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-chart-pie-alt"></i></span>
                                    <span class="nav-text">İstatistikler</span>
                                </a>
                            </li>
                            <li class="nav-header hidden-folded mt-2">
                                <span>Hesabım</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-user"></i></span>
                                    <span class="nav-text">Profilim</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="nav-icon"><i class="fad fa-cog"></i></span>
                                    <span class="nav-text">Ayarlar</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / .mobile menu -->
</body>

</html>

