<?php
// class Newsletter {
    
//     private $db;

//     public function __construct(){
//         // initialising database
//         $this->db = new Database;
//     }

//     // Register user
//     public function register($data){

//         // ADDED FOR TESTING
//         $newsletter = $_POST['newsletter'];
        
//         $this->db->query('INSERT INTO newsletter (email)
//          VALUES(:email)');  
//          // bind values 
//         $this->db->bind(':email', $newsletter);

//         // execute 
//         if($this->db->execute()){
//             return true;
//         } else {
//             return false;
//         }
//     }



//     // find user by email
//     public function findSubByEmail($email){
//         $this->db->query('SELECT * FROM newsletter WHERE email = :email');
//         // bind value
//         $this->db->bind(':email', $email);

//         // gives the data
//         $row = $this->db->single();

//         // check row
//         if($this->db->rowCount() > 0){
//             return true;
//         } else {
//             return false;
//         }


//     }

// }