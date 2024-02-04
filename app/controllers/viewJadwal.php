<?php

class viewJadwal extends Controller {
    public function index(){
        $data['form']=$this->model('form_model')->getAsisten();
        $this->checkRoleAndRedirect('Admin', '/Home');
        $this->view('template/headerAdmin');
        $this->view('template/sidebarAdmin');
        $this->view('viewJadwal/index', $data);
        $this->view('template/footersidebar');

}
}