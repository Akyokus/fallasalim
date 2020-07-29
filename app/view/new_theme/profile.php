<?php require 'static/header.php' ?>
<?php require 'profile_side.php' ?>
<div class="filter mb-4">
    <div class="container py-4">
        <div class="bg-white rounded nav-active-background px-3 b-primary py-2 bottom mt-md-0 d-md-block d-none">
            <ul class="nav flex-scroll nav-pills font-weight-bold" role="tablist">
                <li class="nav-item">
                    <a href="<?= site_url('bekleyen_fallarim') ?>" class="nav-link d-flex align-items-center">BEKLEYEN FALLARIM</a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('bakilan_fallarim') ?>" class="nav-link d-flex align-items-center">BAKILAN FALLARIM</a>
                </li>
                <li class="nav-item ml-auto">
                    <a href="<?= site_url('profile') ?>" class="nav-link active d-flex align-items-center">AYARLAR</a>
                </li>
            </ul>
        </div>
            <!-- ayarlar -->
            <div class="my-4">

                <form action="<?= site_url('profile') ?>" method="post">
                <div class="bg-white p-4 rounded">
                    <?php if (isset($success)){
                        echo $success;
                    }?>
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Adınız</label>
                            <input type="text" name="" class="form-control" disabled="true" value="<?= ucwords($user['uname']) ?>"  placeholder="<?= ucwords($user['uname']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Soyadınız</label>
                            <input type="text" name="" class="form-control" disabled value="<?= ucwords($user['surname']) ?>" placeholder="<?= ucwords($user['surname']) ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Email Adresi</label>
                            <input type="email" name="" class="form-control" placeholder="Email Adresi" disabled="true" value="<?= $user['email'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Telefon Numarası</label>
                            <input type="text" name="tel_no" pattern="\d{11}" class="form-control" placeholder="<?= $user['phone_no'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Doğum Gününüz</label>
                            <input type="text" name="bdate" class="form-control datepic" placeholder="<?php echo $user['birth_date'] ? $user['birth_date'] :  'Doğum Gününüz'?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">Cinsiyetiniz</label>
                            <?php if (!$user['gender']): ?>
                            <select name="cinsiyet" class="custom-select">
                                <option>Cinsiyet</option>
                                <option value="0">Kadın</option>
                                <option value="1">Erkek</option>
                            </select>
                            <?php else: ?>
                            <input type="text" class="form-control" disabled value="<?php echo $user['gender'] == 0 ? 'Kadın' : 'Erkek'?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold">İlişki Durumunuz</label>
                            <?php if (!$user['relu_status']): ?>
                                <select name="iliski" class="custom-select">
                                    <option>Cinsiyet</option>
                                    <option value="1">Var</option>
                                    <option value="0">Yok</option>
                                </select>
                            <?php else: ?>
                                <input type="text" class="form-control" disabled value="<?php echo $user['relu_status'] == 0 ? 'Yok' : 'Var'?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <input type="hidden" name="submit" value="1">
                    <button class="btn btn-primary-gradient mt-3 btn-block py-3">Değişiklikleri Kaydet</button>
                </div>
                </form>
            </div>
            <!-- ayarlar -->
        </div>
    </div>
<?php require 'static/footer.php' ?>
