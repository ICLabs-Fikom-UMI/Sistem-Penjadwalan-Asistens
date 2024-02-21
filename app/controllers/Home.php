<?php

class Home extends Controller {
    public function index()
    {
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );
        $this->checkRoleAndRedirect('Asisten', '/HomeAdmin');
        $this->view('template/header');
        $this->view('home/index');
        $this->view('template/footer');

    }

    public function insertDataForm(){
        $this->model('form_model')->insertform($_POST);
        $this->index();
    }

    public function login()
    {
        if(isset($_POST['username'])&& isset($_POST['password'])){
            header('Location: ' .BASEURL. '/about');
            exit;
        }
    }

    public function tambahjadwal(){
        $tambahData = $this->model('form_model')->inserttambahjadwal($_POST);
        var_dump($tambahData);
        if ($tambahData > 0) {
            header('Location: ' .BASEURL. '/home');
        }
        else {
            header('Location: ' .BASEURL. '/home');
        }
    }
}