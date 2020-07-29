<?php require 'static/header.php'; ?>

<div class="filter bg-header mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="post" class="form-group">
                <div class="bg-white p-md-5 p-4 rounded mb-md-5">
                    <div class="text-center">
                        <div class="text-24 font-weight-bold">Kayıt Ol</div>
                        <div class="text-muted my-3">Üyelerimize tanıdığımız ayrıcalıklardan faydalanmak istiyorsan aşağıdaki formu doldurarak sitemize kayıt olabilirsin.</div>
                    </div>

                    <?php  if(isset($error)): ?>
                        <h3>Hatanız: <?= $error ?></h3>
                    <?php endif; ?>
                    <?php if(isset($success)): ?>
                        <h3><?= $success ?></h3>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="text" name="rname" class="form-control" required placeholder="Ad">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" required placeholder="Soyad">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telno" class="form-control" required placeholder="Telefon(0555 555 5555)">
                        <div class="text-muted text-12 py-1 px-1">* Fal sms ile yorumlarınız bilgilendirelecektir</div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" required placeholder="Email Adresi">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" required placeholder="Parola">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass_again" class="form-control" required placeholder="Parola Tekrar">
                    </div>
                    <div class="d-flex align-items-center justify-content-between my-3 text-muted">
                        <div>Zaten üyeyim<a href="<?= site_url('uye-giris') ?>" class="ml-2 font-weight-bold">Giriş yap</a></div>
                    </div>
                    <input type="hidden" value="1" name="submit">
                    <button class="btn btn-block btn-lg btn-primary-gradient">KAYIT OL</button>
                    <div class="text-center my-3 text-muted text-fade">ya da</div>
                    <a href="" class="btn btn-block btn-lg mt-4 bg-facebook">Facebook ile Kaydol</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'static/footer.php';?>
