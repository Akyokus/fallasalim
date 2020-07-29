<?php require 'static/header.php' ?>
<?php require 'static/sidebar.php' ?>
<div class="py-4 px-md-4 flex-fill">
    <div class="container-fluid">
        <div class="text-24">Muhasebe</div>
        <div class="row">
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-donate text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2"><?= $total_cost['SUM(cost)'] ?><span class="text-12 ml-1 text-muted">TL</span></div>
                        <div class="text-fade">Toplam</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-donate text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2">0<span class="text-12 ml-1 text-muted">TL</span></div>
                        <div class="text-fade">Aylık</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-donate text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2">0<span class="text-12 ml-1 text-muted">TL</span></div>
                        <div class="text-fade">Haftalık</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-white rounded px-4 py-4 leading-normal d-flex align-items-center my-1">
                    <i class="fad fa-donate text-32 text-primary"></i>
                    <div class="pl-4">
                        <div class="text-28 font-weight-bold mb-2">0<span class="text-12 ml-1 text-muted">TL</span></div>
                        <div class="text-fade">Günlük</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- form -->
        <div class="my-4 bg-white rounded p-4">
            <div class="row">
                <div class="col-md-3">
                    <select class="custom-select my-1">
                        <option>Yıl</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="custom-select my-1">
                        <option>Ay</option>
                    </select>
                </div>
                <div class="col-md-3">
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
                        <th>FİYAT</th>
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
                    </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- islem bekleyenler -->
    </div>
    <script type="text/javascript">
        $('.datepic').datepicker({
            language: "tr"
        });
    </script>
</div>
</div>
<?php require 'static/footer.php' ?>

