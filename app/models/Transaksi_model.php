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

    public function getAllTransaksi(){
        $query = "SELECT transaksi.id,transaksi.tanggal_bayar,transaksi.bulan_dibayar,transaksi.tahun_dibayar, siswa.nama, siswa.nisn, siswa.nis, siswa.telepon, siswa.alamat, petugas.nama AS nama_petugas, pembayaran.tahun_ajaran,pembayaran.nominal FROM transaksi INNER JOIN siswa ON transaksi.siswa_id = siswa.id INNER JOIN petugas ON transaksi.petugas_id = petugas.id INNER JOIN pembayaran ON transaksi.pembayaran_id = pembayaran.id;";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getTransaksiById($id){
        $query = "SELECT transaksi.id,transaksi.tanggal_bayar,transaksi.bulan_dibayar,transaksi.tahun_dibayar, siswa.id AS id_siswa, siswa.nama, siswa.nisn, siswa.nis, siswa.telepon, siswa.alamat, petugas.nama AS nama_petugas, pembayaran.tahun_ajaran,pembayaran.nominal FROM transaksi INNER JOIN siswa ON transaksi.siswa_id = siswa.id INNER JOIN petugas ON transaksi.petugas_id = petugas.id INNER JOIN pembayaran ON transaksi.pembayaran_id = pembayaran.id WHERE siswa.id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    public function getTransaksiId($id){
        $query = "SELECT * FROM transaksi WHERE siswa_id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function tambahTransaksi($data){
        var_dump($data);
        $date = date("Y-m-d H:i:s");
        $year = date("Y");
        // var_dump($date);die;
        foreach ($data['bulan_dibayar'] as $bulan) {
            $query = "INSERT INTO transaksi VALUES(null,:tanggal_bayar, :bulan_dibayar, :tahun_dibayar, :siswa_id, :petugas_id, :pembayaran_id)";
            $this->db->query($query);
            $this->db->bind('tanggal_bayar', $date);
            $this->db->bind('bulan_dibayar', $bulan);
            $this->db->bind('tahun_dibayar', $year);
            $this->db->bind('siswa_id', $data['siswa_id']);
            $this->db->bind('petugas_id', $data['petugas_id']);
            $this->db->bind('pembayaran_id', $data['pembayaran_id']);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }

    public function checkBulan($data){
        // var_dump($data);die;
        $query = "SELECT * FROM `transaksi` WHERE bulan_dibayar = :bulan_dibayar AND siswa_id = :siswa_id";
        $this->db->query($query);
        $this->db->bind('bulan_dibayar', $data['bulan']);
        $this->db->bind('siswa_id', $data['siswa_id']);
        $this->db->execute();
        return $this->db->resultSet();

    }



    // session['id'] = petugas.pengguna.id untuk pengguna
}