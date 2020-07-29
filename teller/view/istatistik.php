<?php require 'static/header.php'?>
<?php require 'static/sidebar.php'?>
<div class="py-4 px-md-4 flex-fill">
    <div class="container-fluid">
        <div class="text-24">İstatistikler</div>
        <div class="row">
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-box-open text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= count($in_pool_fale) ?></div>
                        <div class="text-fade">Havuzdaki Fal</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-check-double text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= count($completed_fale) ?></div>
                        <div class="text-fade">Bakılan Fal</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-alarm-clock text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= count($fale) ?></div>
                        <div class="text-fade">Bekleyen Fal</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-star-half text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= $fornuter['total_rate'] ?> %</div>
                        <div class="text-fade">Puan</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- islem bekleyenler -->
        <div class="my-4">
            <div class="table-responsive-md">
                <table class="table table-custom  table-strixped text-dark">
                    <thead>
                    <tr>
                        <th style="width:120px;">#</th>
                        <th>FAL TİPİ</th>
                        <th>MÜŞTERİ</th>
                        <th>FİYAT</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for ($i=0;$i<count($fale);$i++): ?>
                    <tr>
                        <td>
                            <?= ($i+1) ?> </td>
                        <td><?php if ($fale[$i]['fale_type_id'] == 1): ?>
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
                        <?php endif; ?></td>
                        <td><?= $fale[$i]['uname'] . ' ' . $fale[$i]['surname'] ?></td>
                        <td><?= $fale[$i]['cost'] ?> TL</td>
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
    <script type="text/javascript">
        $('.datepic').datepicker({
            language: "tr"
        });
    </script>
</div>
</div>
<?php require 'static/footer.php'?>
