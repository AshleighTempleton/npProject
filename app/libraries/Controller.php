<?php

// Base controller
// loads models & views

class Controller {
    // load model
    public function model($model){
        // require model file
        require_once '../app/model/' . $model . '.php';
        
        // instantiate model
        return new $model();
    }

    // load view
    public function view($view, $data = []){
        // check view file
        if(file_exists('../app/view/' . $view . '.php')){
            require_once '../app/view/' . $view . '.php';
        }
        else {
            // view does not exist
            die('view does not exist');
        }
    }

}