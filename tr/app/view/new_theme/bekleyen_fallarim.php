<?php require 'static/header.php'?>
<?php require 'profile_side.php'?>

<div class="filter mb-4">
    <div class="container py-4">
        <div class="bg-white rounded nav-active-background px-3 b-primary py-2 bottom mt-md-0 d-md-block d-none">
            <ul class="nav flex-scroll nav-pills font-weight-bold" role="tablist">
                <li class="nav-item">
                    <a href="<?= site_url('bekleyen_fallarim') ?>" class="nav-link active d-flex align-items-center">BEKLEYEN FALLARIM</a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('bakilan_fallarim') ?>" class="nav-link d-flex align-items-center">BAKILAN FALLARIM</a>
                </li>
                <li class="nav-item ml-auto">
                    <a href="<?= site_url('profile') ?>" class="nav-link d-flex align-items-center">AYARLAR</a>
                </li>
            </ul>
        </div>
        <div class="my-4">
            <div class="table-responsive-md">
                <table class="table table-custom text-dark">
                    <thead>
                    <tr>
                        <th style="width:120px;">#</th>
                        <th>FAL TİPİ</th>
                        <th>YORUMCU</th>
                        <th>ÜCRETİ</th>
                        <th>GÖNDERİLME TARİHİ</th>
                        <th style="width:100px;" class="text-right"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0;$i<count($fale);$i++): ?>
                        <tr>
                            <td>
                                <?= ($i+1) ?> </td>
                            <?php if ($fale[$i]['fale_type_id'] == 1): ?>
                                <td><?= 'Kahve' ?></td>
                            <?php elseif ($fale[$i]['fale_type_id'] == 2): ?>
                                <td><?= 'Tarot' ?></td>
                            <?php elseif ($fale[$i]['fale_type_id'] == 3): ?>
                                <td><?= 'Su' ?></td>
                            <?php elseif ($fale[$i]['fale_type_id'] == 4): ?>
                                <td><?= 'El' ?></td>
                            <?php elseif ($fale[$i]['fale_type_id'] == 5): ?>
                                <td><?= 'Numaraloji' ?></td>
                            <?php elseif ($fale[$i]['fale_type_id'] == 6): ?>
                                <td><?= 'Aşk' ?></td>
                            <?php elseif ($fale[$i]['fale_type_id'] == 7): ?>
                                <td><?= 'Yıldızname' ?></td>
                            <?php else: ?>
                                <td><?= 'İskambil' ?></td>
                            <?php endif; ?>
                            <td><?= $fale[$i]['uname'] . ' ' . $fale[$i]['surname'] ?></td>
                            <td><?= $fale[$i]['cost'] ?> Kredi</td>
                            <td><?= $fale[$i]['create_date'] ?></td>
                            <td class="text-right">
                                <div class="item-action dropdown">
                                    <form action="<?= site_url('fale_detail') ?>" method="post">
                                        <input type="hidden" name="id" value="<?= $fale[$i]['id'] ?>">
                                    <button class="text-primary text-18"><i class="fad fa-eye"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- islem bekleyenler -->
    </div>
</div>


<?php require 'static/footer.php'?>
