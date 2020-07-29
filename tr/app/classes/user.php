<?php
error_reporting(0);

class user
{

    public static function Login($data){

            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_name'] = $data['uname'];
            $_SESSION['email'] = $data['email'];

}
    public static function teller_login($data){

            $_SESSION['teller_id'] = $data['teller_id'];
            $_SESSION['teller_uname'] = $data['teller_uname'];


    }
    public static function admin_login($data){
        $_SESSION['admin_id'] = $data['admin_id'];
        $_SESSION['admin_uname'] = $data['admin_uname'];
    }
    public static function userExist($email){
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE  email = :email');
        $query->execute([
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function register($data){
        global $db;
        $query = $db->prepare('INSERT INTO users SET uname=?,surname=?,email=?,password=?,phone_no=?');
        return $query->execute($data);
    }
    public static function get_comment(){
        global $db;
        $query = $db -> prepare('SELECT uname,comment,comment_rate FROM users');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_user($id){
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute([
           'id' => $id
        ]);
         return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function update_user($bilgiler){
        global $db;
        $query = $db->prepare('UPDATE users SET phone_no = ?, birth_date = ?,relu_status = ?,gender = ? WHERE user_id= ?');
        $row = $query->execute([
            $bilgiler['tel_no'],$bilgiler['dogum_gunu'],$bilgiler['iliski'],$bilgiler['cinsiyet'],$bilgiler['id']
        ]);
        if ($row){
            return true;
        }else{
            return false;
        }
    }

}

