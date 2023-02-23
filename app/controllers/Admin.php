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
        $data['pengguna'] = $this->model('User_model')->getPenggunaByRole('2');
        $data['pembayaran'] = $this->model('Pembayaran_model')->getAllPembayaran();
        $this->view('templates/header',$data);
        $this->view('admin/form/form_tambah_siswa',$data);
        $this->view('templates/footer');
    }

    public function add_siswa(){
        if($this->model('Siswa_model')->tambahSiswa($_POST) > 0){
            redirect("/admin/siswa");
        }else {
            echo "<script>alert('Terjadi Kesalahan!!!');</script>";
        }
    }

    public function form_edit_siswa($id){
        $data['judul'] = 'Form Edit Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $data['pengguna'] = $this->model('User_model')->getPenggunaByRole('2');
        $data['pembayaran'] = $this->model('Pembayaran_model')->getAllPembayaran();
        $this->view('templates/header',$data);
        $this->view('admin/form_edit/form_edit_siswa',$data);
        $this->view('templates/footer');
    }
    

    public function update_siswa($id){
        if ($this->model('Siswa_model')->updateSiswa($id,$_POST)) {
            redirect("/admin/siswa");
        }else {
            echo "<script>alert('Terjadi Kesalahan!!!');</script>";
        }
    }
    public function delete_siswa($id){
        if ($this->model('Siswa_model')->hapusSiswa($id)) {
            redirect("/admin/siswa");
        }else {
            echo "<script>alert('Terjadi Kesalahan!!!');</script>";
        }
    }

    // Pengguna
    
    public function pengguna(){
        $data['judul'] = 'Data Pengguna';
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

    // Pembayaran
    public function pembayaran(){
        $data['judul'] = 'Pembayaran';
        $data['pembayaran'] = $this->model('Pembayaran_model')->getAllPembayaran();
        $this->view('templates/header',$data);
        $this->view('admin/pembayaran',$data);
        $this->view('templates/footer');
    }

    public function form_tambah_pembayaran(){
        $data['judul'] = 'Form Tambah';
        $this->view('templates/header',$data);
        $this->view('admin/form/form_tambah_pembayaran');
        $this->view('templates/footer');
    }
    public function form_edit_pembayaran($id){
        $data['judul'] = 'Form Edit';
        $data['pembayaran'] = $this->model('Pembayaran_model')->getPembayaranById($id);
        $this->view('templates/header',$data);
        $this->view('admin/form_edit/form_edit_pembayaran',$data);
        $this->view('templates/footer');
    }

    public function add_pembayaran(){
        if($this->model('Pembayaran_model')->tambahPembayaran($_POST)){
            redirect("/admin/pembayaran");
        }
    }

    public function update_pembayaran($id){
        if($this->model('Pembayaran_model')->updatePembayaran($id,$_POST)){
            redirect("/admin/pembayaran");
        }
    }

    public function delete_pembayaran($id){
        if ($this->model('Pembayaran_model')->hapusPembayaran($id)) {
            redirect("/admin/pembayaran");
        }
    }

    // CRUD Petugas
    public function petugas(){
        $data['judul'] = 'Petugas';
        $data['allPetugas'] = $this->model('Petugas_model')->getAllPetugas();
        $this->view('templates/header',$data);
        $this->view('admin/petugas',$data);
        $this->view('templates/footer');
    }
    public function form_tambah_petugas(){
        $data['judul'] = 'Petugas';
        $data['pengguna'] = $this->model('User_model')->getPenggunaByRole('1');
        $this->view('templates/header',$data);
        $this->view('admin/form/form_tambah_petugas',$data);
        $this->view('templates/footer');
    }

    public function form_edit_petugas($id){
        $data['judul'] = 'Form Edit';
        $data['petugas'] = $this->model('Petugas_model')->getPetugasById($id);
        $data['pengguna'] = $this->model('User_model')->getPenggunaByRole('1');
        $this->view('templates/header',$data);
        $this->view('admin/form_edit/form_edit_petugas',$data);
        $this->view('templates/footer');
    }

    public function add_petugas(){
        if($this->model('Petugas_model')->tambahPetugas($_POST)){
            redirect("/admin/petugas");
        }
    }

    public function update_petugas($id){
        if($this->model('Petugas_model')->updatePetugas($id,$_POST)){
            redirect("/admin/petugas");
        }
    }
    public function delete_petugas($id){
        if($this->model('Petugas_model')->hapusPetugas($id)){
            redirect("/admin/petugas");
        }
    }

    // transaksi
    public function transaksi(){
        $data['judul'] = 'Transaksi';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header',$data);
        $this->view('admin/transaksi',$data);
        $this->view('templates/footer');
    }

    public function bayar($id){
        $data['judul'] = 'Transaksi';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $data['history'] = $this->model('Transaksi_model')->getTransaksiById($id);
        $data['bulan'] = [
            '7', '8', '9', '10', '11', '12', '1', '2', '3', '4', '5', '6'
        ];
        $bulan_dibayar = [];
        foreach($data['history'] as $history){
            array_push($bulan_dibayar, $history['bulan_dibayar']);
        }
        // var_dump( $_SESSION['id']);die;
        $data['petugas'] = $this->model('Petugas_model')->getPetugasBySession($_SESSION['id']);
        
        $data['bulan_dibayar'] = $bulan_dibayar;

        $this->view('templates/header',$data);
        $this->view('admin/bayar',$data);
        $this->view('templates/footer');
    }

    public function add_transaksi(){
            $transaksi = $this->model('Transaksi_model')->tambahTransaksi($_POST);
            if($transaksi){
                redirect('/admin/transaksi');
            }else{
                echo "gagal";
            }
    }

    // public function transaksi_detail($id){
    //     $data['judul'] = 'Transaksi';
    //     $data['TransaksiId'] = $this->model('Transaksi_model')->getTransaksiById($id);
    //     $this->view('templates/header',$data);
    //     $this->view('admin/transaksi_detail',$data);
    //     $this->view('templates/footer');
    // }
    // public function form_tambah_transaksi(){
    //     $data['judul'] = 'Transaksi';
    //     $nisn = $_POST['nisn'];
    //     $data['siswa'] = $this->model('Siswa_model')->getSiswaByNisn($nisn);
    //     $id = $data['siswa']['id'];
    //     $data['transaksi'] = $this->model('Transaksi_model')->getTransaksiId($id);
    //     // var_dump($data['id']);die;
    //     $this->view('templates/header',$data);
    //     $this->view('admin/form/form_tambah_transaksi',$data);
    //     $this->view('templates/footer');
    // }
    // public function find_siswa(){
    //     // var_dump($_POST)['nisn'];
    //     $this->view('templates/header',$data);
    //     $this->view('admin/form/form_cari_data',$data);
    //     $this->view('templates/footer');
    // }
    // public function finding(){
    //     var_dump($_POST);
    //     $data['judul'] = 'Transaksi';
    //     $this->view('templates/header',$data);
    //     $this->view('admin/form/form_cari_data',$data);
    //     $this->view('templates/footer');
    // }

}