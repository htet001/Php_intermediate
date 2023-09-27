<?php

class Category extends Controller
{
    private $catModel;
    public function __construct()
    {
        $this->catModel = $this->model('CategoryModel');
    }
    public function create($data = [])
    {
        $data = [
            "name" => "",
            "name_err" => "",
            "cats" => $this->catModel->getAllCategory()
        ];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $data['name'] = $_POST['name'];

            if (empty($data['name'])) {
                $data['name_err'] = "Please enter category name!";
                $this->view('admin/category/home', $data);
            } else {
                if ($this->catModel->getCategoryByName($data['name'])) {
                    $data['name_err'] = "Category name is already in use";
                    $this->view('admin/category/home', $data);
                } else {
                    if ($this->catModel->insertNewCategory($data['name'])) {
                        flash("cat_create_success", "Category Created Successfully");
                        $data['cats'] = $this->catModel->getAllCategory();
                        $this->view('admin/category/home', $data);
                    } else {
                        flash("cat_create_fail", "Category Creation Fail");
                        $this->view('admin/category/home', $data);
                    }
                }
            }
        } else {
            $this->view('admin/category/home', $data);
        }
    }

    public function edit($data = [])
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
        } else {
            setCurrentId($data[0]);
            $this->view("admin/category/edit");
        }
    }
}
