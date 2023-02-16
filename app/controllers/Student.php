<?php 

class Student extends Controller{
    public function index(){
        $data['judul'] = 'Student';
        $data['history'] = $this->model('Transaksi_model')->getAllHistoryById($_SESSION['id']);
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}