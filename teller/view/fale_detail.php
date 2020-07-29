<?php require 'static/header.php'?>
<?php require 'static/sidebar.php'?>
<div class="py-4 px-md-4 flex-fill">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white rounded px-4 py-4 my-3">
                    <div class="text-28 font-weight-bold">Fal Bilgileri</div>
                    <?= isset($success) ? $success : false ?>
                    <?php if ($fale['fale_type_id'] == 1):  ?>
                    <div class="text-16">Kahve Falı</div>
                    <?php elseif($fale['fale_type_id'] == 2): ?>
                        <div class="text-16">Tarot Falı</div>
                    <?php elseif($fale['fale_type_id'] == 3): ?>
                        <div class="text-16">Su Falı</div>
                    <?php elseif($fale['fale_type_id'] == 4): ?>
                        <div class="text-16">El Falı</div>
                    <?php elseif($fale['fale_type_id'] == 5): ?>
                        <div class="text-16">Numaroloji Falı</div>
                    <?php elseif($fale['fale_type_id'] == 6): ?>
                        <div class="text-16">Aşk Falı</div>
                    <?php elseif($fale['fale_type_id'] == 7): ?>
                        <div class="text-16">Yildizname Falı</div>
                    <?php elseif($fale['fale_type_id'] == 8): ?>
                    <div class="text-16">İskambil Falı</div>
                    <?php endif; ?>
                    <div class="d-flex align-items-center py-2">
                        <div class="w-md text-muted">Yorumlama Türü</div>
                        <?php if ($fale['comment_type'] == 1):  ?>
                            <div class="font-weight-bold">Yazılı</div>
                        <?php elseif($fale['comment_type'] == 2): ?>
                            <div class="font-weight-bold">Sesli</div>
                        <?php elseif($fale['comment_type'] == 3): ?>
                            <div class="font-weight-bold">Görüntülü</div>
                        <?php elseif($fale['comment_type'] == 4): ?>
                            <div class="font-weight-bold">Telefonla</div>
                        <?php endif; ?>
                    </div>
                    <?php if ($fale['fale_type_id'] == 1 || $fale['fale_type_id'] == 4): ?>
                    <div class="text-16 my-4">Fal Fotoğrafları</div>
                    <div class="d-flex flex-wrap">
                        <?php for($i=0;$i<count($file_name);$i++): ?>

                            <div class="iskambil-kart" style="background-image: url(<?= public_url() .  'fale_images/'.$file_name[$i]['image_name'] ?>)"></div>
                        <?php endfor; ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($fale['fale_type_id'] == 8): ?>
                    <div class="text-16 my-4">Seçilen Kartlar</div>
                    <div class="d-flex flex-wrap">
                        <?php foreach ($selected_card as $temp): ?>
                        <div class="iskambil-kart" style="background-image: url(<?= public_url().'iskambil_card/'.$temp.'.jpg' ?>)"></div>
                        <?php endforeach; ?>
                    </div>
                    <?php elseif ($fale['fale_type_id'] == 2): ?>
                        <div class="text-16 my-4">Seçilen Kartlar</div>
                        <div class="d-flex flex-wrap">
                            <?php foreach ($selected_card as $temp): ?>
                                <div class="iskambil-kart" style="background-image: url(<?= public_url().'tarot_card/'.$temp.'.jpg' ?>)"></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="bg-white rounded px-4 py-4 my-3">
                    <div class="text-20 mb-3 font-weight-bold"><?= $fale['uname'] . ' ' . $fale['surname'] ?></div>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Doğum Tarihi</div>
                        <div class=" font-weight-bold"><?= $fale['bdate'] ?></div>
                    </div>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Yaşadığın Şehir</div>
                        <div class=" font-weight-bold"><?= $city ?></div>
                    </div>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">İlişki Durumu</div>
                        <div class=" font-weight-bold"><?= $relation ?></div>
                    </div>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Cinsiyetin</div>
                        <div class=" font-weight-bold"><?= $gender ?></div>
                    </div>
                    <?php if ($fale['btime']): ?>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Doğum Saati</div>
                        <div class=" font-weight-bold"><?= $fale['btime'] ?></div>
                    </div>
                    <?php endif; ?>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Spesifik Soru</div>
                        <div class=" font-weight-bold"><?= $fale['spesifik'] ?></div>
                    </div>
                </div>
            </div>
            <?php if ($fale['fale_type_id'] == 6): ?>
            <div class="col-md-6">
                <div class="bg-white rounded px-4 py-4 my-3">
                    <div class="text-20 mb-3 font-weight-bold"><?= $fale['part_name'] . ' ' . $fale['part_surname'] ?></div>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Doğum Tarihi</div>
                        <div class=" font-weight-bold"><?= $fale['part_bdate'] ?></div>
                    </div>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Yaşadığın Şehir</div>
                        <div class=" font-weight-bold"><?= $part_city ?></div>
                    </div>
                    <div class="d-flex align-items-center py-1">
                        <div class="w-md text-muted">Cinsiyetin</div>
                        <div class=" font-weight-bold"><?= $part_gender ?></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($fale['comment_type'] == 1): ?>
            <div class="col-md-12">
                <div class="bg-white rounded px-4 py-4 my-3">
                    <div class="form-group">
                        <form action="<?= teller_url('fale_detail') ?>" method="post">
                        <label class="font-weight-bold">Fala yorumunuz</label>
                        <textarea name="comment" class="form-control" rows="5" placeholder="Fala yorumunuz"></textarea>
                        <input type="hidden" name="submit" value="1">
                        <button class="btn btn-primary-gradient px-5 mt-3">YORUMU GÖNDER</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php elseif ($fale['comment_type'] == 2): ?>

            <div class="col-md-12">
                <div class="bg-white rounded px-4 py-5 my-3 text-center">
                    <a href="javascript:;" class="record recordButton" id="record"><i class="fad fa-microphone-alt"></i></a>
                        <audio controls id="audio" class="d-none"></audio>
                        <div class="d-flex align-items-center justify-content-center my-3">
                        <a href="javascript:;" class="disabled btn btn-link text-18 one" id="stop" data-toggle="tooltip" data-placement="top" title="Yeni Kayıt"><i class="fas fa-redo"></i></a>
                        <a href="javascript:;" class="disabled btn btn-link text-18 one" id="pause" data-toggle="tooltip" data-placement="top" title="Duraklat"><i class="fas fa-pause"></i></a>
                        <a href="javascript:;" class="disabled btn btn-link text-18 one" id="play" data-toggle="tooltip" data-placement="top" title="Oynat"><i class="fas fa-play"></i></a>
                        <a href="javascript:;" class="disabled btn btn-link text-18 one" id="save" data-toggle="tooltip" data-placement="top" title="Yükle"><i class="fas fa-upload"></i></a>
                        </div>
                    <div class="text-danger">Kaydınız bittikten sonra yükle butonuna basınız !</div>
                </div>
            </div>

            <?php elseif ($fale['comment_type'] == 3): ?>
            Videolu randevu
            <?php else: ?>
            Telefonla randevu
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<?php require 'static/footer.php'?>
