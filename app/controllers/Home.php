<?php

class Home extends Controller {
    public function index()
    {
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