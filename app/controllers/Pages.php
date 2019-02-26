<?php
  class Pages extends Controller {
    public function __construct(){
    }

    public function index(){
      $data = [
        'title' => 'Evan\'s Quizzz App',
        'description' => 'Enter Your Name and Choose a Topic'
      ];
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About This App',
        'description' => 'App to share posts with other users'
      ];
      $this->view('pages/about', $data);
    }
  }