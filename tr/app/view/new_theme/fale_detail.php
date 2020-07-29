<?php require 'static/header.php'?>
<div class="filter mb-4">
    <div class="container py-4">
        <div class="bg-white rounded nav-active-background px-3 b-primary py-2 bottom mt-md-0 d-md-block d-none">
            <ul class="nav flex-scroll nav-pills font-weight-bold" role="tablist">
                <li class="nav-item">
                    <a href="<?= site_url('bekleyen_fallarim') ?>" class="nav-link d-flex align-items-center">BEKLEYEN FALLARIM</a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('bakilan_fallarim') ?>" class="nav-link active d-flex align-items-center">BAKILAN FALLARIM</a>
                </li>
                <li class="nav-item ml-auto">
                    <a href="<?= site_url('profile') ?>" class="nav-link d-flex align-items-center">AYARLAR</a>
                </li>
            </ul>
        </div>
        <!-- ayarlar -->

        <div class="my-4">
            <div class="bg-white p-4 rounded">
                <?php if ($fale['comment']): ?>
                <div class="text-24 font-weight-bold">
                    <?php if ($fale['fale_type_id'] == 1): ?>
                        <?= 'Kahve' ?>
                    <?php elseif ($fale['fale_type_id'] == 2): ?>
                        <?= 'Tarot' ?>
                    <?php elseif ($fale['fale_type_id'] == 3): ?>
                       <?= 'Su' ?>
                    <?php elseif ($fale['fale_type_id'] == 4): ?>
                        <?= 'El' ?>
                    <?php elseif ($fale['fale_type_id'] == 5): ?>
                        <?= 'Numaraloji' ?>
                    <?php elseif ($fale['fale_type_id'] == 6): ?>
                        <?= 'Aşk' ?>
                    <?php elseif ($fale['fale_type_id'] == 7): ?>
                        <?= 'Yıldızname' ?>
                    <?php else: ?>
                        <?= 'İskambil' ?>
                    <?php endif; ?>
                    Falınızın Yorumu</div>
                <div class="text-12 text-muted mb-4"><?= $fale['create_date'] ?>'daki falınız.</div>
                <div class="text-16"><?= $fale['comment'] ?></div>
                <?php else: ?>
                <div class="text-24 font-weight-bold">Falınız daha yorumlanmamıştır.</div>
                <?php endif; ?>
            </div>
        </div>
        <!-- islem bekleyenler -->
    </div>
</div>
<?php require 'static/footer.php'?>






