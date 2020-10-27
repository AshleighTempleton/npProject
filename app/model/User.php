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

}