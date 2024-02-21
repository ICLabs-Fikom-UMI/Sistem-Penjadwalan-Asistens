<?php

class HomeAdmin extends Controller{
    public function index(){
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );
            $this->checkRoleAndRedirect('Admin', '/Home');
            $this->view('template/headerAdmin');
            $this->view('template/sidebarAdmin');
            $this->view('HomeAdmin/index');
           
    }
    
}
