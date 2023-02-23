<!-- <?= var_dump($data); ?>
<div class="container">
    <h2>Form Cari Siswa</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL ?>/admin/find_siswa" method="post">
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
            <div class="col">
                <form action="<?= BASEURL ?>/admin/add_transaksi" method="post">
                    <div class="mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['siswa']['nama']; ?>">
                    </div>
                    <div class="mb-2">
                        <label for="nisn">Nisn</label>
                        <input type="text" id="nisn" name="nisn" class="form-control" value="<?= $data['siswa']['nisn']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

</div> -->