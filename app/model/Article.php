<?php
// use in file called Posts!!! 
    class Post {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // REPLACE posts WITH TABLE NAME
        public function getPosts(){
            $this->db->query("SELECT * FROM posts");

            $results = $this->db->resultSet();
            return $results;

        }



    }