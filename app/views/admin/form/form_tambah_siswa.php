<div class="container">
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
                    <label for="telepon">telepon</label>
                    <select name="kelas_id" class="form_control">
                        <option value=""></option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>