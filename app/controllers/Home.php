<?php 

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Student';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaByIdSession($_SESSION['id']);
        $data['history'] = $this->model('Transaksi_model')->getHistoryById($data['siswa']['id_siswa']);
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}