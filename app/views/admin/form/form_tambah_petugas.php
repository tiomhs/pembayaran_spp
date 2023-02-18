<div class="container">
    <h2>Form Tambah Petugas</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL ?>/admin/add_petugas" method="post">
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                    <select name="pengguna_id" id="pengguna_id" class="form-control">
                        <?php foreach($data['pengguna'] as $pengguna): ?>
                            <option value="<?= $pengguna['id']; ?>"><?= $pengguna['username']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>