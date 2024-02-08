<?php

class PenjadwalanAsisten extends Controller{
    public function index(){
        $this->checkRoleAndRedirect('Admin', '/Home');
        $data['dataAsisten']=$this->model('profil_model')->getAllAsisten();
        $data['namaMatkul']=$this->model('matkul_model')->getAllmatkul();
        $data['namalab']=$this->model('laboratorium_model')->getAllLaboratorium();
        $data['kelasfrek']=$this->model('kelas_model')->getAllfrek();
        $data['frekuensi']=$this->model('Penjadwalan_model')->getfrekuensi();
        $this->view('template/headerAdmin');
        $this->view('template/sidebarAdmin');
        $this->view('PenjadwalanAsisten/index', $data);
        $this->view('template/footersidebar');

}
public function tambahJadwal() {
    $tambahData = $this->model('Penjadwalan_model')->insertPenjadwalan($_POST);
  
    if ($tambahData > 0) {
        header('Location: ' .BASEURL. '/PenjadwalanAsisten');
    }
    else {
        header('Location: ' .BASEURL. '/PenjadwalanAsisten');
    }
}
public function hapusJadwal($idfrek) {
    $hapusData = $this->model('Penjadwalan_model')->hapusPenjadwalan($idfrek);
  
    if ($hapusData > 0) {
        header('Location: ' .BASEURL. '/PenjadwalanAsisten');
    }
    else {
        header('Location: ' .BASEURL. '/PenjadwalanAsisten');
    }
}
}