<?php

class Auth extends Controller {

    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
        if($this->model('App_model')->get_login($_POST) > 0){
            Helper::redirect();
        } else {
            Header('Location: '. BASEURL .'auth');
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        Helper::set_flash_msg('logout berhasil', 'success');
        header('Location: '. BASEURL .'auth');
        exit;
    }
}