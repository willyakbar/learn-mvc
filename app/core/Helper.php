<?php

class Helper {

    public static function set_flash_msg($msg, $type){
        $_SESSION['flash_msg'] = ['msg' => $msg, 'type' => $type];
    }

    public static function flash_msg(){        
        echo '<div class="alert '. $_SESSION['flash_msg']['type'] .'">
            <p class="alert-msg">'. $_SESSION['flash_msg']['msg'] .'</p>
            <button class="alert-close">x</button>
        </div>';

        unset($_SESSION['flash_msg']);
    }

    public static function redirect()
    {
        if($_SESSION['login']['id_access'] == 1){
            Header('Location: '. BASEURL .'admin');
            exit;
        } else {
            Header('Location: '. BASEURL .'student');
            exit;
        }
    }

    public static function session_login($id_user, $id_access, $desc_access)
    {
        $_SESSION['login'] = [
            'id_user' => $id_user,
            'id_access' => $id_access,
            'desc_access' => $desc_access
        ];
    }
}