<?php

class Post {
	private $db;

	public function __construct(){
		$this->db = new Database;

	}

	public function getPosts(){
		$this->db->query('SELECT *,
											posts.id as postId,
											users.id as userId,
											posts.created as postCreated,
											users.joined as userCreated
											FROM posts
											INNER JOIN users
											ON posts.userID = users.id
											ORDER BY posts.created DESC
											');

		$results = $this->db->resultSet();

		return $results;
	}
	public function addPost($data){
		$this->db->query('INSERT INTO posts (userID, title, body)
		VALUES(:userID, :title, :body)');  
		// bind values 
	 $this->db->bind(':userID', $data['user_id']);
	 // userID may need to be user_id for data - from session
	 $this->db->bind(':title', $data['title']);
	 $this->db->bind(':body', $data['body']);

	 // execute 
	 if($this->db->execute()){
			 return true;
	 } else {
			 return false;
	 }
	}

	public function updatePost($data){
		$this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');  
		// bind values 
	 $this->db->bind(':id', $data['id']);
	 // userID may need to be user_id for data - from session
	 $this->db->bind(':title', $data['title']);
	 $this->db->bind(':body', $data['body']);

	 // execute 
	 if($this->db->execute()){
			 return true;
	 } else {
			 return false;
	 }
	}

	public function getPostById($id){
		$this->db->query('SELECT * FROM posts WHERE id = :id');
		$this->db->bind(':id', $id);

		$row = $this->db->single();
		return $row;

	}

	public function deletePost($id) {

		$this->db->query('DELETE FROM posts WHERE id = :id');  
		// bind values 
	 $this->db->bind(':id', $id);

	 // execute 
	 if($this->db->execute()){
			 return true;
	 } else {
			 return false;
	 }

	}

}