<!-- <?php

// class Newsletters extends Controller{
//     public function __construct(){
//         $this->newsModel = $this->model('Newsletter');
//     }

//     public function newsletter(){
//         // check for POST
//         if($_SERVER['REQUEST_METHOD'] == 'POST'){
//             // process form

//             // Sanitize POST data
//             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//             // ADDED FOR TESTING
//             $newsletter = $_POST['newsletter'];



//             $data =[
                
//                 'newsletter' => trim($newsletter),      
//                 'email_err' => ''
//             ];


//                 // check if email is empty
//                 if(empty($newsletter)){
//                     $data['email_err'] = 'Please enter email';
//                 } else {
//                     //check email
//                     if($this->newsModel->findSubByEmail($newsletter)){
//                         $data['email_err'] = 'Email already in use';
//                     }
//                 }

//                 // ensure errors are empty
//                 if(empty($data['email_err'])){
//                     // validated

//                     // Hash password
//                 // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

//                 // register user
//                 if($this->newsModel->newsletter($data)){
//                     // flash('register_success', 'You have been registered');
//                     redirect('newsletters/newsletter');
//                 } else {
//                     die('Something went wrong :(');
//                 }
                    
//                 } else {
//                     // load view with errors
//                     $this->view('newsletters/newsletter', $data);
//                 }

//         }
//         else {
//             // init data
//             // keeps data there if form reset
//             $data =[

//                 'newsletter' => '',

//                 'email_err' => '',

//             ];

//             // load view
//             $this->view('newsletters/newsletter', $data);

//         }
//     }
// }
