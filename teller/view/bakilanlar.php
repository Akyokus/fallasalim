<?php require 'static/header.php'?>
<?php require 'static/sidebar.php'?>
    <div class="py-4 px-md-4 flex-fill">
        <div class="container-fluid">
            <div class="text-24">Bakılan Fallar</div>
            <!-- islem bekleyenler -->
            <div class="my-4">
                <div class="table-responsive-md">
                    <table class="table table-custom  table-strixped text-dark">
                        <thead>
                        <tr>
                            <th style="width:120px;">#</th>
                            <th>FAL TİPİ</th>
                            <th>MÜŞTERİ</th>
                            <th>BAKILMA TARİHİ</th>
                            <th>DURUM</th>
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
                            <td> <?= $fale[$i]['last_date'] ?> </td>
                            <td><span class="text-success">Tamamlandı</span></td>
                            <td><?= $fale[$i]['cost'] ?> Kredi</td>
                            <td class="text-right">
                                <div class="item-action dropdown">
                                    <a href="#" class="text-primary text-18"><i class="fad fa-eye"></i></a>
                                </div>
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
    </div>
</div>
<?php require 'static/footer.php'?>
