<?php

class User extends Controller
{
    public function __construct()
    {
    }
    public function register()
    {
        $data = [
            "name" => '',
            "email" => '',
            "password" => '',
            "confirm_password" => '',
            "name_err" => 'Please enter your name!!',
            "email_err" => 'Please enter your email!!',
            "password_err" => 'Please enter your password!!',
            "confirm_password_err" => 'Confirm your password!!',
        ];
        $this->view("user/register", $data);
    }
    public function Login()
    {

        $data = [
            "email" => '',
            "password" => '',
            "email_err" => 'Please enter your email!!',
            "password_err" => 'Please enter your password!!',
        ];
        $this->view("user/login", $data);
    }
}