<?php 

class Transaksi_model{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getHistoryById($id){
         $query = "SELECT transaksi.tanggal_bayar, transaksi.bulan_dibayar, transaksi.tahun_dibayar, petugas.nama FROM `transaksi` INNER JOIN petugas on transaksi.petugas_id = petugas.id INNER JOIN siswa ON transaksi.siswa_id = siswa.id WHERE transaksi.siswa_id = :id";
         $this->db->query($query);
         $this->db->bind('id', $id);
         return $this->db->singleSet();
    }
}