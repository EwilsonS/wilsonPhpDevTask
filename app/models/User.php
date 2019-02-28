<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Register user
    public function register($data){
      $this->db->query('INSERT INTO users (name) VALUES(:name)');
      // Bind values
      $this->db->bind(':name', $data['name']);

      // Execute
      if($this->db->execute()){
          return true;
      }else{
          return false;
      }
    }

      // get user by id
    public function getUserById($id){
      $this->db->query('SELECT * FROM users WHERE id = :id');
      // Bind value
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
      
    }
}