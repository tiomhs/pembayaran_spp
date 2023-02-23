<?= var_dump($data); ?>
<?= error_reporting(0); ?>
<div class="container">
    <h2>Form Cari Siswa</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL ?>/admin/form_tambah_transaksi" method="post">
                <div class="mb-2">
                    <label for="nisn">Masukan Nisn</label>
                    <input type="number" name="nisn" id="nisn" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    <hr>

    <div class="form  <?php ($data['siswa'] == false OR $data['siswa'] == null ) ? 'd-none' : '' ?>">
        <h2>Form Tambah Transaksi</h2>
        <div class="row">
            <div class="col-10">
                <form action="<?= BASEURL ?>/admin/add_transaksi" method="post">
                    <div class="mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['siswa']['nama']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="nisn">Nisn</label>
                        <input type="text" id="nisn" name="nisn" class="form-control" value="<?= $data['siswa']['nisn']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="telepon">telepon</label>
                        <input type="text" id="telepon" name="telepon" class="form-control" value="<?= $data['siswa']['telepon']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="kompetensi_keahlian">kompetensi_keahlian</label>
                        <input type="text" id="kompetensi_keahlian" name="kompetensi_keahlian" class="form-control" value="<?= $data['siswa']['kompetensi_keahlian']; ?>">
                        <input type="hidden" id="kompetensi_keahlian" name="kompetensi_keahlian" class="form-control" value="<?= $data['siswa']['id_kelas']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="nominal">nominal</label>
                        <input type="text" id="nominal" name="nominal" class="form-control" value="<?= $data['siswa']['nominal']; ?>">
                        <input type="hidden" id="nominal" name="nominal" class="form-control" value="<?= $data['siswa']['id_pembayaran']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="bulan">Bulan</label>
                        <select name="bulan_dibayar" id="bulan" class="form_control">
                            <?php $i=1;
                             foreach($data['transaksi'] as $transaksi): ?>
                                <option value="<?= $i; ?>">Bulan ke- <?= $i; ?></option>
                            <?php $i++; endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

</div>