<?php

class DataAsisten extends Controller{
    public function index(){
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );
            $data['asisten']=$this->model('profil_model')->getAllAsisten();
            $this->checkRoleAndRedirect('Admin', '/Home');
            $this->view('template/headerAdmin');
            $this->view('template/sidebarAdmin');
            $this->view('DataAsisten/index', $data);
            $this->view('template/footersidebar');
           
}


}