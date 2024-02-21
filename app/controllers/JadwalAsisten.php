<?php

class JadwalAsisten extends Controller {
    public function index(){
        if(!isset($_SESSION['username']))
        header("location:" .BASEURL. "/login" );
        $data['frekuensi']=$this->model('Penjadwalan_model')->getfrekuensi();

        $this->checkRoleAndRedirect('Asisten', '/HomeAdmin');
        $this->view('template/header');
        $this->view('jadwalAsisten/index',$data);
        $this->view('template/footer');
        
       
    }
}