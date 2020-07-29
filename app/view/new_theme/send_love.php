<?php require 'static/header.php' ?>
<div class="filter bg-header mb-4">
    <div class="container">
        <div class="bg-white rounded p-md-5 p-4">
            <div class="row">
                <div class="col-md-3 d-none d-md-block">
                    <div class="text-16 font-weight-bold text-center mb-4">Seçtiğin Yorumcu</div>
                    <a href="" class="avatar avatar-md bg-light w-80 mx-auto" style="background-image: url(https://randomuser.me/api/portraits/women/2.jpg);"><i class="on avatar-status"></i></a>
                    <div class="flex-fill text-center mt-3">
                        <a href="">
                            <div class="text-18 text-dark px-2">
                                <?= $teller['uname'] . ' ' . $teller['surname'] ?>
                            </div>
                            <div class="text-muted text-14 px-2 my-1 h-1x">
                                Türkçe
                            </div>
                            <div class="mt-3 text-left text-muted">
                                <?= $teller['detail'] ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php if(isset($error)): ?>
                        <h3>Hatanız: <?= $error ?></h3>
                    <?php endif; ?>
                    <?php if(isset($success)): ?>
                        <h3><?= $success ?></h3>
                    <?php endif; ?>
                    <div class="text-28 mb-3 font-weight-bold">Aşk Falı</div>
                    <form action="<?= site_url('ask-gonder') ?>" class="form-group" method="post">
                        <input type="hidden" name="id" value="<?= $teller['id'] ?>">
                        <div class="form-group mt-5">
                            <label class="font-weight-bold">Ad</label>
                            <input required type="text" name="name" class="form-control" placeholder="Ad">
                        </div>
                        <div class="form-group ">
                            <label class="font-weight-bold">Soyad</label>
                            <input required type="text" name="surname" class="form-control" placeholder="Soyad">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Doğum Tarihi</label>
                            <input required type="text" name="bdate" class="form-control datepic" placeholder="Doğum Tarihi">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Yaşadığın Şehir</label>
                            <select required name="sehir" class="custom-select">
                                <option value="0">Yaşadığın Şehir</option>
                                <option value="1">Adana</option>
                                <option value="2">Adıyaman</option>
                                <option value="3">Afyonkarahisar</option>
                                <option value="4">Ağrı</option>
                                <option value="5">Amasya</option>
                                <option value="6">Ankara</option>
                                <option value="7">Antalya</option>
                                <option value="8">Artvin</option>
                                <option value="9">Aydın</option>
                                <option value="10">Balıkesir</option>
                                <option value="11">Bilecik</option>
                                <option value="12">Bingöl</option>
                                <option value="13">Bitlis</option>
                                <option value="14">Bolu</option>
                                <option value="15">Burdur</option>
                                <option value="16">Bursa</option>
                                <option value="17">Çanakkale</option>
                                <option value="18">Çankırı</option>
                                <option value="19">Çorum</option>
                                <option value="20">Denizli</option>
                                <option value="21">Diyarbakır</option>
                                <option value="22">Edirne</option>
                                <option value="23">Elazığ</option>
                                <option value="24">Erzincan</option>
                                <option value="25">Erzurum</option>
                                <option value="26">Eskişehir</option>
                                <option value="27">Gaziantep</option>
                                <option value="28">Giresun</option>
                                <option value="29">Gümüşhane</option>
                                <option value="30">Hakkâri</option>
                                <option value="31">Hatay</option>
                                <option value="32">Isparta</option>
                                <option value="33">Mersin</option>
                                <option value="34">İstanbul</option>
                                <option value="35">İzmir</option>
                                <option value="36">Kars</option>
                                <option value="37">Kastamonu</option>
                                <option value="38">Kayseri</option>
                                <option value="39">Kırklareli</option>
                                <option value="40">Kırşehir</option>
                                <option value="41">Kocaeli</option>
                                <option value="42">Konya</option>
                                <option value="43">Kütahya</option>
                                <option value="44">Malatya</option>
                                <option value="45">Manisa</option>
                                <option value="46">Kahramanmaraş</option>
                                <option value="47">Mardin</option>
                                <option value="48">Muğla</option>
                                <option value="49">Muş</option>
                                <option value="50">Nevşehir</option>
                                <option value="51">Niğde</option>
                                <option value="52">Ordu</option>
                                <option value="53">Rize</option>
                                <option value="54">Sakarya</option>
                                <option value="55">Samsun</option>
                                <option value="56">Siirt</option>
                                <option value="57">Sinop</option>
                                <option value="58">Sivas</option>
                                <option value="59">Tekirdağ</option>
                                <option value="60">Tokat</option>
                                <option value="61">Trabzon</option>
                                <option value="62">Tunceli</option>
                                <option value="63">Şanlıurfa</option>
                                <option value="64">Uşak</option>
                                <option value="65">Van</option>
                                <option value="66">Yozgat</option>
                                <option value="67">Zonguldak</option>
                                <option value="68">Aksaray</option>
                                <option value="69">Bayburt</option>
                                <option value="70">Karaman</option>
                                <option value="71">Kırıkkale</option>
                                <option value="72">Batman</option>
                                <option value="73">Şırnak</option>
                                <option value="74">Bartın</option>
                                <option value="75">Ardahan</option>
                                <option value="76">Iğdır</option>
                                <option value="77">Yalova</option>
                                <option value="78">Karabük</option>
                                <option value="79">Kilis</option>
                                <option value="80">Osmaniye</option>
                                <option value="81">Düzce</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Doğum Zamanı</label>
                            <input type="time" name="dogum_zamani" class="form-control timepic">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Partnerinizin Adı</label>
                            <input type="text" name="part_adi" class="form-control" placeholder="Partnerinizin Adı">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Partnerinizin Soyadı</label>
                            <input type="text" name="part_soyadi" class="form-control" placeholder="Partnerinizin Soyadı">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Partnerinizin Doğum Tarihi</label>
                            <input type="text" name="part_dogum_tarihi" class="form-control datepic" placeholder="Partnerinizin Doğum Tarihi">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Partnerinizin Yaşadığın Şehir</label>
                            <select required name="part_sehir" class="custom-select">
                                <option value="0">Yaşadığın Şehir</option>
                                <option value="1">Adana</option>
                                <option value="2">Adıyaman</option>
                                <option value="3">Afyonkarahisar</option>
                                <option value="4">Ağrı</option>
                                <option value="5">Amasya</option>
                                <option value="6">Ankara</option>
                                <option value="7">Antalya</option>
                                <option value="8">Artvin</option>
                                <option value="9">Aydın</option>
                                <option value="10">Balıkesir</option>
                                <option value="11">Bilecik</option>
                                <option value="12">Bingöl</option>
                                <option value="13">Bitlis</option>
                                <option value="14">Bolu</option>
                                <option value="15">Burdur</option>
                                <option value="16">Bursa</option>
                                <option value="17">Çanakkale</option>
                                <option value="18">Çankırı</option>
                                <option value="19">Çorum</option>
                                <option value="20">Denizli</option>
                                <option value="21">Diyarbakır</option>
                                <option value="22">Edirne</option>
                                <option value="23">Elazığ</option>
                                <option value="24">Erzincan</option>
                                <option value="25">Erzurum</option>
                                <option value="26">Eskişehir</option>
                                <option value="27">Gaziantep</option>
                                <option value="28">Giresun</option>
                                <option value="29">Gümüşhane</option>
                                <option value="30">Hakkâri</option>
                                <option value="31">Hatay</option>
                                <option value="32">Isparta</option>
                                <option value="33">Mersin</option>
                                <option value="34">İstanbul</option>
                                <option value="35">İzmir</option>
                                <option value="36">Kars</option>
                                <option value="37">Kastamonu</option>
                                <option value="38">Kayseri</option>
                                <option value="39">Kırklareli</option>
                                <option value="40">Kırşehir</option>
                                <option value="41">Kocaeli</option>
                                <option value="42">Konya</option>
                                <option value="43">Kütahya</option>
                                <option value="44">Malatya</option>
                                <option value="45">Manisa</option>
                                <option value="46">Kahramanmaraş</option>
                                <option value="47">Mardin</option>
                                <option value="48">Muğla</option>
                                <option value="49">Muş</option>
                                <option value="50">Nevşehir</option>
                                <option value="51">Niğde</option>
                                <option value="52">Ordu</option>
                                <option value="53">Rize</option>
                                <option value="54">Sakarya</option>
                                <option value="55">Samsun</option>
                                <option value="56">Siirt</option>
                                <option value="57">Sinop</option>
                                <option value="58">Sivas</option>
                                <option value="59">Tekirdağ</option>
                                <option value="60">Tokat</option>
                                <option value="61">Trabzon</option>
                                <option value="62">Tunceli</option>
                                <option value="63">Şanlıurfa</option>
                                <option value="64">Uşak</option>
                                <option value="65">Van</option>
                                <option value="66">Yozgat</option>
                                <option value="67">Zonguldak</option>
                                <option value="68">Aksaray</option>
                                <option value="69">Bayburt</option>
                                <option value="70">Karaman</option>
                                <option value="71">Kırıkkale</option>
                                <option value="72">Batman</option>
                                <option value="73">Şırnak</option>
                                <option value="74">Bartın</option>
                                <option value="75">Ardahan</option>
                                <option value="76">Iğdır</option>
                                <option value="77">Yalova</option>
                                <option value="78">Karabük</option>
                                <option value="79">Kilis</option>
                                <option value="80">Osmaniye</option>
                                <option value="81">Düzce</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Partnerinizin Cinsiyetin</label>
                            <select required name="part_cinsiyet" class="custom-select">
                                <option>Cinsiyetin</option>
                                <option value="1">Kadın</option>
                                <option value="2">Erkek</option>
                            </select>
                        </div>
                            <div class="form-group">
                                <label class="font-weight-bold">İlişki Durumunuz</label>
                                <select required name="iliski" class="custom-select">
                                    <option value="0">İlişki Durumu</option>
                                    <option value="1">Var</option>
                                    <option value="2">Yok</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Cinsiyetin</label>
                                <select required name="cinsiyet" class="custom-select">
                                    <option>Cinsiyetin</option>
                                    <option value="1">Kadın</option>
                                    <option value="2">Erkek</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Spesifik Soru</label>
                                <textarea required minlength="25" class="form-control" name="spesifik" placeholder="Spesifik Soru" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Yorum Türü</label>
                                <select required name="yorum_turu" class="custom-select">
                                    <option >Yorum Türü</option>
                                    <?php for ($i= 0; $i < count($comment);$i++): ?>
                                        <option value="<?= strtolower($comment[$i]) ?>"><?= $comment[$i] ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <label class="font-weight-bold">Telefon Numarası</label>
                            <input required type="text" name="telno" class="form-control form-control-lg" placeholder="Telefon Numarası">
                            <div class="my-3">
                                <div class="text-danger font-weight-bold py-1">Telefonlu yorum türünü seçerseniz yorumcumuzun sana ulaşabilmesi için 850 8406202 numaralı hattan gelen çağrıyı kabul etmelisin.</div>
                                <div class="text-muted py-1">1. Görüşmeler dakika başı ücretlendirilir</div>
                                <div class="text-muted py-1">2. Ödeme ilk 10 dakikayı kapsar</div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Yorum Dili</label>
                                <select required name="yorumdili" class="custom-select">
                                    <option>Yorum Dili</option>
                                    <option value="tr">Türkçe</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                            <div class="form-group bg-secondary rounded p-4">
                                <label class="font-weight-bold">Falın havuza düşsün mü</label>
                                <div required class="custom-control custom-checkbox">
                                    <input name="havuz" value="1" type="checkbox" class="custom-control-input" id="havuz">
                                    <label class="custom-control-label" for="havuz">
                                        Falınız söz verilen süre sonunda hala yorumlanmamışsa havuza düşer ve uygun bir yorumcuya devredilir.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group bg-dark rounded p-4">
                                <label class="font-weight-bold">Kullanım Koşulları</label>
                                <div class="custom-control custom-checkbox">
                                    <input required name="kullanım" value="1" required type="checkbox" class="custom-control-input" id="kullanim">
                                    <label class="custom-control-label" for="kullanim">
                                        Kayıt olarak ya da giriş yaparak Kullanım ve Gizlilik Koşullarını Aydınlanma ve Rıza Metnini okuduğumu ve kabul ettiğimi beyan ederim.
                                    </label>
                                </div>
                            </div>
                            <input type="hidden" name="submit" value="1">
                            <button name="send" class="btn btn-primary-gradient btn-lg px-5">Hadi Fallaşalım</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'static/footer.php' ?>
