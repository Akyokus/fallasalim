<?php

if(isset($_POST['audio'])){
    $audio = $_POST['audio'];

    $audio = str_replace('data:audio/wav;base64,', '', $audio);
    $decoded = base64_decode($audio);
    $file_name = "recorded_audio".rand(0,9999).rand(0,9999).rand(999,999999).".wav";
    $file_location = $file_name;
    fale::upload_voice_name($file_location,'3');
    header("Refresh:0");
    file_put_contents($file_location, $decoded);


}
$GLOBALS['teller_id'] = post('id');
$id = post('id');
$fale = fale::get_fale($id);
$selected_card = explode(',', $fale['selected_card']);




$city = array(
    '1' => 'Adana',
    '2' => 'Adıyaman',
    '3' => 'Afyonkarahisar',
    '4' => 'Ağrı',
    '5' => 'Amasya',
    '6' => 'Ankara',
    '7' => 'Antalya',
    '8' => 'Artvin',
    '9' => 'Aydın',
    '10' => 'Balıkesir',
    '11' => 'Bilecik',
    '12' => 'Bingöl',
    '13' => 'Bitlis',
    '14' => 'Bolu',
    '15' => 'Burdur',
    '16' => 'Bursa',
    '17' => 'Çanakkale',
    '18' => 'Çankırı',
    '19' => 'Çorum',
    '20' => 'Denizli',
    '21' => 'Diyarbakır',
    '22' => 'Edirne',
    '23' => 'Elâzığ',
    '24' => 'Erzincan',
    '25' => 'Erzurum',
    '26' => 'Eskişehir',
    '27' => 'Gaziantep',
    '28' => 'Giresun',
    '29' => 'Gümüşhane',
    '30' => 'Hakkari',
    '31' => 'Hatay',
    '32' => 'Isparta',
    '33' => 'Mersin',
    '34' => 'İstanbul',
    '35' => 'İzmir',
    '36' => 'Kars',
    '37' => 'Kastamonu',
    '38' => 'Kayseri',
    '39' => 'Kırklareli',
    '40' => 'Kırşehir',
    '41' => 'Kocaeli',
    '42' => 'Konya',
    '43' => 'Kütahya',
    '44' => 'Malatya',
    '45' => 'Manisa',
    '46' => 'Kahramanmaraş',
    '47' => 'Mardin',
    '48' => 'Muğla',
    '49' => 'Muş',
    '50' => 'Nevşehir',
    '51' => 'Niğde',
    '52' => 'Ordu',
    '53' => 'Rize',
    '54' => 'Sakarya',
    '55' => 'Samsun',
    '56' => 'Siirt',
    '57' => 'Sinop',
    '58' => 'Sivas',
    '59' => 'Tekirdağ',
    '60' => 'Tokat',
    '61' => 'Trabzon',
    '62' => 'Tunceli',
    '63' => 'Şanlıurfa',
    '64' => 'Uşak',
    '65' => 'Van',
    '66' => 'Yozgat',
    '67' => 'Zonguldak',
    '68' => 'Aksaray',
    '69' => 'Bayburt',
    '70' => 'Karaman',
    '71' => 'Kırıkkale',
    '72' => 'Batman',
    '73' => 'Şırnak',
    '74' => 'Bartın',
    '75' => 'Ardahan',
    '76' => 'Iğdır',
    '77' => 'Yalova',
    '78' => 'Karabük',
    '79' => 'Kilis',
    '80' => 'Osmaniye',
    '81' => 'Düzce',
);
$city = $city[$fale['city']];
if ($fale['fale_type_id'] == 6) {

    $part_city = $city[$fale['part_city']];
}


@$relation = [
    '0' => 'Var',
    '1' => 'Yok'
];
@$relation = $relation[$fale['relation']];


$gender = [
    '1' => 'Kadın',
    '2' => 'Erkek'
];
$gender = $gender[$fale['germen']];

if ($fale['fale_type_id'] == 6) {

    $part_gender = $gender[$fale['part_gender']];
}

if (post('submit')) {
    if (fale::update_comment($fale['id'], post('comment'))) {
        $success = 'Falı Başarıyla Yorumladınız :)';
        echo 'geldi';
        fale::update_fale_status($fale['id']);
        echo 'geldi2';
    }
    //Kullanıcıya sms

}

$file_name = fale::get_file_name($id);



require teller_view('fale_detail');
