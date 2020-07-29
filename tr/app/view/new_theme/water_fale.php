<?php require 'static/header.php'; ?>
<div class="filter bg-white bg-header-lg mb-4">
    <div class="container">
        <div class="row row-xs d-none d-md-flex">
            <div class="col">
                <a href="<?= site_url('kahve-fali') ?>" class="fale-category py-4 rounded d-flex flex-column my-2">
                    <div class="bg-icon"><i class="fas fa-mug mug-icon"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            Kahve Falı </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?= site_url('tarot-fali') ?>" class="fale-category py-4 rounded d-flex flex-column my-2 ">
                    <div class="bg-icon"><i class="tarot"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            Tarot Falı </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?= site_url('su-fali') ?>" class="fale-category py-4 rounded d-flex flex-column my-2 active">
                    <div class="bg-icon"><i class="fad fa-tint"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            Su Falı </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?= site_url('el-fali') ?>" class="fale-category py-4 rounded d-flex flex-column my-2 ">
                    <div class="bg-icon"><i class="fas fa-hand-heart"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            El Falı </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?= site_url('numeroloji-fali') ?>" class="fale-category py-4 rounded d-flex flex-column my-2 ">
                    <div class="bg-icon"><i class="fas fa-abacus"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            Numeroloji Falı </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?= site_url('ask-fali') ?>" class="fale-category py-4 rounded d-flex flex-column my-2 ">
                    <div class="bg-icon"><i class="fad fa-heart-broken"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            Aşk Falı </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?= site_url('yildizname') ?>" class="fale-category py-4 rounded d-flex flex-column my-2 ">
                    <div class="bg-icon"><i class="fad fa-star-half"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            Yıldızname </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="<?= site_url('iskambil-fali') ?>" class="fale-category py-4 rounded d-flex flex-column my-2 ">
                    <div class="bg-icon"><i class="iskambil"></i></div>
                    <div class="text-center">
                        <div class="text-14 font-weight-bold">
                            İskambil Falı </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<!-- users -->
<div class="container">
    <div class="row">
        <!-- user -->
        <?php for ($i=0;$i<count($tellers);$i++): ?>
            <div class="col-md-3">
                <div class="card py-5 px-3 mb-4">
                    <?php //TO DO: profile photos get db ?>
                    <a href="" class="avatar avatar-md bg-light w-80 mx-auto" style="background-image: url(https://randomuser.me/api/portraits/women/<?= $i ?>.jpg);">
                        <?php if($tellers[$i]['state'] == 1): ?>
                            <i class="on avatar-status"></i>
                        <?php else: ?>
                            <i class="off avatar-status"></i>
                        <?php endif; ?>
                    </a>
                    <div class="flex-fill text-center mt-3">
                        <a href="">
                            <div class="text-18 text-dark px-2">
                                <?= $tellers[$i]['uname'] . ' ' . $tellers[$i]['surname'] ?> </div>
                            <div class="text-muted text-14 px-2 my-1 h-1x">
                                <?= $tellers[$i]['title'] ?> </div>
                        </a>
                        <a href="" class="d-block mt-3 pt-2 px-3 text-12">
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Başarı</div>
                                <div class="font-weight-bold text-success">% <?= $tellers[$i]['total_rate'] ?></div>
                            </div>
                            <div class="d-flex justify-content-between py-1">
                                <div class="text-muted">Yorum</div>
                                <div class="font-weight-bold text-primary"><?= $tellers[$i]['comment_type'] ?></div>
                            </div>
                        </a>
                        <div class="px-5">
                            <?php if($tellers[$i]['state'] == 1): ?>
                                <div class="btn btn-block btn-success-gradient btn-rounded my-3 btn-sm py-2">Çevrimiçi</div>
                            <?php else: ?>
                                <div class="btn btn-block btn-secondary-gradient btn-rounded my-3 btn-sm py-2">Çevrimdışı</div>
                            <?php endif; ?>
                        </div>
                        <form action="<?= site_url('su-gonder') ?>" method="post" >
                            <div class="px-4">
                                <input type="hidden" name="id" value="<?= $tellers[$i]['id'] ?>">
                                <?php if ($tellers[$i]['state'] == 1): ?>
                                    <button value="<?= site_url('su-gonder') ?>" class="btn btn-block btn-primary-gradient btn-rounded mt-3">Fallaşalım mı ?</button>
                                <?php else: ?>
                                    <div class="btn btn-block btn-primary-gradient btn-rounded mt-3">Fallaşalım mı ?</div>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
        <!-- user -->
    </div>
    <!-- sayfalama -->
    <div class="d-flex justify-content-between flex-scroll justify-content-center">
        <nav class="mx-auto">
            <ul class="pagination mb-5 w-auto">
                <li class="page-item"><a class="page-link" href="#">Önceki</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
            </ul>
        </nav>
    </div>
    <!-- sayfalama -->
</div>
<!-- users -->
<?php require 'static/footer.php'; ?>
