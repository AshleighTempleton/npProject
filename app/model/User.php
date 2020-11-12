<?php
class User {
    
    private $db;

    public function __construct(){
        // initialising database
        $this->db = new Database;
    }

    // Register user
    public function register($data){
        $this->db->query('INSERT INTO users (userName, email, password)
         VALUES(:userName, :email, :password)');  
         // bind values 
        $this->db->bind(':userName', $data['userName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // execute 
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // Login user

    public function login($email, $password){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            return $row;
        } else {
            return false;
        }
    }


    // find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // bind value
        $this->db->bind(':email', $email);

        // gives the data
        $row = $this->db->single();

        // check row
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

        // get user by ID for posts
    public function getUserById($id){
        $this->db->query('SELECT * FROM users WHERE id = :id');
        // bind value
        $this->db->bind(':id', $id);

        // gives the data
        $row = $this->db->single();

        return $row;
    }


    public function pwRecovery($data){

        $token = bin2hex(random_bytes(50));
        $this->db->query('INSERT INTO pwreset (email, token)
         VALUES(:email, :token)');  
         // bind values 
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':token', $token);

        // execute 
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
        

        // send email
        // $to = $data['email'];
        // $subject = "Reset your password on newsportal.com";
        // $msg = "Hi there, click on this <a href=\"http://localhost/npProject/pages/index?token=" . $token . "\">link</a> to reset your password on our site";
        // $msg = wordwrap($msg,70);
        // $headers = "From: info@newsportal.com";
        // mail($to, $subject, $msg, $headers);
        // header('location: pending.php?email=' . $data['email']);


    }

    public function pwEmail(){

        
    }

    public function pwReset(){


    }






    public function newsletter($data){

       
        $this->db->query('INSERT INTO newsletter (email)
         VALUES(:email)');  
         // bind values 
        $this->db->bind(':email', $data['email']);

        // execute 
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }



    // find user by email
    public function findSubByEmail($email){
        $this->db->query('SELECT * FROM newsletter WHERE email = :email');
        // bind value
        $this->db->bind(':email', $email);

        // gives the data
        $row = $this->db->single();

        // check row
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

}