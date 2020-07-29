<?php

require 'app/view/new_theme/love_fale.php';
$tellers = fortune_teller::special_type_teller_listing('6');

if (session('user_id')){


}else{
    require 'app/controller/uye-giris.php';
}


