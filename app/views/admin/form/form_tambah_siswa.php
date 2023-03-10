<div class="container">
    <h2>Form Tambah Siswa</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/admin/add_siswa" method="post">
                <div class="mb-2">
                    <label for="nisn">Nisn</label>
                    <input type="number" class="form-control" name="nisn" id="nisn">
                </div>
                <div class="mb-2">
                    <label for="nis">Nis</label>
                    <input type="number" class="form-control" name="nis" id="nis">
                </div>
                <div class="mb-2">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-2">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat">
                </div>
                <div class="mb-2">
                    <label for="telepon">telepon</label>
                    <input type="number" class="form-control" name="telepon" id="telepon">
                </div>
                <div class="mb-2">
                    <label for="telepon">Kelas</label><br>
                    <select name="kelas_id" class="form-control" name="kelas_id">
                        <?php foreach($data['kelas'] as $kelas): ?>
                        <option value="<?= $kelas['id']; ?>"><?= $kelas['kompetensi_keahlian']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="pengguna">pengguna</label><br>
                    <select  class="form-control" name="pengguna_id">
                        <?php foreach($data['pengguna'] as $pengguna): ?>
                        <option value="<?= $pengguna['id']; ?>"><?= $pengguna['username']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="telepon">pembayaran</label><br>
                    <select class="form-control" name="pembayaran_id">
                        <?php foreach($data['pembayaran'] as $pembayaran): ?>
                        <option value="<?= $pembayaran['id']; ?>"><?= $pembayaran['tahun_ajaran']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>