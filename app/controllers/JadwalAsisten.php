<?php

class JadwalAsisten extends Controller {
    public function index(){
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );
        $this->checkRoleAndRedirect('Asisten', '/HomeAdmin');
        $this->view('template/header');
        $this->view('jadwalAsisten/index');
        $this->view('template/footer');
        
       
    }
}