<?php

class Pages extends Controller{
    public function __construct(){
        // echo 'pages loaded';
       
    }

    public function index(){
        // add session condition & redirect
        // if(isset($_SESSION['user_id']))
        // else redirect to login

        if(!isLoggedIn()){
            redirect('users/login');
        }
        
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

    // public function newsletter(){
    //     $data = ['title' => 'newsletter'];
    //     $this->view('newsletters/newsletter', $data);
        
    // }

    // add more methods for each page
    // pay attention to the file path
}