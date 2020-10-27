<?php

class Users extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function register(){
        // check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data =[
                'userName' => trim($_POST['userName']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPW' => trim($_POST['confirmPW']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''

            ];

                // check if user name is empty
                if(empty($data['userName'])){
                    $data['name_err'] = 'Please enter a user name';
                }

                // check if email is empty
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter name';
                } else {
                    //check email
                    if($this->userModel->findUserByEmail($data['email'])){
                        $data['email_err'] = 'Email already in use';
                    }
                }

                // check if password is empty and have 8 characters min
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter a password';
                } elseif(strlen($data['password']) < 8){
                    $data['password_err'] = 'Password must be at least 8 chracters';
                }

                // check if password is empty and have 8 characters min
                if(empty($data['confirmPW'])){
                    $data['confirm_password_err'] = 'Please confirm password';
                } else {
                    if($data['password'] != $data['confirmPW']){
                        $data['confirm_password_err'] = 'Passwords do not match';
                    }
                }

                // ensure errors are empty
                if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                    // validated
                    die('SUCCESS');
                } else {
                    // load view with errors
                    $this->view('users/register', $data);
                }

        }
        else {
            // init data
            // keeps data there if form reset
            $data =[
                'userName' => '',
                'email' => '',
                'password' => '',
                'confirmPW' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''

            ];

            // load view
            $this->view('users/register', $data);

        }
    }

    public function login(){
        // check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data =[

                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',

            ];

                // check if email is empty
                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter your user name';
                }

                // check if password is empty 
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter your password';
                } 

            // ensure errors are empty
            if(empty($data['email_err']) && empty($data['password_err'])){
                // validated
                die('SUCCESS');
            } else {
                // load view with errors
                $this->view('users/login', $data);
            }



        }
        else {
            // init data
            // keeps data there if form reset
            $data =[
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''

            ];

            // load view
            $this->view('users/login', $data);

        }
    }
}