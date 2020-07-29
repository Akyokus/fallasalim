<?php


class teller
{
    public static function tellerExist($email){
        global $db;
        $query = $db->prepare('SELECT * FROM fortune_teller WHERE  email = :email');
        $query->execute([
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_teller($id){
        global $db;
        $query = $db->prepare('SELECT * FROM fortune_teller WHERE id = :id');
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function count_ncompleted_fale($state){
        global $db;
        $query = $db->prepare('SELECT * FROM fale WHERE fornuter_id = :f_id AND state = :state');
        $query->execute([
            'f_id' => session('teller_id'),
            'state' => $state
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function in_pool_fale(){
        global $db;
        $query = $db->prepare('SELECT * FROM fale WHERE state = :state AND add_pool = :a_pool');
        $query->execute([
           'state' => '0',
           'a_pool' => '1'
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function all_fale(){
        global $db;
        $query = $db->prepare('SELECT * FROM fale WHERE fornuter_id = :f_id');
        $query->execute([
            'f_id' => session('teller_id')
        ]);
        return $query ->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function sum_fale_cost(){
        global $db;
        $query = $db-> prepare('SELECT SUM(cost) FROM fale WHERE fornuter_id = :f_id AND state = :state');
        $query->execute([
            'f_id' => session('teller_id'),
            'state' => '1'
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function update_teller($data){
        global $db;
        $query = $db->prepare('UPDATE fortune_teller SET phone_no = :phone_no,gender = :gender,fale_look_type = :f_t_id,comment_type = :f_l_type,title = :title,detail= :detail WHERE id = :id ');
        $row = $query->execute($data);
        if (isset($row)){

            return true;
        }else{

        }
    }
    public static function get_fale_type($id){
        global $db;
        $query = $db->prepare('SELECT fale_look_type FROM fortune_teller WHERE id = :id');
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
