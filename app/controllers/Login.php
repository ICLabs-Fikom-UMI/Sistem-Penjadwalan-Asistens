<?php

// session_start();
class login extends Controller {
    public function index() {
        $this->view('template/header');
        // var_dump($_SESSION);
        
        if (isset($_SESSION['username']))
            header("location:" . BASEURL );

        $this->view('template/header');
        $this->view('login/index');
        
    }
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validasi login
            $user['login'] = $this->model('Log_model')->findByUsername($username, $password);
            
            if($user['login']==NULL){
                header("location:" .BASEURL. "/login" );
            }else{
                $_SESSION['username'] = $username;
                $data= $this->model('Log_model')->getdatabyusername($username);

                $_SESSION['id']= $data['id'];

                $_SESSION['rol'] = $data['rol'];

                header("location:" .BASEURL );
               
            }

            // if ($user && password_verify($password, $user['password'])) {
            //     // Login berhasil
            //     echo "Login berhasil!";
            // } else {
            //     // Login gagal
            //     echo "Login gagal. Periksa kembali username dan password.";
            // }
        } 
        
        
    }

    public function logout() {
        session_start();
        session_destroy();
        header("location:" .BASEURL. "/login" );
        exit;
    }
}