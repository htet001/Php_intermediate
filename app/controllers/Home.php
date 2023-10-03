<?php

class Home extends Controller
{
    private $postModel;
    private $catModel;
    private $userModel;


    public function __construct()
    {
        $this->postModel = $this->model("PostModel");
        $this->catModel = $this->model("CategoryModel");
        $this->userModel = $this->model("UserModel");
    }
    public function index($params = [])
    {
        $data = [
            'cats' => '',
            'posts' => ''
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        $data['posts'] = $this->postModel->getPostByCatId($params[0]);
        $this->view("home/index", $data);
    }
    public function user($params = [])
    {
        $post = $this->postModel->getPostById($params[0]);
        $this->view('home/user', ['post' => $post]);
    }
}
