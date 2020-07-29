
<div class="d-md-flex justify-content-between">
    <div class="page-sidenav no-shrink bg-white w-md border-top sticky">
        <div class="sidenav h-100 modal-dialog">
            <div class="flex scrollable hover py-3 h-100">
                <div class="nav-border b-primary auto-nav" data-nav>
                    <ul class="nav">
                        <li>
                            <a href="<?= teller_url() ?>">
                                <span class="nav-icon"><i class="fad fa-home"></i></span>
                                <span class="nav-text">Anasayfa</span>
                            </a>
                        </li>
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
                                    <a href="<?= teller_url('fal_gecmisi') ?>">
                                        <span class="nav-text">Fal Geçmişim</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= teller_url('bekleyenler') ?>">
                                        <span class="nav-text">Bekleyen Fallarım</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= teller_url('bakilanlar') ?>">
                                        <span class="nav-text">Bakılan Fallarım</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= teller_url('havuzdakiler') ?>">
                                        <span class="nav-text">Havuzdaki Fallar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= teller_url('muhasebe') ?>">
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
                            <a href="<?= teller_url('istatistik') ?>">
                                <span class="nav-icon"><i class="fad fa-chart-pie-alt"></i></span>
                                <span class="nav-text">İstatistikler</span>
                            </a>
                        </li>
                        <li class="nav-header hidden-folded mt-2">
                            <span>Hesabım</span>
                        </li>
                        <li>
                            <a href="<?= teller_url('profile') ?>">
                                <span class="nav-icon"><i class="fad fa-user"></i></span>
                                <span class="nav-text">Profilim</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= teller_url('settings') ?>">
                                <span class="nav-icon"><i class="fad fa-cog"></i></span>
                                <span class="nav-text">Ayarlar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
