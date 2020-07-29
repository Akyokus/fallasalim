<?php require 'static/header.php';?>
<div class="filter bg-header mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="post" class="form-group">
                <div class="bg-white p-md-5 p-4 rounded mb-md-5">
                    <div class="text-center">
                        <div class="text-24 font-weight-bold">Giriş Yap</div>
                        <div class="text-muted my-3">Giriş yapmak için e-posta adresinizi ve parolanızı girin.</div>
                    </div>
                    <?php if(isset($error)): ?>
                        <h3>Hatanız: <?= $error ?></h3>
                    <?php endif; ?>
                    <?php if(isset($success)): ?>
                        <h3><?= $success ?></h3>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email Adresi">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Parola">
                    </div>
                    <div class="d-flex align-items-center flex-wrap justify-content-between my-3 text-muted">
                        <div>Hesabım yok<a href="<?= site_url('kayit-ol') ?>" class="ml-2 font-weight-bold">Yeni Hesap Oluştur</a></div>
                        <a href="">Şifremi Unuttum ?</a>
                    </div>
                    <input type="hidden" name="submit" value="1">
                    <button class="btn btn-block btn-lg btn-primary-gradient">Giriş Yap</button>
                    <div class="text-center my-3 text-muted text-fade">ya da</div>
                    <a href="" class="btn btn-block btn-lg mt-3 bg-facebook">Facebook ile Kaydol</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'static/footer.php';?>
