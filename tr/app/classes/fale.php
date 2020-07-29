<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class fale
{
    public function __construct()
    {
        //falcının toplam hesaplamalarını yap
    }
    public static function get_fale($id){
        global $db;
        $query = $db->prepare('SELECT * FROM fale WHERE id = :id');
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function add_coffe_fale($bilgiler)
    {
        global $db;
        $query = $db->prepare('INSERT INTO fale SET fale_type_id = :f_t_id, user_id = :u_id,fornuter_id = :f_id,uname = :uname,surname = :surname,bdate = :bdate, state = :state,city = :city,relation = :rela,germen = :germen,telno = :tel,cost = :cost,comment_type = :c_type,add_pool = :a_pool,spesifik = :spe ');
        $row = $query->execute([
            'uname' => $bilgiler['ad'],
            'surname' => $bilgiler['soyad'],
            'bdate' => $bilgiler['dogum'],
            'f_t_id' => '1',
            'u_id' => session('user_id'),
            'f_id' => $bilgiler['f_id'],
            'state' => '0',
            'city' => $bilgiler['sehir'],
            'rela' => $bilgiler['iliski'],
            'germen' => $bilgiler['cinsiyet'],
            'tel' => $bilgiler['tel_no'],
            'cost' => '50',
            'c_type' => $bilgiler['yorum_turu'],
            'a_pool' => '1',
            'spe' => $bilgiler['spesifik']
        ]);



        $last_id = $db->lastInsertId();


        $hashing = [];
        if ($_FILES) {
            $image = $_FILES;

            for ($i = 0; $i < count($image); $i++) {
                $image_name = explode('.', $image['image' . $i]['name']);
                $hashing_image_name = 'image' . rand(99, 99999) . rand(0, 9999) . rand(0, 999999) . rand(0, 99999999);
                if ($image_name[1] === 'JPG') {
                    $hashing_image_name = $hashing_image_name . '.JPG';
                } else {
                    $hashing_image_name = $hashing_image_name . '.PNG';
                }

                $query1 = $db->prepare('INSERT INTO fale_photos SET fale_id = :f_id,image_name = :i_name');
                $row = $query1->execute([
                    'f_id' => $last_id,
                    'i_name' => $hashing_image_name
                ]);

                $hashing[] = $hashing_image_name;
            }
            self::upload_file($image, $hashing);

            return true;
        }


    }

    public static function upload_file($dosya, $dosya_adi)
    {

        for ($i = 0; $i < count($dosya_adi); $i++) {
            if ($dosya['image' . $i]['error'] == 4) {

            } else {
                if (is_uploaded_file($dosya['image' . $i]['tmp_name'])) {
                    $gecerli_dosya_uzantilari = [
                        'image/jpeg',
                        'image/png'
                    ];
                    $dosya_uzantisi = $dosya['image' . $i]['type'];
                    if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)) {
                        move_uploaded_file($dosya['image' . $i]['tmp_name'], 'public/fale_images/' . $dosya_adi[$i]);
                    }
                }
            }
        }


    }

    public static function add_tarot_fale($bilgiler, $selected)
    {
        global $db;
        $selected = implode(',', $selected);

        $query = $db->prepare('INSERT INTO fale SET fale_type_id = :f_t_id, user_id = :u_id,fornuter_id = :f_id,uname = :uname,surname = :surname,bdate = :bdate, state = :state,city = :city,relation = :rela,germen = :germen,telno = :tel,cost = :cost,comment_type = :c_type,add_pool = :a_pool,selected_card = :t_card,spesifik = :spe');
        $row = $query->execute([
            'uname' => $bilgiler['ad'],
            'surname' => $bilgiler['soyad'],
            'bdate' => $bilgiler['dogum'],
            'f_t_id' => $bilgiler['f_t_id'],
            'u_id' => session('user_id'),
            'f_id' => $bilgiler['f_id'],
            'state' => '0',
            'city' => $bilgiler['sehir'],
            'rela' => $bilgiler['iliski'],
            'germen' => $bilgiler['cinsiyet'],
            'tel' => $bilgiler['tel_no'],
            'cost' => '50',
            'c_type' => '2',
            "a_pool" => '1',
            't_card' => $selected,
            'spe' => $bilgiler['spesifik']
        ]);
        if ($row) {
            return true;
        }


    }

    public static function add_hand_fale($bilgiler)
    {
        global $db;
        $query = $db->prepare('INSERT INTO fale SET fale_type_id = :f_t_id, user_id = :u_id,fornuter_id = :f_id,uname = :uname,surname = :surname,bdate = :bdate, state = :state,city = :city,relation = :rela,germen = :germen,telno = :tel,cost = :cost,comment_type = :c_type,add_pool = :a_pool,spesifik = :spe');
        $query->execute([
            'uname' => $bilgiler['ad'],
            'surname' => $bilgiler['soyad'],
            'bdate' => $bilgiler['dogum'],
            'f_t_id' => '4',
            'u_id' => session('user_id'),
            'f_id' => $bilgiler['f_id'],
            'state' => '0',
            'city' => $bilgiler['sehir'],
            'rela' => $bilgiler['iliski'],
            'germen' => $bilgiler['cinsiyet'],
            'tel' => $bilgiler['tel_no'],
            'cost' => '50',
            'c_type' => '2',
            'a_pool' => '1',
            'spe' => $bilgiler['spesifik']
        ]);


        $last_id = $db->lastInsertId();

        $hashing = [];
        if ($_FILES) {
            $image = $_FILES;
            for ($i = 0; $i < count($image); $i++) {
                $image_name = explode('.', $image['image' . $i]['name']);
                $hashing_image_name = 'image' . rand(99, 99999) . rand(0, 9999) . rand(0, 999999) . rand(0, 99999999);
                if ($image_name[1] === 'JPG') {
                    $hashing_image_name = $hashing_image_name . '.JPG';
                } else {
                    $hashing_image_name = $hashing_image_name . '.PNG';
                }

                $query1 = $db->prepare('INSERT INTO fale_photos SET fale_id = :f_id,image_name = :i_name');
                $query1->execute([
                    'f_id' => $last_id,
                    'i_name' => $hashing_image_name
                ]);
                $hashing[] = $hashing_image_name;
            }
            self::upload_file($image, $hashing);

            return true;
        }


    }

    public static function add_num_and_star_fale($bilgiler){
        global $db;
        $query = $db->prepare('INSERT INTO fale SET fale_type_id = :f_t_id, user_id = :u_id,fornuter_id = :f_id,uname = :uname,surname = :surname,bdate = :bdate,btime = :btime, state = :state,city = :city,relation = :rela,germen = :germen,telno = :tel,cost = :cost,comment_type = :c_type,add_pool = :a_pool,spesifik = :spe');
        $row = $query->execute([
            'uname' => $bilgiler['ad'],
            'surname' => $bilgiler['soyad'],
            'bdate' => $bilgiler['dogum'],
            'btime' => $bilgiler['d_zamani'],
            'f_t_id' => $bilgiler['f_t_p_id'],
            'u_id' => session('user_id'),
            'f_id' => $bilgiler['f_id'],
            'state' => '0',
            'city' => $bilgiler['sehir'],
            'rela' => $bilgiler['iliski'],
            'germen' => $bilgiler['cinsiyet'],
            'tel' => $bilgiler['tel_no'],
            'cost' => '50',
            'c_type' => '2',
            'a_pool' => '1',
            'spe' => $bilgiler['spesifik']
        ]);
            if ($row){
                return true;
            }
    }
    public static function add_love_fale($bilgiler){
        global $db;
        $query = $db -> prepare('INSERT INTO fale SET fale_type_id = :f_t_id,user_id = :u_id,fornuter_id = :f_id,
uname = :ad,surname = :soyad,bdate = :dogum,btime = :d_zamani,part_name = :part_adi,part_surname = :part_soyadi,part_bdate = :part_d_tarihi,
part_city = :part_sehir,part_gender = :part_cinsiyet,state = :state,city = :sehir,relation = :iliski,germen = :cinsiyet,telno = :tel_no,spesifik= :spe');
        $row = $query->execute([
            'f_t_id' =>$bilgiler['f_t_p_id'],
            'u_id' => session('user_id'),
            'f_id' => $bilgiler['f_id'],
            'ad' => $bilgiler['ad'],
            'soyad' => $bilgiler['soyad'],
            'dogum' => $bilgiler['dogum'],
            'd_zamani' => $bilgiler['d_zamani'],
            'part_adi' => $bilgiler['part_adi'],
            'part_soyadi' => $bilgiler['part_soyadi'],
            'part_d_tarihi' => $bilgiler['part_d_tarihi'],
            'part_sehir' => $bilgiler['part_sehir'],
            'part_cinsiyet' => $bilgiler['part_cinsiyet'],
            'state' => '0',
            'sehir' => $bilgiler['sehir'],
            'iliski' => $bilgiler['iliski'],
            'cinsiyet' => $bilgiler['cinsiyet'],
            'tel_no' => $bilgiler['tel_no'],
            'spe' => $bilgiler['spesifik']
        ]);
        if ($row){
            return true;
        }
    }
    public static function get_completed_fale($state){
        global $db;
        $query = $db->prepare('SELECT id,fale_type_id,fornuter_id,cost,last_date,uname,surname,create_date FROM fale WHERE user_id= :u_id AND state = :state');
        $query->execute([
            'u_id' => $_SESSION['user_id'],
            'state' => $state
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function update_comment($fale_id,$fale_comment){
        global $db;
        $query = $db->prepare('UPDATE fale SET comment =:comment WHERE id=:id');
        $row = $query->execute([
            'id' => $fale_id,
            'comment' => $fale_comment
        ]);

        if ($row){
            return true;
        }
    }
    public static function get_file_name($fale_id){
        global $db;
        $query = $db ->prepare('SELECT image_name FROM fale_photos WHERE fale_id = :f_id');
        $query->execute([
            'f_id' => $fale_id
        ]);
        $row = $query->fetchAll(PDO::FETCH_ASSOC);

        ;
        for ($i=0;$i<count($row);$i++){
            if (file_exists('public/fale_images/'.$row[$i]['image_name'])){
                return $row;
            }
        }
    }
    public static function upload_voice_name($file_name,$fale_id){
        global $db;
        $query = $db->prepare('INSERT INTO voice SET file_name = :f_name,fale_id = :f_id');
        $row = $query->execute([
            'f_name' =>'file_name',
            'f_id' => '1'
        ]);
        if ($row){
            return true;
        }else{
            return false;
        }
    }

    public static function get_special_fale($fale_id){
        global $db;
        $query = $db->prepare('SELECT * FROM fale WHERE id = :id');
        $query->execute([
            'id' => $fale_id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function update_fale_status($fale_id){
        global $db;
        echo $fale_id;
        $query = $db->prepare('UPDATE fale SET state = :state WHERE id = :id');
        $row = $query->execute([
           'state' => '1',
            'id' => $fale_id
        ]);
        if ($row){
            echo 'başarılı';
        }else{
            echo 'başarısız';
        }
    }


}
