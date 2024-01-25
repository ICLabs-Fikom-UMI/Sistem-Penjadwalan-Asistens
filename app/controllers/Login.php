<?php
class login extends Controller {
    public function index() {
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
                foreach($user['login'] as $row ):
                    header("location:" .BASEURL );
                endforeach; 
               
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
}