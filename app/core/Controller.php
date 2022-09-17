<?php

class Controller {

    public function view($view, $data = []){
        require '../app/views/'. $view .'.php';
        return $view;
    }

    public function model($model, $data = []){
        require_once '../app/models/'. $model .'.php';
        return new $model;
    }
}