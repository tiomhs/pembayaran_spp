<?php 

class Admin extends Controller{
    public function index(){
        $data['judul'] = 'Admin';
        $this->view('templates/header',$data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }

    // CRUD Siswa
    public function siswa(){
        $data['judul'] = 'Data Siswa';
        $data['allSiswa'] = $this->model('Siswa_model')->getALlSiswa();
        $this->view('templates/header',$data);
        $this->view('admin/siswa',$data);
        $this->view('templates/footer');
    }

    public function form_tambah_siswa(){
        $data['judul'] = 'Data Siswa';
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $data['pengguna'] = $this->model('Pengguna_model')->getAllPengguna();
        $data['pembayaran'] = $this->model('Pembayaran_model')->getAllPembayaran();
        $this->view('templates/header',$data);
        $this->view('admin/form/form_tambah_siswa');
        $this->view('templates/footer');
    }

    public function delete_siswa($id){
        if ($this->model('User_model')->hapusSiswa($id)) {
            redirect("/admin/siswa");
        }
    }

    // Pengguna
    
    public function pengguna(){
        $data['judul'] = 'Data Siswa';
        $data['allPengguna'] = $this->model('User_model')->getAllPengguna();
        $this->view('templates/header',$data);
        $this->view('admin/pengguna',$data);
        $this->view('templates/footer');
    }
    public function form_tambah_pengguna(){
        $data['judul'] = 'FormData Pengguna';
        $this->view('templates/header',$data);
        $this->view('admin/form/form_tambah_pengguna',$data);
        $this->view('templates/footer');
    }

    public function add_pengguna(){
        if($this->model('User_model')->tambahPengguna($_POST) > 0){
            redirect("/admin/pengguna");
        }
    }

    public function form_edit_pengguna($id){
        $data['judul'] = 'Form Edit Pengguna';
        $data['pengguna'] = $this->model('User_model')->getPenggunaById($id);
        $this->view('templates/header',$data);
        $this->view('admin/form_edit/form_edit_pengguna',$data);
        $this->view('templates/footer');
    }

    public function edit_pengguna($id){
        if($this->model('User_model')->updatePengguna($id,$_POST)){
            redirect('/admin/pengguna');
        }
    }

    public function delete_pengguna($id){
        if($this->model('User_model')->hapusPengguna($id)){
            redirect('/admin/pengguna');
        }
    }

    // Kelas
    public function kelas(){
        $data['judul'] = 'Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $this->view('templates/header',$data);
        $this->view('admin/kelas',$data);
        $this->view('templates/footer');
    }

    public function form_tambah_kelas(){
        $data['judul'] = 'Form Tambah Kelas';
        $this->view('templates/header',$data);
        $this->view('admin/form/form_tambah_kelas');
        $this->view('templates/footer');
    }

    public function add_kelas(){
        if($this->model('Kelas_model')->tambahKelas($_POST)){
            redirect('/admin/kelas');
        }
    }

    public function form_edit_kelas($id){
        $data['judul'] = 'Form Edit Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getKelasById($id);
        $this->view('templates/header',$data);
        $this->view('admin/form_edit/form_edit_kelas',$data);
        $this->view('templates/footer');
    }

    public function update_kelas($id){
        if($this->model("Kelas_model")->updateKelas($id,$_POST)){
            redirect('/admin/kelas');
        }
    }

    public function delete_kelas($id){
        if ($this->model('Kelas_model')->hapusKelas($id)) {
            redirect("/admin/kelas");
        }
    }
}