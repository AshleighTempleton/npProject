<?php

// Creates URL & loads core controller

class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        // prints aray from getrl
        //print_r($this->getUrl());

        $url = $this->getUrl();
        // look in controller folder for first value
        if(file_exists('../app/controller/' .ucwords($url[0]) . '.php')){
            // if exists, set as controller
            $this->currentController = ucwords($url[0]);
            //unset 0 index
            unset($url[0]);
        }
    // require controller
    require_once '../app/controller/' . $this->currentController . '.php';

    // instantiate controller class
    $this->currentController = new $this->currentController;
    //check for second part of url
    if(isset($url[1])){
        // check if method exists in controller
        if(method_exists($this->currentController, $url[1])){
            $this->currentMethod = $url[1];
            //unset 1 index
            unset($url[1]);
        }
    }
    
    // Get parameters (params)
    $this->params = $url ? array_values($url) : [];
    // call callback with array of params
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
}

    public function getUrl(){
       if(isset($_GET['url'])){
           //remove the '/'
           $url = rtrim($_GET['url'], '/');
           //sanitise url
           $url = filter_var($url, FILTER_SANITIZE_URL);
           //break into array - each element after /
           $url = explode('/', $url);
            return $url;
       }
    }
}