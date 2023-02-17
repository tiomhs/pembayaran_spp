<div class="container">
    <h2>Form Tambah Kelas</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL ?>/admin/update_kelas/<?= $data['kelas']['id']; ?>" method="post">
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['kelas']['nama']; ?>">
                </div>
                <div class="mb-2">
                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                    <input type="text" id="kompetensi_keahlian" name="kompetensi_keahlian" class="form-control" value="<?= $data['kelas']['kompetensi_keahlian']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>