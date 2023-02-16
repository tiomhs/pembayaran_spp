<?php 

class Siswa_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSiswaByIdSession($id){
        $query = "SELECT siswa.id AS id_siswa, siswa.nama AS nama_siswa FROM `pengguna` INNER JOIN siswa ON pengguna.id = siswa.pengguna_id WHERE pengguna.id =:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->singleSet();
    }
}