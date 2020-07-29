<?php require 'static/header.php'?>
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
                    <form action="<?= site_url('tarot-gonder') ?>" class="form-group" method="post">
                        <input type="hidden" name="id" value="<?= $teller['id'] ?>">
                        <?php if(isset($error)): ?>
                            <h3>Hatanız: <?= $error ?></h3>
                        <?php endif; ?>
                        <?php if(isset($success)): ?>
                            <h3><?= $success ?></h3>
                        <?php endif; ?>
                    <div class="text-28 mb-3 font-weight-bold">Tarot Falı</div>
                    <div class="py-1">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="genel" name="acilim" class="custom-control-input" checked="true">
                            <label class="custom-control-label expansion" for="genel" total-card="10">Genel Açılım</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="kariyer" name="acilim" class="custom-control-input">
                            <label class="custom-control-label expansion" for="kariyer" total-card="5">Kariyer Açılımı</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="iliski" name="acilim" class="custom-control-input">
                            <label class="custom-control-label expansion" for="iliski" total-card="7">İlişki Açılımı</label>
                        </div>
                    </div>
                    <input type="hidden" name="card-selects">
                    <div class="d-flex align-items-center py-4">
                        <div>Toplam Kart :</div>
                        <div class="font-weight-bold ml-2 mr-4 text-primary">78</div>
                        <div>Kalan Kart :</div>
                        <div class="font-weight-bold ml-2 mr-4 total-card text-primary">10</div>
                    </div>
                    <div class="bg-light rounded p-4 d-flex justify-content-between align-items-center flex-wrap w-100">
                        <label class="card-select">
                            <input type="checkbox" name="value78" value="0" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value1" value="1" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value2" value="2" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value3" value="3" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value4" value="4" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value5" value="5" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value6" value="6" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value7" value="7" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value8" value="8" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value9" value="9" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value10" value="10" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value11" value="11" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value12" value="12" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value13" value="13" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value14" value="14" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value15" value="15" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value16" value="16" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value17" value="17" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value18" value="18" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value19" value="19" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value20" value="20" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value21" value="21" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value22" value="22" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value23" value="23" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value24" value="24" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value25" value="25" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value26" value="26" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value27" value="27" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value28" value="28" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value29" value="29" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value30" value="30" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value31" value="31" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value32" value="32" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value33" value="33" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value34" value="34" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value35" value="35" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value36" value="36" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value37" value="37" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value38" value="38" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value39" value="39" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value40" value="40" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value41" value="41" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value42" value="42" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value43" value="43" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value44" value="44" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value45" value="45" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value46" value="46" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value47" value="47" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value48" value="48" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value49" value="49" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value50" value="50" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value51" value="51" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value52" value="52" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value53" value="53" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value54" value="54" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value55" value="55" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value56" value="56" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value57" value="57" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value58" value="58" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value59" value="59" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value60" value="60" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value61" value="61" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value62" value="62" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value63" value="63" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value64" value="64" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value65" value="65" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value66" value="66" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value67" value="67" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value68" value="68" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value69" value="69" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value70" value="70" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value71" value="71" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value72" value="72" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value73" value="73" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value74" value="74" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value75" value="75" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value76" value="76" class="d-none">
                        </label>
                        <label class="card-select">
                            <input type="checkbox" name="value77" value="77" class="d-none">
                        </label>
                    </div>
                    <div class="form-group mt-5">
                        <?php if(isset($error)): ?>
                            <h3>Hatanız: <?= $error ?></h3>
                        <?php endif; ?>
                        <?php if(isset($success)): ?>
                            <h3><?= $success ?></h3>
                        <?php endif; ?>
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
                                <input  type="text" name="bdate" class="form-control datepic" placeholder="Doğum Tarihi">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Yaşadığın Şehir</label>
                                <select  name="sehir" class="custom-select">
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
                                <label class="font-weight-bold">İlişki Durumu</label>
                                <select  name="iliski" class="custom-select">
                                    <option value="0">İlişki Durumu</option>
                                    <option value="1">Var</option>
                                    <option value="2">Yok</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Cinsiyetin</label>
                                <select  name="cinsiyet" class="custom-select">
                                    <option>Cinsiyetin</option>
                                    <option value="1">Kadın</option>
                                    <option value="2">Erkek</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Spesifik Soru</label>
                                <textarea  minlength="25" class="form-control" name="spesifik" placeholder="Spesifik Soru" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Yorum Türü</label>
                                <select  name="yorum_turu" class="custom-select">
                                    <option >Yorum Türü</option>
                                    <?php for ($i= 0; $i < count($comment);$i++): ?>
                                        <option value="<?= strtolower($comment[$i]) ?>"><?= $comment[$i] ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <label class="font-weight-bold">Telefon Numarası</label>
                            <input  type="text" name="telno" class="form-control form-control-lg" placeholder="Telefon Numarası">
                            <div class="my-3">
                                <div class="text-danger font-weight-bold py-1">Telefonlu yorum türünü seçerseniz yorumcumuzun sana ulaşabilmesi için 850 8406202 numaralı hattan gelen çağrıyı kabul etmelisin.</div>
                                <div class="text-muted py-1">1. Görüşmeler dakika başı ücretlendirilir</div>
                                <div class="text-muted py-1">2. Ödeme ilk 10 dakikayı kapsar</div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Yorum Dili</label>
                                <select  name="yorumdili" class="custom-select">
                                    <option>Yorum Dili</option>
                                    <option value="tr">Türkçe</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                            <div class="form-group bg-secondary rounded p-4">
                                <label class="font-weight-bold">Falın havuza düşsün mü</label>
                                <div  class="custom-control custom-checkbox">
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
<?php require 'static/footer.php'?>




