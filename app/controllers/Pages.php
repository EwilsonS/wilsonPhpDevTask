<?php
    class Pages extends Controller {
        public function __construct(){

        }

        public function index(){
            if(isLoggedIn()){
                redirect('posts');
            }
            $data = [
                'title' => 'Evan\'s Quizzz App',
                'description' => 'Enter Your Name and Choose a Topic'
            ];

            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About Us',
                'description' => 'App to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }