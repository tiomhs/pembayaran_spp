<?php 

class Petugas_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPetugas(){
        $query = "SELECT petugas.id, petugas.nama, pengguna.username, pengguna.role FROM `petugas` INNER JOIN pengguna ON pengguna.id = petugas.pengguna_id";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getPetugasById($id){
        $query = "SELECT * FROM petugas WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }
    public function getPetugasBySession($id){
        $query = "SELECT * FROM petugas WHERE pengguna_id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function tambahPetugas($data){
        $query = "INSERT INTO petugas VALUES(null, :nama, :pengguna_id)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePetugas($id,$data){
        $query = "UPDATE petugas SET nama=:nama, pengguna_id=:pengguna_id WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('pengguna_id', $data['pengguna_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPetugas($id){
        $query = "DELETE FROM petugas WHERE id=:id ";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}