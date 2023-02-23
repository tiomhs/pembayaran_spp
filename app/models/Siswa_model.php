<?php 

class Siswa_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa(){
        $query = "SELECT siswa.id, siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.telepon, kelas.kompetensi_keahlian, pembayaran.tahun_ajaran, pembayaran.nominal from siswa INNER JOIN kelas ON siswa.kelas_id = kelas.id INNER JOIN pembayaran ON siswa.pembayaran_id = pembayaran.id";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getSiswaById($id){
        $query = "SELECT * FROM siswa WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->singleSet();
    }
    public function getSiswaByNisn($nisn){
        $query = "SELECT siswa.id, siswa.nisn, siswa.nis, siswa.nama, siswa.telepon, kelas.id AS id_kelas, kelas.kompetensi_keahlian, pembayaran.nominal, pembayaran.id AS id_pembayaran FROM siswa INNER JOIN kelas ON kelas_id = kelas.id INNER JOIN pembayaran ON pembayaran_id = pembayaran.id WHERE nisn=:nisn";
        $this->db->query($query);
        $this->db->bind('nisn',$nisn);
        return $this->db->singleSet();
    }

    public function getSiswaByIdSession($id){
        $query = "SELECT siswa.id AS id_siswa, siswa.nama AS nama_siswa FROM `pengguna` INNER JOIN siswa ON pengguna.id = siswa.pengguna_id WHERE pengguna.id =:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->singleSet();
    }
    

    public function hapusSiswa($id){
        $query = "DELETE FROM siswa WHERE id=:id ";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahSiswa($data){
        $query = "INSERT INTO siswa VALUES(null,:nisn,:nis,:nama, :alamat, :telepon, :kelas_id, :pengguna_id, :pembayaran_id )";
        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function updateSiswa($id,$data){
        $query = "UPDATE siswa SET id=:id, nisn=:nisn,nis=:nis,nama=:nama,alamat=:alamat, telepon=:telepon, kelas_id=:kelas_id, pengguna_id=:pengguna_id, pembayaran_id=:pembayaran_id WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('kelas_id', $data['kelas_id']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->bind('pembayaran_id', $data['pembayaran_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}