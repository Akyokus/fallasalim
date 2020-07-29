<?php require 'static/header.php'?>
<?php require 'static/sidebar.php'?>
<div class="py-4 px-md-4 flex-fill">
    <div class="container-fluid">
        <div class="text-24">Fal Geçmişi</div>
        <!-- form -->
        <div class="my-4 bg-white rounded p-4">
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="" class="form-control my-1 " placeholder="Müşteri Ad Soyad">
                </div>
                <div class="col-md-2">
                    <select class="custom-select my-1">
                        <option>Fal Tipi</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="custom-select my-1">
                        <option>Fal durumu</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="text" name="" class="form-control my-1 datepic" placeholder="Oluşturulma">
                </div>
                <div class="col-md-2">
                    <input type="text" name="" class="form-control my-1 datepic" placeholder="Bitiş">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary-gradient btn-block my-1">FİLTRELE</button>
                </div>
            </div>
        </div>
        <!-- form -->
        <!-- islem bekleyenler -->
        <div class="my-4">
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
                    <?php for ($i=0;$i<count($all_fale);$i++): ?>
                    <tr>
                        <td>
                            <?= ($i+1) ?> </td>
                        <?php if ($all_fale[$i]['fale_type_id'] == 1): ?>
                            <td><?= 'Kahve' ?></td>
                        <?php elseif ($all_fale[$i]['fale_type_id'] == 2): ?>
                            <td><?= 'Tarot' ?></td>
                        <?php elseif ($all_fale[$i]['fale_type_id'] == 3): ?>
                            <td><?= 'Su' ?></td>
                        <?php elseif ($all_fale[$i]['fale_type_id'] == 4): ?>
                            <td><?= 'El' ?></td>
                        <?php elseif ($all_fale[$i]['fale_type_id'] == 5): ?>
                            <td><?= 'Numaraloji' ?></td>
                        <?php elseif ($all_fale[$i]['fale_type_id'] == 6): ?>
                            <td><?= 'Aşk' ?></td>
                        <?php elseif ($all_fale[$i]['fale_type_id'] == 7): ?>
                            <td><?= 'Yıldızname' ?></td>
                        <?php else: ?>
                            <td><?= 'İskambil' ?></td>
                        <?php endif; ?>
                        <td><?= $all_fale[$i]['uname'] . ' ' . $all_fale[$i]['surname'] ?></td>
                        <td> <?= $all_fale[$i]['create_date'] ?> </td>
                        <?= $all_fale[$i]['state'] == 0 ? '<td><span class="text-warning">Bekleniyor</span></td>' : '<td><span class="text-success">Tamamlandı</span></td>' ?>

                        <td><?= $all_fale[$i]['cost'] ?> Kredi</td>
                        <td class="text-right">
                            <form  action="<?= teller_url('fale_detail') ?>" method="post">
                                <input type="hidden" name="id" value="<?= $all_fale[$i]['id'] ?>">
                                <div class="item-action dropdown">
                                    <button href="<?= teller_url('fale_detail') ?>" class="text-primary text-18"><i class="fad fa-eye"></i></button>
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
        <!-- sayfalama -->
        <div class="d-flex justify-content-between flex-scroll">
            <nav>
                <ul class="pagination mb-0">
                    <li class="page-item"><a class="page-link" href="#">Önceki</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
                </ul>
            </nav>
            <div class="d-md-flex flex-wrap align-items-center d-none">
                <div class="text-muted px-2 text-nowrap">Her sayfada</div>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item"><a class="page-link" href="#">20</a></li>
                        <li class="page-item active"><a class="page-link" href="#">30</a></li>
                        <li class="page-item"><a class="page-link" href="#">50</a></li>
                    </ul>
                </nav>
                <div class="text-muted px-2 text-nowrap">sonuç göster</div>
            </div>
        </div>
        <!-- sayfalama -->
    </div>
<?php require 'static/footer.php'?>
