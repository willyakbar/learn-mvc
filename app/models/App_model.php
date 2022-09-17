<?php

class App_model {
    protected $db;
    public function __construct(){ $this->db = new Database; }

    public function get_login($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $user_tbl = ['student', 'admin'];

        for( $i=0; $i < count($user_tbl); $i++ ){
            $query = "SELECT * FROM $user_tbl[$i] JOIN access
                ON $user_tbl[$i].id_access = access.id_access
                WHERE $user_tbl[$i].username = :username
            ";

            $this->db->set_query($query);
            $this->db->bind('username', $username);
            $user = $this->db->fetch_one();

            if($user){
                if(password_verify($password, $user['password'])){
                    Helper::session_login($user['id'], $user['id_access'], $user['desc_access']);
                    return true;
                } else {
                    Helper::set_flash_msg('Password tidak sesuai', 'danger');
                    return false;
                }
            }
        }

        Helper::set_flash_msg('Username tidak ditemukan', 'danger');
        return false;
    }
}