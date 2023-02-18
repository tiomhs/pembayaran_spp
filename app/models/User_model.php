<?php 

class User_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengguna(){
        $query = "SELECT * FROM pengguna";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getPenggunaByRole(){
        $query = "SELECT * FROM pengguna WHERE role=:role";
        $this->db->query($query);
        $this->db->bind('role','2');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getPenggunaById($id){
        $query = "SELECT * FROM pengguna WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->singleSet();
    }

    public function login($data){
        $query = "SELECT * FROM pengguna WHERE username=:username AND password=:password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function tambahPengguna($data){
        $query = "INSERT INTO pengguna VALUES(0,:username,:password,:role)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPengguna($id){
        $query = "DELETE FROM pengguna WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePengguna($id,$data){
        $query = "UPDATE pengguna SET id=:id, username=:username, password=:password, role=:role WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', $data['role']);
        $this->db->execute();
        return $this->db->rowCount();

    }

}