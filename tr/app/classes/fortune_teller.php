<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class fortune_teller
{

    public static function liste(){
        global $db;
            $query = $db ->prepare('SELECT * FROM fortune_teller');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    public static function get_liste($id){
        global $db;
            $query = $db -> prepare('SELECT * FROM fortune_teller WHERE id = :id');
            $query->execute([
                'id' => $id
            ]);
            return $query->fetch(PDO::FETCH_ASSOC);

    }
    public static function type_listing($type){
        global $db;
        $query = $db -> prepare('SELECT * FROM fortune_teller WHERE fale_look_type = :f_l_type');
        $query->execute([
            'f_l_type' => $type
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function general_get_comment_type($id){
            $teller = self::get_liste($id);
            $type = explode(',',$teller['comment_type']);
            if (in_array('1',$type)) {
                $replaced = array_search('1',$type);
                $type[$replaced] = 'Yazili';
            }if (in_array('2',$type)){
                $replaced = array_search('2',$type);
                $type[$replaced] = 'Sesli';
            }if (in_array('3',$type)){
                $replaced = array_search('3',$type);
                $type[$replaced] = 'Görüntülü';
            }if (in_array('4',$type)){
                $replaced = array_search('4',$type);
                $type[$replaced] = 'Telefonlu';
            }
            return  implode(',',$type);

    }
        public static function teller_listing(){
            $tellers = self::liste();
            for($i = 0;$i<count($tellers);$i++){
                $type = explode(',',$tellers[$i]['comment_type']);
                if (in_array('1',$type)) {
                    $replaced = array_search('1',$type);
                    $type[$replaced] = 'Yazili';
                }if (in_array('2',$type)){
                    $replaced = array_search('2',$type);
                    $type[$replaced] = 'Sesli';
                }if (in_array('3',$type)){
                    $replaced = array_search('3',$type);
                    $type[$replaced] = 'Görüntülü';
                }if (in_array('4',$type)){
                    $replaced = array_search('4',$type);
                    $type[$replaced] = 'Telefonlu';
                }
                $tellers[$i]['comment_type'] = implode(',',$type);
            }
            return $tellers;
}
        public static function get_one_type($comment){
            $comment = explode(',',$comment);
            return $comment;

        }



    public static function total_fale($teller_id){
            global $db;
            $query = $db ->prepare('SELECT * FROM fale WHERE fornuter_id = :f_id AND state = :state');
            $query->execute([
                'f_id' => $teller_id,
                'state' => 1
            ]);
            $row[] = $query ->fetchAll(PDO::FETCH_ASSOC);
            return count($row[0]);
    }

    public static function private_success_rate_calculater($teller_id){
            //özel falcı profili görüntülenirken
        global $db;
            $success_fale = self::total_fale($teller_id);
            $query = $db->prepare('SELECT * FROM fale WHERE fornuter_id = :f_id');
            $query->execute([
                'f_id' => $teller_id
            ]);
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
                $total_fale = count($row);
                $avgg = ($success_fale*100)/$total_fale;
                echo $avgg;
        $avg = self::success_rate();
                $query = $db->prepare('UPDATE fortune_teller SET total_rate = ? WHERE id = ?');
                return $query->execute([
                    $avg,$teller_id
                ]);
    }

    public static function success_rate_calculater(){
            //yorumcular sayfasındaki yorumcular listelenirken
        global $db;
            $query = $db ->prepare('SELECT * FROM fale');
            $query ->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            for ($i=0;$i<=count($row);$i++){

            }
    }

    public static function success_rate()
    {
        //
        global $db;
        $query = $db->prepare('SELECT DISTINCT fornuter_id FROM fale');
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        $query = $db->prepare('SELECT AVG(rate) FROM fale WHERE fornuter_id = :f_id');
        $query->execute([
            'f_id' => 2
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function special_type_teller_listing($type){

        $tellers = self::type_listing($type);
        for($i = 0;$i<count($tellers);$i++){
            $type = explode(',',$tellers[$i]['comment_type']);
            if (in_array('1',$type)) {
                $replaced = array_search('1',$type);
                $type[$replaced] = 'Yazili';
            }if (in_array('2',$type)){
                $replaced = array_search('2',$type);
                $type[$replaced] = 'Sesli';
            }if (in_array('3',$type)){
                $replaced = array_search('3',$type);
                $type[$replaced] = 'Görüntülü';
            }if (in_array('4',$type)){
                $replaced = array_search('4',$type);
                $type[$replaced] = 'Telefonlu';
            }
            $tellers[$i]['comment_type'] = implode(',',$type);
        }
        return $tellers;

    }

    public static function get_by_comment_type($type){
        global $db;
        $query = $db ->prepare('SELECT * FROM fortune_teller WHERE fale_look_type = :type');
        $query ->execute([
            'type' => $type
        ]);
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
        $tellers = [];
        for ($i = 0;$i < count($row);$i++){
            $type = explode(',',$row[$i]['comment_type']);
            if (in_array('1',$row)) {
                $replaced = array_search('1',$type);
                $type[$replaced] = 'Yazili';
            }if (in_array('2',$row)){
                $replaced = array_search('2',$type);
                $type[$replaced] = 'Sesli';
            }if (in_array('3',$row)){
                $replaced = array_search('3',$type);
                $type[$replaced] = 'Görüntülü';
            }if (in_array('4',$row)){
                $replaced = array_search('4',$type);
                $type[$replaced] = 'Telefonlu';
            }
            $tellers[$i] = implode(',',$row);
        }
        print_r($tellers);
            return $row;
        }


    public static function get_fale_comment($id,$type){
        global $db;
        $query = $db->prepare('SELECT * FROM fale WHERE fornuter_id = :f_id AND fale_type_id = :f_t_id');
        $query->execute([
            'f_id' => $id,
            'f_t_id' => $type
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_total_fale($id){
        global $db;
        $query = $db->prepare('SELECT * FROM fale WHERE fornuter_id = :f_id AND state = :state');
        $query->execute([
            'f_id' => $id,
            'state' => 1
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
