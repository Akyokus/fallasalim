<?php require 'static/header.php'; ?>
        <!-- header -->
        <div class="py-5">
            <div class="container py-4 text-white">
                <h2 class="text-42 font-weight-bold text-center">Falını gönder, Fallaşalım</h2>
                <div class="text-18 text-center">Falını ve Yorumcunu Seç, Kolayca Gönder..</div>
                <div class="d-none d-md-flex align-items-center justify-content-between my-5 fale-categories">
                    <a href="<?= site_url('kahve-fali') ?>" class="fale-category bg-custom-6 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fas fa-mug mug-icon"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Kahve Falı </div>
                        </div>
                    </a>

                    <a href="<?= site_url('tarot-fali') ?>" class="fale-category bg-custom-5 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 w-100 flex-filxl">
                        <div class="bg-icon"><i class="tarot"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Tarot Falı </div>
                        </div>
                    </a>
                    <a href="<?= site_url('su-fali') ?>" class="fale-category bg-custom-4 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fad fa-tint"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Su Falı </div>
                        </div>
                    </a>
                    <a href="<?= site_url('el-fali') ?>" class="fale-category bg-custom-3 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fas fa-hand-heart"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                El Falı </div>
                        </div>
                    </a>
                    <a href="<?= site_url('numeroloji-fali') ?>" class="fale-category bg-custom-2 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fas fa-abacus"></i></div>
                        <div class="text-ceter">
                            <div class="text-16">
                                Numeroloji Falı </div>
                        </div>
                    </a>
                    <a href="<?= site_url('ask-fali') ?>" class="fale-category bg-custom-1 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fad fa-heart-broken"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Aşk Falı </div>
                        </div>
                    </a>
                    <a href="<?= site_url('iskambil-fali') ?>" class="fale-category bg-custom-2 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fas fa-abacus"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                İskambil Falı </div>
                        </div>
                    </a>
                </div>

                    <div class="d-none d-md-flex align-items-center justify-content-center hero-statistic">
                    <div class="d-flex align-items-center justify-content-center flex-column px-4">
                        <div class="text-36 font-weight-bold">1,657</div>
                        <div class="text-16">Fal bakıldı</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center flex-column px-4">
                        <div class="text-36 font-weight-bold">981</div>
                        <div class="text-16">Falcı seni bekliyor</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero -->
    <!-- users -->
    <div class="py-4 bg-light">
        <div class="container py-4">
            <!-- heading -->
            <div class="d-flex align-items-center justify-content-center flex-column mb-4 mt-md-5">
                <div class="text-32 text-dark text-heading font-weight-bold">Gerçek Falcılar</div>
                <div class="text-16 text-muted">Gerçek yorumcularımız fallarınızı bekliyor.</div>
            </div>
            <!-- heading -->
            <div class="row">
                <!-- user -->
                <?php for($i = 0;$i <4;$i++): ?>
                <div class="col-md-3">
                    <a href="" class="card py-5 px-3 my-2">
                        <div class="avatar avatar-md bg-light w-80 mx-auto" style="background-image: url(https://randomuser.me/api/portraits/women/<?= $i ?>.jpg);">
                            <?php if($tellers[$i]['state'] == 1): ?>
                                <i class="on avatar-status"></i>
                            <?php else: ?>
                                <i class="off avatar-status"></i>
                            <?php endif; ?>
                        </div>
                        <div class="flex-fill text-center mt-3">
                            <div class="text-18 text-dark px-2">
                                <?= $tellers[$i]['uname'] . ' ' . $tellers[$i]['surname'] ?> </div>
                            <div class="text-muted text-14 px-2 my-1 h-1x">
                                <?= $tellers[$i]['title'] ?> </div>
                            <div class="mt-3 border-top pt-2 px-3 text-12">
                                <div class="d-flex justify-content-between py-1">
                                    <div class="text-muted">Başarı</div>
                                    <div class="font-weight-bold text-success">% <?= $tellers[$i]['total_rate'] ?></div>
                                </div>
                                <div class="d-flex justify-content-between py-1">
                                    <div class="text-muted">Kredi</div>
                                    <div class="font-weight-bold text-warning"><?= $tellers[$i]['success_fales'] ?></div>
                                </div>
                                <div class="d-flex justify-content-between py-1">
                                    <div class="text-muted">Yorum</div>
                                    <div class="font-weight-bold text-primary"><?= $tellers[$i]['comment_type'] ?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- user -->
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <!-- users -->
    <!-- categories -->
    <div class="bg-purple-gradient bg-pattern">
        <div class="pattern-shape rotate">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1920 242.6" style="enable-background:new 0 0 1920 242.6;" xml:space="preserve" class="svg replaced-svg">
                <path class="st0" d="M1920,70.5v172.1H0v-27.9C171.3,122.8,367.9,89,589.6,113.4C923.1,149.9,1014.7,43,1239.7,7  c224.9-35.9,442.2,77.7,576.1,75.6C1853.2,82,1888,78,1920,70.5z"></path>
                <rect x="-1036" y="-829.4" class="st1" width="1920" height="137.6"></rect>
                <rect x="-1136" y="-829.4" class="st1" width="2446" height="380"></rect>
            </svg>
        </div>
        <div class="container pt-4">
            <!-- heading -->
            <div class="d-flex align-items-center justify-content-center flex-column">
                <div class="text-32 text-white text-heading font-weight-bold">Yorumlama Yöntemleri</div>
                <div class="text-16 text-white text-fade">Gerçek yorumcularımız fallarınızı bekliyor.</div>
            </div>
            <!-- heading -->
            <div class="row align-items-center justify-content-center my-5 fale-categories mx-auto">
                <!-- category -->
                <div class="col-md-2">
                    <a href="" class="fale-category bg-random-4 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 my-1 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fad fa-pen"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Yazılı </div>
                        </div>
                    </a>
                </div>
                <!-- category -->
                <!-- category -->
                <div class="col-md-2">
                    <a href="" class="fale-category bg-random-3 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 my-1 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fad fa-microphone"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Sesli </div>
                        </div>
                    </a>
                </div>
                <!-- category -->
                <!-- category -->
                <div class="col-md-2">
                    <a href="" class="fale-category bg-random-2 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 my-1 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fad fa-video"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Videolu </div>
                        </div>
                    </a>
                </div>
                <!-- category -->
                <!-- category -->
                <div class="col-md-2">
                    <a href="" class="fale-category bg-random-1 py-5 px-2 rounded d-flex flex-column align-items-center mx-2 my-1 w-100 flex-filxl">
                        <div class="bg-icon"><i class="fad fa-mobile-android"></i></div>
                        <div class="text-center">
                            <div class="text-16">
                                Telefon </div>
                        </div>
                    </a>
                </div>
                <!-- category -->
            </div>
        </div>
        <div class="pattern-shape">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1920 242.6" style="enable-background:new 0 0 1920 242.6;" xml:space="preserve" class="svg replaced-svg">
                <path class="st0" d="M1920,70.5v172.1H0v-27.9C171.3,122.8,367.9,89,589.6,113.4C923.1,149.9,1014.7,43,1239.7,7  c224.9-35.9,442.2,77.7,576.1,75.6C1853.2,82,1888,78,1920,70.5z"></path>
                <rect x="-1036" y="-829.4" class="st1" width="1920" height="137.6"></rect>
                <rect x="-1136" y="-829.4" class="st1" width="2446" height="380"></rect>
            </svg>
        </div>
    </div>
    <!-- categories -->
    <!-- comments -->
    <div class="py-4 bg-light yorumlar">
        <div class="container py-4">
            <!-- heading -->
            <div class="d-flex align-items-center justify-content-center flex-column">
                <div class="text-32 text-dark text-heading font-weight-bold">Kullanıcı Yorumları</div>
                <div class="text-16 text-muted">Gerçek yorumcularımız fallarınızı bekliyor.</div>
            </div>
            <!-- heading -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center flex-column text-center my-4">
                            <div class="rating">
                                <?php for ($i=0;$i<$comment[0]['comment_rate'];$i++): ?>
                                    <div class="rating-star active"></div>
                                <?php endfor; ?>
                                <?php for ($i=0;$i<(5-$comment[0]['comment_rate']);$i++): ?>
                                    <div class="rating-star"></div>
                                <?php endfor; ?>
                            </div>
                            <div class="text-18 px-5 my-3 text-muted">
                                <?= $comment[0]['comment'] //TO DO: Swiper düzelince çoklu yorum yap?>
                            </div>
                            <div class="text-muted text-fade"><?= $comment[0]['uname'] ?></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center flex-column text-center my-4">
                            <div class="rating">
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star"></div>
                            </div>
                            <div class="text-18 px-5 my-3 text-muted">
                                Binnaz Abla Fal uygulaması ile gerçek yorumculara anında ulaşabiliyorum. Çok pratik ve kullanışlı. Favorim telefonla fal; istediğim soruları sorup anında cevap alabiliyorum.
                            </div>
                            <div class="text-muted text-fade">Ayşegül A.</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center flex-column text-center my-4">
                            <div class="rating">
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star"></div>
                            </div>
                            <div class="text-18 px-5 my-3 text-muted">
                                Binnaz Abla Fal uygulaması ile gerçek yorumculara anında ulaşabiliyorum. Çok pratik ve kullanışlı. Favorim telefonla fal; istediğim soruları sorup anında cevap alabiliyorum.
                            </div>
                            <div class="text-muted text-fade">Ayşegül A.</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center flex-column text-center my-4">
                            <div class="rating">
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star"></div>
                            </div>
                            <div class="text-18 px-5 my-3 text-muted">
                                Binnaz Abla Fal uygulaması ile gerçek yorumculara anında ulaşabiliyorum. Çok pratik ve kullanışlı. Favorim telefonla fal; istediğim soruları sorup anında cevap alabiliyorum.
                            </div>
                            <div class="text-muted text-fade">Ayşegül A.</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center flex-column text-center my-4">
                            <div class="rating">
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star active"></div>
                                <div class="rating-star"></div>
                            </div>
                            <div class="text-18 px-5 my-3 text-muted">
                                Binnaz Abla Fal uygulaması ile gerçek yorumculara anında ulaşabiliyorum. Çok pratik ve kullanışlı. Favorim telefonla fal; istediğim soruları sorup anında cevap alabiliyorum.
                            </div>
                            <div class="text-muted text-fade">Ayşegül A.</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- comments -->
    <!-- packages -->
    <div class="py-5 bg-white">
        <div class="container py-4">
            <!-- heading -->
            <div class="d-flex align-items-center justify-content-center flex-column">
                <div class="text-32 text-dark text-heading font-weight-bold">Fal Kredileri</div>
                <div class="text-16 text-muted">Kredi al, mobil uygulamada veya webde kullan, hızla fal gönder!</div>
            </div>
            <!-- heading -->
            <div class="row align-items-center justify-content-center my-4">
                <!-- package -->
                <?php if ($campaign = setting('campaign_title')):
                $title_arr = explode('/', setting('campaign_title'));
                $body_arr = explode('/', setting('campaign'));
                for ($i = 0; $i < count($title_arr); $i++):?>
                <div class="col-md-4">
                    <div class="package-<?= ($i + 1) ?> p-5 mb-3 rounded mx-3 <?php if ($i == 1) {
                        echo 'popular" data-text="Popüler"';
                    }; ?>">
                        <div class="text-20 mb-3 font-weight-bold text-primary"><?= $title_arr[$i] ?></div>
                        <div class="text-16"><?= $body_arr[$i] ?></div>
                        <a href="" class="btn btn-block mt-4 btn-primary bg-hero-gradient btn-rounded">SATIN AL</a>
                    </div>
                </div>
                <?php endfor; ?>
                    <?php endif; ?>
                <!-- package -->
            </div>
        </div>
    </div>
    <!-- packages -->
    <!-- comments -->
