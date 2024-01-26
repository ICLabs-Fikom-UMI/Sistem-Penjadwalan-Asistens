<?php

class Home extends Controller {
    public function index()
    {
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );

        $this->view('template/header');
        $this->view('home/index');
        $this->view('template/footer');
    }

    public function login()
    {
        if(isset($_POST['Nim'])&& isset($_POST['password'])){
            header('Location: ' .BASEURL. '/about');
            exit;
        }
    }
}