<?php

class HomeAdmin extends Controller{
    public function index(){
        if(!isset($_SESSION['username']))
            header("location:" .BASEURL. "/login" );

             $this->view('template/header');
            $this->view('template/sidebarAdmin');
            $this->view('HomeAdmin/index');
           
            
}
}