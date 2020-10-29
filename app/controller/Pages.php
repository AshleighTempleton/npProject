<?php

class Pages extends Controller{
    public function __construct(){
        // echo 'pages loaded';
       
    }

    public function index(){
        
        
        $data = [
            'title' => 'welcome'
            
            ];
        
        $this->view('pages/index', $data);
        
    }

    public function about(){
        $data = ['title' => 'About us'];
        $this->view('pages/about', $data);
        
    }


    public function test(){
        $data = ['title' => 'test'];
        $this->view('pages/test', $data);
        
    }

    // add more methods for each page
    // pay attention to the file path
}