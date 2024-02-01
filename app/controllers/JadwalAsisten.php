<?php

class JadwalAsisten extends Controller {
    public function index(){
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );
    
        $this->view('template/header');
        $this->view('jadwalAsisten/index');
    }
}