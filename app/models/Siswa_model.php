<?php 

class Siswa_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa(){
        $query = "SELECT siswa.id, siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.telepon, kelas.kompetensi_keahlian from siswa INNER JOIN kelas ON siswa.kelas_id = kelas.id";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
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
}