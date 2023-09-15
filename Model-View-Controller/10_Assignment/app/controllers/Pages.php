<?php

class Pages extends Controller{

    private $userModel;

    public function __construct(){
        $this->userModel = $this->model('User');
      }
      
      public function index(){
       
        $this->view('pages/index');
      }
  
      public function posts(){
        $posts = $this->userModel->getPosts();
        
        $data = [
          'title' => 'Welcome',
          'posts' => $posts
        ];
       
  
        $this->view('pages/posts', $data);
      }
}

?>