<div class="container">
    <h2>Form Edit Petugas</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL ?>/admin/update_petugas/<?= $data['petugas']['id']; ?>" method="post">
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['petugas']['nama']; ?>">
                </div>
                <div class="mb-2">
                    <label for="kompetensi_keahlian">Username</label>
                    <select name="pengguna_id" id="pengguna_id" class="form-control">
                        <?php foreach($data['pengguna'] as $pengguna): ?>
                            <option value="<?= $pengguna['id']; ?>"  <?= ($pengguna['id'] == $data['petugas']['pengguna_id']) ? 'selected' : '' ?> ><?= $pengguna['username']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>