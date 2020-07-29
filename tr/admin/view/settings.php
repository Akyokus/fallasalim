<?php require admin_view('static/header') ?>

<div class="box-">
    <h1>
        Ayarlar
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <form action="" method="post" class="form label">
        <ul>
            <li>
                <label>Site Başlık</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[title]" value="<?= setting('title') ?>" >
                </div>
            </li>
            <li>
                <label>Site Description</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[description]" value="<?= setting('description') ?>">
                </div>
            </li>
            <li>
                <label>Site Keywords</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[keywords]" value="<?= setting('keywords') ?>">
                </div>
            </li>
            <li>
                <label>Site Büyük Başlık</label>
                <div class="form-content">
                    <textarea rows="4" cols="50" id="title" name="settings[big_title]"><?= setting('big_title') ?></textarea>
                </div>
            </li>
            <li>
                <label>Site Alt Başlık</label>
                <div class="form-content">
                    <textarea rows="4" cols="50" id="title" name="settings[lit_title]"><?= setting('lit_title') ?></textarea>
                </div>
            </li>
            <li>
                <label>Site Kampanya Başlık</label>
                <div class="form-content">
                    <textarea rows="4" cols="50" id="title" name="settings[campaign_title]"><?= setting('campaign_title')  ?> </textarea> *Başlıklar arasına / işareti koyunuz.
                </div>

            </li>
            <li>
                <label>Site Kampanya</label>
                <div class="form-content">
                    <textarea rows="4" cols="50" id="title" name="settings[campaign]"><?= setting('campaign')  ?> </textarea> *Kampanyalar arasına / işareti koyunuz.
                </div>
            </li>
            <li>
                <label>Site Teması</label>
                <div class="form-content">
                    <select name="settings[theme]">
                        <?php foreach ($themes as $theme): ?>
                            <option  value="">--Tema Seçiniz--</option>
                            <option <?= setting('theme') == $theme ? 'selected' : null ?> value="<?=$theme?>"><?=$theme?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </li>
            <li>
                <label>Facebook</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[facebook]" value="<?= setting('facebook') ?>">
                </div>
            </li>
            <li>
                <label>Twitter</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[twitter]" value="<?= setting('twitter') ?>">
                </div>
            </li>
            <li>
                <label>Instagram</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[instagram]" value="<?= setting('instagram') ?>">
                </div>
            </li>
            <li>
                <label>Youtube</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[youtube]" value="<?= setting('youtube') ?>">
                </div>
            </li>
            <li>
                <label>Müşteri Hizmetleri</label>
                <div class="form-content">
                    <input type="text" id="title" name="settings[musteri_hiz]" value="<?= setting('musteri_hiz') ?>">
                </div>
            </li>
            <li>
                <label>Bakım Modu</label>
                <div class="form-content">
                    <select name="settings[maintenance]">
                            <option <?= setting('maintenance') == 1 ? 'selected' : null ?> value="1">Aç</option>
                            <option <?= setting('maintenance') == 0 ? 'selected' : null ?> value="0">Kapat</option>
                    </select>
                </div>
            </li>
            <li class="submit">
                <input type="hidden" value="1" name="submit">
                <button type="submit" >Değişiklikleri Kaydet</button>
            </li>
        </ul>
    </form>
</div>

<?php require admin_view('static/footer') ?>
