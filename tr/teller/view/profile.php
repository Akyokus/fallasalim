<?php require 'static/header.php'?>
<?php require 'static/sidebar.php';
error_reporting(0);?>


        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="bg-white bg-header-content rounded py-5 px-4">
                        <div class="d-flex flex-column">
                            <div class="avatar bg-light w-128 mx-auto" style="background-image: url(https://randomuser.me/api/portraits/women/21.jpg);"><i class="on avatar-status"></i></div>
                            <div class="flex-fill mt-5 text-center">
                                <div class="text-24 font-weight-bold"><?= $fortune_teller['uname'] . ' ' . $fortune_teller['surname'] ?></div>
                                <div class="text-14 text-muted"><?= $fortune_teller['title'] ?></div>
                            </div>
                        </div>

                        <div class="d-block mt-3 pt-2 px-3 text-12">
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Ortalama yanıt süresi</div>
                                <div class="font-weight-bold text-dark">10 dk</div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Bugüne kadar bakılan fal</div>
                                <div class="font-weight-bold text-primary text-14"><?= count($total_fale) ?></div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Başarı</div>
                                <div class="font-weight-bold text-success">% <?= $fortune_teller['total_rate'] ?></div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Kredi</div>
                                <div class="font-weight-bold text-warning"><?= $fortune_teller['total_credit'] ?></div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Yorum</div>
                                <div class="font-weight-bold text-primary"><?= $comment ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded py-4 px-4 text-14 my-3">
                        <div class="text-16 font-weight-bold mb-3">Hakkımda</div>
                        <div class="text-muted"><?= $fortune_teller['detail'] ?></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bg-white rounded nav-active-border px-3 b-primary bottom mt-3 mt-md-0">
                        <ul class="nav flex-scroll" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active d-flex align-items-center text-center" id="kahve-tab" data-toggle="tab" href="#kahve" role="tab" aria-controls="kahve" aria-selected="true">
                                    <span class="font-weight-bold">
Kahve Falı</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  d-flex align-items-center text-center" id="tarot-tab" data-toggle="tab" href="#tarot" role="tab" aria-controls="tarot" aria-selected="false">
                                    <span class="font-weight-bold">
Tarot Falı</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  d-flex align-items-center text-center" id="su-tab" data-toggle="tab" href="#su" role="tab" aria-controls="su" aria-selected="false">
                                    <span class="font-weight-bold">
Su Falı</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  d-flex align-items-center text-center" id="el-tab" data-toggle="tab" href="#el" role="tab" aria-controls="el" aria-selected="false">
                                    <span class="font-weight-bold">
El Falı</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  d-flex align-items-center text-center" id="numeroloji-tab" data-toggle="tab" href="#numeroloji" role="tab" aria-controls="numeroloji" aria-selected="false">
                                    <span class="font-weight-bold">
Numeroloji Falı</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  d-flex align-items-center text-center" id="ask-tab" data-toggle="tab" href="#ask" role="tab" aria-controls="ask" aria-selected="false">
                                    <span class="font-weight-bold">
Aşk Falı</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  d-flex align-items-center text-center" id="zar-tab" data-toggle="tab" href="#zar" role="tab" aria-controls="zar" aria-selected="false">
                                    <span class="font-weight-bold">
Yıldızname</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="kahve" role="tabpanel" aria-labelledby="kahve-tab">

                            <div class="bg-white rounded p-4">
                                <div class="text-24"><span class="font-weight-bold text-primary">
Kahve Falı</span> Yorumları</div>
                                <div class="py-4 border-bottom">
                                <?php for ($i=0;$i<count($coffe_comment);$i++): ?>
                                <div class="py-4 border-bottom">
                                    <div class="text-muted"><?php $coffe_comment[$i] ?></div>
                                    <div class="my-2 d-flex align-items-center">
                                    </div>
                                </div>
                                <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="tarot" role="tabpanel" aria-labelledby="tarot-tab">
                            <div class="bg-white rounded p-4">
                                <div class="text-24"><span class="font-weight-bold text-primary">
Tarot Falı</span> Yorumları</div>
                                <div class="py-4 border-bottom">
                                <?php for ($i=0;$i<count($tarot_comment);$i++): ?>
                                    <div class="py-4 border-bottom">
                                        <div class="text-muted"><?php $tarot_comment[$i] ?></div>
                                        <div class="my-2 d-flex align-items-center">
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="su" role="tabpanel" aria-labelledby="su-tab">
                            <div class="bg-white rounded p-4">
                                <div class="text-24"><span class="font-weight-bold text-primary">
Su Falı</span> Yorumları</div>
                                <div class="py-4 border-bottom">
                                <?php for ($i=0;$i<count($water_comment);$i++): ?>
                                    <div class="py-4 border-bottom">
                                        <div class="text-muted"><?php $water_comment[$i] ?></div>
                                        <div class="my-2 d-flex align-items-center">
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="el" role="tabpanel" aria-labelledby="el-tab">
                            <div class="bg-white rounded p-4">
                                <div class="text-24"><span class="font-weight-bold text-primary">
El Falı</span> Yorumları</div>
                                <div class="py-4 border-bottom">
                                <?php for ($i=0;$i<count($hand_comment);$i++): ?>
                                    <div class="py-4 border-bottom">
                                        <div class="text-muted"><?php $hand_comment[$i] ?></div>
                                        <div class="my-2 d-flex align-items-center">
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="numeroloji" role="tabpanel" aria-labelledby="numeroloji-tab">
                            <div class="bg-white rounded p-4">
                                <div class="text-24"><span class="font-weight-bold text-primary">
Numeroloji Falı</span> Yorumları</div>
                                <div class="py-4 border-bottom">
                                <?php for ($i=0;$i<count($num_comment);$i++): ?>
                                    <div class="py-4 border-bottom">
                                        <div class="text-muted"><?php $num_comment[$i] ?></div>
                                        <div class="my-2 d-flex align-items-center">
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="ask" role="tabpanel" aria-labelledby="ask-tab">
                            <div class="bg-white rounded p-4">
                                <div class="text-24"><span class="font-weight-bold text-primary">
Aşk Falı</span> Yorumları</div>
                                <div class="py-4 border-bottom">
                                <?php for ($i=0;$i<count($love_comment);$i++): ?>
                                    <div class="py-4 border-bottom">
                                        <div class="text-muted"><?php $love_comment[$i] ?></div>
                                        <div class="my-2 d-flex align-items-center">
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="zar" role="tabpanel" aria-labelledby="zar-tab">
                            <div class="bg-white rounded p-4">
                                <div class="text-24"><span class="font-weight-bold text-primary">
Yıldızname</span> Yorumları</div>
                                <div class="py-4 border-bottom">
                                    <?php for ($i=0;$i<count($yildizname_comment);$i++): ?>
                                        <div class="py-4 border-bottom">
                                            <div class="text-muted"><?php $yildizname_comment[$i] ?></div>
                                            <div class="my-2 d-flex align-items-center">
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'static/footer.php'?>
