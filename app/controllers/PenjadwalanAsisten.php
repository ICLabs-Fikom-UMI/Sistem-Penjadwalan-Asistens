<?php

class PenjadwalanAsisten extends Controller{
    public function index(){

        $this->view('template/header');
        $this->view('template/sidebarAdmin');
        $this->view('PenjadwalanAsisten/index');

}
}