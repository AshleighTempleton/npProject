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

                    // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // register user
                if($this->userModel->register($data)){
                    flash('register_success', 'You have been registered');
                    redirect('users/login');
                } else {
                    die('Something went wrong :(');
                }
                    
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


            // check user exists
            if($this->userModel->findUserByEmail($data['email'])){
                //user found
            } else {
                $data['email_err'] = 'No user found';
            }


            // ensure errors are empty
            if(empty($data['email_err']) && empty($data['password_err'])){
                // validated
                // check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                
                if($loggedInUser){
                    // create session
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('users/login', $data);
                }

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

    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_userName'] = $user->userName;
        redirect('pages/index');

    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_userName']);
        session_destroy();
        redirect('users/login');

    }



    public function pwRecovery(){

                // check for POST
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // process form
        
                    // Sanitize POST data
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        
                    $data =[             
                        'email' => trim($_POST['email']),      
                        'email_err' => ''
                    ];
        
        
                        // check if email is empty
                        if(empty($data['email'])){ 
                            $data['email_err'] = 'Please enter email';
                        } else {
                            //check email
                            if(!$this->userModel->findUserByEmail($data['email'])){
                                
                                $data['email_err'] = 'No email found';
                            }
                        }

                        // ensure errors are empty
                if(empty($data['email_err'])){
                    // validated

                // Enter email in db and send recovery email
                if($this->userModel->pwRecovery($data)){
                    // code to send email
                    // flash('register_success', 'You have been registered');
                    redirect('users/login');
                } else {
                    die('Something went wrong :(');
                }
                    
                } else {
                    // load view with errors
                    $this->view('users/pwRecovery', $data);
                }

        $this->view('users/pwRecovery', $data);
            }
            else {
                // init data
                // keeps data there if form reset
                $data =[
    
                    'email' => '',
    
                    'email_err' => '',
    
                ];
    
    
            $this->view('users/pwRecovery', $data);
            }
}


    public function pwReset($data){



        $this->view('users/pwReset', $data);
    }




    public function newsletter(){

        // check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // ADDED FOR TESTING
            // $newsletter = $_POST['newsletter'];



            $data =[
                
                'email' => trim($_POST['email']),      
                'email_err' => ''
            ];


                // check if email is empty
                if(empty($data['email'])){ 
                    $data['email_err'] = 'Please enter email';
                } else {
                    //check email
                    if($this->userModel->findSubByEmail($data['email'])){
                        $data['email_err'] = 'Email already in use';
                    }
                }

                // ensure errors are empty
                if(empty($data['email_err'])){
                    // validated

                // register subscriber
                if($this->userModel->newsletter($data)){
                    // flash('register_success', 'You have been registered');
                    redirect('users/newsletter');
                } else {
                    die('Something went wrong :(');
                }
                    
                } else {
                    // load view with errors
                    $this->view('users/newsletter', $data);
                }

        }
        else {
            // init data
            // keeps data there if form reset
            $data =[

                'email' => '',

                'email_err' => '',

            ];


        $this->view('users/newsletter', $data);
    }

}

function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
        return true;
    } else {
        return false;
    }
}

public function request(){
    // Check if logged in
    if($this->isLoggedIn()){
     redirect('/posts');
    }
 
    // Check if POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // Sanitize POST
     $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
     $data = [       
       'email' => trim($_POST['email']),
       'email_err' => ''
             
     ];
 
     // Check for email
       if(empty($data['email'])){
         $data['email_err'] = 'Please enter email.';
       }
 
           // Check for user
           if($this->userModel->findUserRequest($data['email'])){
             // User Found
           } else {
             // No User
             $data['email_err'] = 'This email is not registered.';
             
           }
 
     // Make sure errors are empty
     if(empty($data['email_err'])){
 
       // Check and set logged in user
       
       if($this->userModel->request($data)){
        // redirect('users/resetpass');
       
          $send = new Email();
                 $send->sendMail($data['email']);
         $this->view('users/login', $data);
       
       }
       else {
         die('something went wrong');
       }
       // $this->userModel->request($data['email']);
      
      // $this->view('users/request', $data);
     } else {
       // If NOT a POST
 
       $this->view('users/request', $data);
        }
       }
       else {
         // init data
         // keeps data there if form reset
         $data =[
 
             'email' => '',
 
             'email_err' => '',
 
         ];
 
 
     $this->view('users/request', $data);
 }
 
 
   }
 
   public function resetpass(){
     // Check if logged in
     if($this->isLoggedIn()){
      redirect('/posts');
     }
  
     // Check if POST
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
      $data = [       
           'email' => trim($_POST['email']),
           'password' => trim($_POST['password']),
           'confirm_password' => trim($_POST['confirm_password']),
           
           'email_err' => '',
           'password_err' => '',
           'confirm_password_err' => ''   
     ];
  
      // Check for email
        if(empty($data['email'])){
          $data['email_err'] = 'Please enter email.';
        }
  
            // Check for user
            if($this->userModel->findUserReset($data['email'])){
              // User Found
            } else {
              // No User
              $data['email_err'] = 'This email is not registered.';
              
            }
       
            // Validate password
         if(empty($data['password'])){
           $password_err = 'Please enter a password.';     
         } elseif(strlen($data['password']) < 8){
           $data['password_err'] = 'Password must have atleast 8 characters.';
         }
 
         // Validate confirm password
         if(empty($data['confirm_password'])){
           $data['confirm_password_err'] = 'Please confirm password.';     
         } else{
             if($data['password'] != $data['confirm_password']){
                 $data['confirm_password_err'] = 'Password do not match.';
             }
         }
 
 
 
 
       // Make sure errors are empty
       if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
         // SUCCESS - Proceed to insert
 
         // Hash Password
         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
         //Execute
         if($this->userModel->resetpass($data)){
           redirect('users/login');
         }
         else {
           die('something went wrong');
         }
         // $this->userModel->request($data['email']);
         
         // $this->view('users/request', $data);
       } else {
         // If NOT a POST
   
         $this->view('users/resetpass', $data);
           }
         }
         else {
           // init data
           // keeps data there if form reset
           $data =[
   
               'email' => '',
   
               'email_err' => '',
               'password' => '',
 
               'confirm_password' => '',
   
           ];
   
   
       $this->view('users/resetpass', $data);
   }
   
   
     }


}