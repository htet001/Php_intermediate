<?php

class User extends Controller
{
    private $postModel;
    private $catModel;
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
        $this->catModel = $this->model('CategoryModel');
        $this->postModel = $this->model('PostModel');
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $data = [
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "password" => $_POST['password'],
                "confirm_password" => $_POST['confirm_password'],
                "name_err" => '',
                "email_err" => '',
                "password_err" => '',
                "confirm_password_err" => '',
            ];

            if (empty($data['name'])) {
                $data['name_err'] = "Please enter your user name";
            }
            if (empty($data['email'])) {
                $data['email_err'] = "Please enter your email";
            } else {
                if ($this->userModel->getUserByEmail($data['email'])) {
                    $data['email_err'] = "Email is already taken!!";
                }
            }
            if (empty($data['password'])) {
                $data['password_err'] = "Please enter your password";
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = "Confirm enter your password";
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = "Your confirm password must be same above password";
                }
            }
            if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                if ($this->userModel->register($data['name'], $data['email'], $data['password'])) {
                    flash('register_success', "Register Success, Please login!!");
                    $this->view("user/login");
                } else {
                    $this->view("user/register");
                }
            } else {
                $this->view("user/register", $data);
            }
        } else {
            $this->view("user/register");
        }
    }


    public function Login()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $data = [
                "email" => $_POST['email'],
                "password" => $_POST['password'],
                "email_err" => '',
                "password_err" => '',
            ];


            if (empty($data['email'])) {
                $data['email_err'] = "Please enter your email";
            }
            if (empty($data['password'])) {
                $data['password_err'] = "Please enter your password";
            }

            if (empty($data['email_err']) && empty($data['password_err'])) {
                $rowUser = $this->userModel->getUserByEmail($data['email']);
                if ($rowUser) {
                    $hash_pass = $rowUser->password;
                    if (password_verify($data['password'], $hash_pass)) {
                        setUserSession($rowUser);
                        if ($_POST['email'] === "htetshinelinn14@gmail.com") {
                            redirect(URLROOT . 'admin/home');
                        } else {
                            redirect(URLROOT . 'user/member/1');
                        }
                    } else {
                        flash("login_fail", "User Creditial Error");
                        $this->view('user/login');
                    }
                } else {
                    $data['email_err'] = "Email Error";
                }
            } else {
                $this->view("user/login", $data);
            }
        } else {
            $this->view("user/login");
        }
    }

    public function logout()
    {
        unsetUserSession();
        redirect(URLROOT . "home/index/1");
    }


    public function member($params = [])
    {
        $data = [
            'cats' => '',
            'posts' => ''
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        $data['posts'] = $this->postModel->getPostByCatId($params[0]);
        $this->view("user/member", $data);
    }
    public function md($params = [])
    {
        $post = $this->postModel->getPostById($params[0]);
        $this->view('user/md', ['post' => $post]);
    }


    public function mc()
    {
        $data = [
            'title' => '',
            'desc' => '',
            'file' => '',
            'content' => '',
            'title_err' => '',
            'desc_err' => '',
            'file_err' => '',
            'content_err' => '',
            'cats' => ''
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $root = dirname(dirname(dirname(__FILE__)));
            $files = $_FILES['file'];

            $data['title'] = $_POST['title'];
            $data['desc'] = $_POST['desc'];
            $data['content'] = $_POST['content'];

            if (empty($data['title'])) {
                $data['title_err'] = "Please enter title";
            }
            if (empty($data['desc'])) {
                $data['desc_err'] = "Please enter description";
            }
            if (empty($data['content'])) {
                $data['content_err'] = "Please enter content";
            }



            if (empty($data['title_err']) && empty($data['desc_err']) && empty($data['content_err'])) {
                if (!empty($files)) {
                    move_uploaded_file($files['tmp_name'], $root . '/public/assets/uploads/' . $files['name']);
                    if ($this->postModel->insertPost($_POST['cat_id'], $data['title'], $data['desc'], $files['name'], $data['content'])) {
                        flash("pis", "Post Insert Successfully");
                        redirect(URLROOT . "user/member/1");
                    } else {
                        $this->view("user/mc", $data);
                    }
                } else {
                    flash("fine", "Please Insert A File");
                    $this->view(URLROOT . "user/mc", $data);
                }
            } else {
                $this->view("user/mc", $data);
            }
        } else {
            $this->view("user/mc", $data);
        }
    }
}
