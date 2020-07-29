<?php require 'static/header.php'?>
<?php require 'static/sidebar.php'?>
    <div class="py-4 px-md-4 flex-fill">
        <div class="container-fluid">
            <!-- islem bekleyenler -->
            <div class="my-3">
                <div class="bg-white rounded nav-active-border p-3 px-md-5 pt-md-3 b-primary bottom">
                    <ul class="nav flex-scroll" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center text-center" id="uye-tab" data-toggle="tab" href="#uye" role="tab" aria-controls="uye" aria-selected="true">
                                <span class="font-weight-bold">Üye Bilgileri</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center text-center" id="yorumcu-tab" data-toggle="tab" href="#yorumcu" role="tab" aria-controls="yorumcu" aria-selected="false">
                                <span class="font-weight-bold">Yorumcu Bilgileri</span>
                            </a>
                        </li>
                    </ul>
                    <?php echo isset($success) ? $success : '' ?>
                    <form action="<?= teller_url('settings') ?>" method="post" class="form-group">
                    <div class="tab-content py-4">
                        <div class="tab-pane show active" id="uye" role="tabpanel" aria-labelledby="uye-tab">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Adınız</label>
                                    <input type="text" name="" class="form-control" disabled="true" value="<?= $teller['uname'] ?>" placeholder="Adınız">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Soyadınız</label>
                                    <input type="text" name="" class="form-control" disabled="true" value="<?= $teller['surname'] ?>" placeholder="Adınız">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Telefon Numarası</label>
                                    <input type="text" name="tel_no" class="form-control" value="<?= isset($teller['phone_no']) ? $teller['phone_no'] : 'Telefon Numarası'?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold">Cinsiyetiniz</label>
                                    <?php if ($teller['gender'] == 3): ?>
                                        <select name="cinsiyet" class="custom-select">
                                            <option value="3">Cinsiyet</option>
                                            <option value="0">Kadın</option>
                                            <option value="1">Erkek</option>
                                        </select>
                                    <?php else: ?>
                                        <input type="text" class="form-control" disabled value="<?php if ($teller['gender'] == 0){echo 'Kadın';}elseif($teller['gender'] == 1){echo 'Erkek';} ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="yorumcu" role="tabpanel" aria-labelledby="yorumcu-tab">
                            <div class="form-group">
                                <label class="d-block font-weight-bold">Fal Tipleri</label>

                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['fale_look_type'],'1') ? 'checked' : '' ?> type="checkbox" name="fale_type[]" class="custom-control-input" id="1" value="1">
                                    <label class="custom-control-label" for="1">
                                        Kahve Falı</label>
                                </div>

                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['fale_look_type'],'2') ? 'checked' : '' ?> type="checkbox" name="fale_type[]" class="custom-control-input" id="2" value="2">
                                    <label class="custom-control-label" for="2">
                                        Tarot Falı</label>
                                </div>

                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['fale_look_type'],'3') ? 'checked' : '' ?> type="checkbox" name="fale_type[]" class="custom-control-input" id="3" value="3">
                                    <label class="custom-control-label" for="3">
                                        Su Falı</label>
                                </div>

                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['fale_look_type'],'4') ? 'checked' : '' ?> type="checkbox" name="fale_type[]" class="custom-control-input" id="4" value="4" >
                                    <label class="custom-control-label" for="4">
                                        El Falı</label>
                                </div>

                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['fale_look_type'],'5') ? 'checked' : '' ?> type="checkbox" name="fale_type[]" class="custom-control-input" id="5" value="5">
                                    <label class="custom-control-label" for="5">
                                        Numeroloji Falı</label>
                                </div>

                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['fale_look_type'],'6') ? 'checked' : '' ?> type="checkbox" name="fale_type[]" class="custom-control-input" id="6" value="6">
                                    <label class="custom-control-label" for="6">
                                        Aşk Falı</label>
                                </div>

                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['fale_look_type'],'7') ? 'checked' : '' ?> type="checkbox" name="fale_type[]"  class="custom-control-input" id="7" value="7">
                                    <label class="custom-control-label" for="7">
                                        Yıldızname Falı</label>
                                </div>


                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input  <?= strstr($teller['fale_look_type'],'8') ? 'checked' : '' ?> type="checkbox" name="fale_type[]" class="custom-control-input" id="8" value="8">
                                    <label class="custom-control-label" for="8">
                                        İskambil Falı</label>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="d-block font-weight-bold">Yorumlama Tipleri</label>
                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['comment_type'],'1') ? 'checked' : '' ?> type="checkbox" class="custom-control-input" name="fale_look_type[]" value="1" id="yazili">
                                    <label class="custom-control-label" for="yazili">Yazılı</label>
                                </div>
                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['comment_type'],'2') ? 'checked' : '' ?> type="checkbox" class="custom-control-input" name="fale_look_type[]" value="2" id="sesli">
                                    <label class="custom-control-label" for="sesli">Sesli</label>
                                </div>
                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['comment_type'],'3') ? 'checked' : '' ?> type="checkbox" class="custom-control-input" name="fale_look_type[]" value="3" id="videolu">
                                    <label class="custom-control-label" for="videolu">Videolu</label>
                                </div>
                                <div class="custom-control custom-checkbox d-block d-md-inline-block mr-4">
                                    <input <?= strstr($teller['comment_type'],'4') ? 'checked' : '' ?> type="checkbox" class="custom-control-input" name="fale_look_type[]" value="4" id="telefonlu">
                                    <label class="custom-control-label" for="telefonlu">Telefonla</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Slogan</label>
                                <input type="text" name="title" class="form-control" value="<?= isset($teller['title']) ? $teller['title'] : '' ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Hakkımda</label>
                                <input type="text" name="detail" class="form-control"  value="<?= isset($teller['detail']) ? $teller['detail'] : '' ?>" >
                            </div>
                        </div>
                        <input type="hidden" name="submit" value="1">
                        <button class="btn btn-primary-gradient mt-3 btn-block py-3">Değişiklikleri Kaydet</button>
                    </div>
                    </form>
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
<?php require 'static/footer.php'?>
