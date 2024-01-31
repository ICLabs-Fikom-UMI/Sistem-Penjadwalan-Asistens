<?php

// session_start();

class profil extends Controller {
    public function index() 
    {
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );

            $this->view('template/header');
            $this->view('profil/index');
            $this->view('template/footer');
    }
       
    public function login()
    {
        if(isset($_POST['username'])&& isset($_POST['password'])){
            header('Location: ' .BASEURL. '/about');
            exit;
        }
    }
}