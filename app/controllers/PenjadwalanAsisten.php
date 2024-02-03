<?php

class PenjadwalanAsisten extends Controller{
    public function index(){
        $this->checkRoleAndRedirect('Admin', '/Home');
        $this->view('template/header');
        $this->view('template/sidebarAdmin');
        $this->view('PenjadwalanAsisten/index');

}
}