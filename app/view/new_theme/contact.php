<?php
require 'static/header.php';
?>


<div class="filter bg-header mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="bg-white p-5 rounded mb-md-5">
                    <div class="text-center">
                        <div class="text-24 font-weight-bold">İletişim Formu</div>
                        <div class="text-muted my-3">Aşağıdaki iletişim formunu doldurarak bize ulaşabilirsin.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Adınız Soyadınız">
                    </div>
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Email Adresiniz">
                    </div>
                    <div class="form-group">
                        <select class="custom-select">
                            <option>Konu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Mesajınız" rows="8"></textarea>
                    </div>
                    <button class="btn btn-block btn-lg btn-primary-gradient">GÖNDER</button>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
require 'static/footer.php';
?>
