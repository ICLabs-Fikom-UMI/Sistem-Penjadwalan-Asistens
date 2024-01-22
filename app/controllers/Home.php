<?php

class Home extends Controller {
    public function index()
    {
        $this->view('template/index');
    }

    public function login()
    {
        if(isset($_POST['username'])&& isset($_POST['password'])){
            header('Location: ' .BASEURL. '/about');
            exit;
        }
    }
}