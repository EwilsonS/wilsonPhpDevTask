<?php
  class Quiz {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getQuizzes(){
      $this->db->query('SELECT *,
                        FROM quizes
                        ORDER BY RAND()
                        ');

        $results = $this->db->resultSet();
        return $results;
    }
    
  }