<div class="py-4 bg-light fal-turleri">
    <div class="container py-4">
        <!-- heading -->
        <div class="d-flex align-items-center justify-content-center flex-column">
            <div class="text-32 text-dark text-heading font-weight-bold">Fal Türleri</div>
            <div class="text-16 text-muted">Farklı fal türleri, daha fazla yorumlama seçeneği.</div>
        </div>
        <!-- heading -->
    </div>
    <div class="swiper-container px-4">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="<?= site_url('kahve-fali') ?>" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="fas fa-mug mug-icon"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            Kahve Falı </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="<?= site_url('kahve-fali') ?>" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= site_url('tarot-fali') ?>" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="tarot"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            Tarot Falı </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="<?= site_url('tarot-fali') ?>" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= site_url('su-fali') ?>" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="fad fa-tint"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            Su Falı </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="<?= site_url('su-fali') ?>" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= site_url('el-fali') ?>" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="fas fa-hand-heart"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            El Falı </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="<?= site_url('el-fali') ?>" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= site_url('numeroloji') ?>" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="fas fa-abacus"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            Numeroloji Falı </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="<?= site_url('numeroloji') ?>" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= site_url('ask-fali') ?>" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="fad fa-heart-broken"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            Aşk Falı </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="<?= site_url('ask-fali') ?>" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= site_url('yildizname-fali') ?>" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="fad fa-star-half"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            Yıldızname </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="<?= site_url('yildizname') ?>" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="" class="card py-4 px-3 my-2 text-center">
                    <div class="bg-icon"><i class="iskambil"></i></div>
                    <div class="card-body">
                        <div class="text-18 font-weight-bold">
                            İskambil Falı </div>
                        <div class="text-14 text-muted text-left mt-3">
                            Türk kahvesi keyfinden sonra, telveleri çalkala, fincanı ters çevirip kapat. Sonra en yetenekli kahve falı yorumcularımızdan birini seç ve kahve falı resimlerini gönder. 'Bir fincan kahvenin kırk yıllık hatırı var' derler ya, bizim için de kahve falı keyifli bir sohbet ve iletişim aracı. Tek bir fincanla başlayan bu hikaye uzun dostluklara, gerçek arkadaşlıklara dönüşsün.
                        </div>
                        <div href="" class="btn btn-primary btn-primary-gradient btn-block btn-rounded mt-4">FALLAŞALIM</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
    <!-- comments -->
    <div class="btn-success-gradient bg-pattern">
        <div class="pattern-shape rotate">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1920 242.6" style="enable-background:new 0 0 1920 242.6;" xml:space="preserve" class="svg replaced-svg">
                <path class="st0" d="M1920,70.5v172.1H0v-27.9C171.3,122.8,367.9,89,589.6,113.4C923.1,149.9,1014.7,43,1239.7,7  c224.9-35.9,442.2,77.7,576.1,75.6C1853.2,82,1888,78,1920,70.5z"></path>
                <rect x="-1036" y="-829.4" class="st1" width="1920" height="137.6"></rect>
                <rect x="-1136" y="-829.4" class="st1" width="2446" height="380"></rect>
            </svg>
        </div>
        <div class="container py-4">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4">
                    <img src="<?= public_url('new_theme/assets/img/mockup.png') ?>" class="img-fluid">
                </div>
                <div class="col-md-5">
                    <div class="text-32 font-weight-bold">Fal Keyfi Cepte</div>
                    <div class="text-18">Android ve IOS Uygulamalarımızla fal keyfi her an yanınızda!</div>
                    <div class="text-24 font-weight-bold mt-3">Hemen indirin!</div>
                    <div class="d-flex align-items-start mt-3">
                        <a href="" class="d-flex align-items-center text-left app-bg w-sm mr-3">
                            <i class="fab fa-android fa-3x"></i>
                            <div class="ml-3 leading-normal">
                                <div class="font-weight-bold mb-1">Google Play</div>
                                <div class="font-weight-normal">ücretsiz indirin</div>
                            </div>
                        </a>
                        <a href="" class="d-flex align-items-center text-left app-bg w-sm">
                            <i class="fab fa-apple fa-3x"></i>
                            <div class="ml-3 leading-normal">
                                <div class="font-weight-bold mb-1">App Store</div>
                                <div class="font-weight-normal">ücretsiz indirin</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pattern-shape">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1920 242.6" style="enable-background:new 0 0 1920 242.6;" xml:space="preserve" class="svg replaced-svg">
                <path class="st0" d="M1920,70.5v172.1H0v-27.9C171.3,122.8,367.9,89,589.6,113.4C923.1,149.9,1014.7,43,1239.7,7  c224.9-35.9,442.2,77.7,576.1,75.6C1853.2,82,1888,78,1920,70.5z"></path>
                <rect x="-1036" y="-829.4" class="st1" width="1920" height="137.6"></rect>
                <rect x="-1136" y="-829.4" class="st1" width="2446" height="380"></rect>
            </svg>
        </div>
    </div>
    <!-- packages -->
    <div class="py-5 bg-white">
        <div class="container py-3">
            <div class="row my-4">
                <div class="col-md-6">
                    <!-- heading -->
                    <div class="d-flex flex-column mb-4">
                        <div class="text-32 text-dark text-heading font-weight-bold">Fallaşalım Blog</div>
                        <div class="text-16 text-muted">Astroloji, burçlar, ilişkiler ve daha birçok konuda sizler için yazıyoruz.</div>
                    </div>
                    <!-- heading -->
                    <div class="bg-blog">
                        <div class="font-weight-bold text-24 text-white">Asteroitler Savaşı Juno ile Lilith Karesi</div>
                        <div class="text-16 text-white text-fade">Bu hafta içinde İkizler burcundaki Juno asteroidi ile Kova burcundaki</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- heading -->
                    <div class="d-flex flex-column mb-4">
                        <div class="text-32 text-dark text-heading font-weight-bold">Rüya Tabirleri</div>
                        <div class="text-16 text-muted">Rüyalarınız ne anlatıyor? Sizin için bulalım.</div>
                    </div>
                    <!-- heading -->
                    <div class="bg-night">
                        <div class="font-weight-bold text-24 text-white">En Kapsamlı Özgün Rüya Tabirleri</div>
                        <input type="text" name="" class="form-control form-control-lg form-body mt-3" placeholder="Rüya tabiri ara">
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php require 'static/footer.php';?>


