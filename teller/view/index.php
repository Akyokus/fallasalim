<?php require 'static/header.php'?>
<?php require 'static/sidebar.php';

?>
<div class="py-4 px-md-4 flex-fill">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-alarm-clock text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= count($fale) ?></div>
                        <div class="text-fade">İşlem Bekleyen Fallar</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-box-open text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= count($in_pool_fale) ?></div>
                        <div class="text-fade">Havuzdaki Fallar</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-check-double text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= count($completed_fale) ?></div>
                        <div class="text-fade">Bakılan Fallar</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- form -->
        <div class="my-4 bg-white rounded p-4">
            <div class="row">
                <div class="col-md-4">
                    <select class="custom-select my-1">
                        <option>Müsait misin ?</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="custom-select my-1">
                        <option>Nöbetçi durumu</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary-gradient btn-block my-1">GÜNCELLE</button>
                </div>
            </div>
        </div>
        <!-- form -->
        <div class="bg-white p-4 rounded">
            <div class="form-group">
                <label class="font-weight-bold">Paylaş - Kazan Referans Kodunuz:</label>
                <input type="text" name="" class="form-control form-control-lg" disabled="true" value="https://fallasalim.com/uye/login?ref=zgiwQnL8MJCfunmJ">
                <button class="btn btn-primary-gradient px-5 mt-3">PAYLAŞ</button>
            </div>
            <div class="text-14 text-muted">Referans kodunu arkadaşlarınızla mesaj olarak veya sosyal medya üzerinden paylaşın, sizin kodunuz ile üye olan ve fal gönderen arkadaşlarınız ve siz bedava krediler kazanın!</div>
        </div>
        <!-- islem bekleyenler -->
        <div class="my-4">
            <div class="bg-dark px-4 py-3 rounded">
                <div class="font-weight-bold text-14">İşlem Bekleyen Fallar</div>
            </div>
            <div class="table-responsive-md">
                <table class="table table-custom  table-strixped text-dark">
                    <thead>
                    <tr>
                        <th style="width:120px;">#</th>
                        <th>FAL TİPİ</th>
                        <th>MÜŞTERİ</th>
                        <th>OLUŞTURULMA</th>
                        <th>FİYAT</th>
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
                        <td> <?= $fale[$i]['create_date'] ?> </td>
                        <td><?= $fale[$i]['cost'] ?> Kredi</td>
                        <td class="text-right">
                            <form  action="<?= teller_url('fale_detail') ?>" method="post">
                                <input type="hidden" name="id" value="<?= $fale[$i]['id'] ?>">
                                <div class="item-action dropdown">
                                    <button value="<?= teller_url('fale_detail') ?>" class="text-primary text-18"><i class="fad fa-eye"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- islem bekleyenler -->
        <!-- havuzdakiler -->
        <div class="my-4">
            <div class="bg-dark px-4 py-3 rounded">
                <div class="font-weight-bold text-14">Havuzdaki Fallar</div>
            </div>
            <div class="table-responsive-md">
                <table class="table table-custom  table-strixped text-dark">
                    <thead>
                    <tr>
                        <th style="width:120px;">#</th>
                        <th>FAL TİPİ</th>
                        <th>MÜŞTERİ</th>
                        <th>OLUŞTURULMA</th>
                        <th>DURUM</th>
                        <th>FİYAT</th>
                        <th style="width:100px;" class="text-right"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0;$i<count($in_pool_fale);$i++): ?>
                        <tr>
                            <td>
                                <?= ($i+1) ?> </td>
                            <?php if ($in_pool_fale[$i]['fale_type_id'] == 1): ?>
                                <td><?= 'Kahve' ?></td>
                            <?php elseif ($in_pool_fale[$i]['fale_type_id'] == 2): ?>
                                <td><?= 'Tarot' ?></td>
                            <?php elseif ($in_pool_fale[$i]['fale_type_id'] == 3): ?>
                                <td><?= 'Su' ?></td>
                            <?php elseif ($in_pool_fale[$i]['fale_type_id'] == 4): ?>
                                <td><?= 'El' ?></td>
                            <?php elseif ($in_pool_fale[$i]['fale_type_id'] == 5): ?>
                                <td><?= 'Numaraloji' ?></td>
                            <?php elseif ($in_pool_fale[$i]['fale_type_id'] == 6): ?>
                                <td><?= 'Aşk' ?></td>
                            <?php elseif ($in_pool_fale[$i]['fale_type_id'] == 7): ?>
                                <td><?= 'Yıldızname' ?></td>
                            <?php else: ?>
                                <td><?= 'İskambil' ?></td>
                            <?php endif; ?>
                            <td><?= $in_pool_fale[$i]['uname'] . ' ' . $in_pool_fale[$i]['surname'] ?></td>
                            <td> <?= $in_pool_fale[$i]['create_date'] ?> </td>
                            <td><span class="text-warning">Bekleniyor</span></td>
                            <td><?= $in_pool_fale[$i]['cost'] ?> Kredi</td>
                            <td class="text-right">
                                <form  action="<?= teller_url('fale_detail') ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $in_pool_fale[$i]['id'] ?>">
                                    <div class="item-action dropdown">
                                        <button value="<?= teller_url('fale_detail') ?>" class="text-primary text-18"><i class="fad fa-eye"></i></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- havuzdakiler -->
    </div>
</div>
</div>
<?php require 'static/footer.php'?>
