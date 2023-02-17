<div class="container">
    <h2>Form Edit Pengguna</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/admin/edit_pengguna/<?= $data['pengguna']['id']; ?>" method="post">
                <div class="mb-2">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="username" id="Username" value="<?= $data['pengguna']['username']; ?>">
                </div>
                <div class="mb-2">
                    <label for="passoword">passoword</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?= $data['pengguna']['username']; ?>">
                </div>
                <div class="mb-2">
                    <label for="Role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="0" <?= ($data['pengguna']['role'] == 0) ? 'selected' : ''; ?> >Admin</option>
                        <option value="1" <?= ($data['pengguna']['role'] == 1) ? 'selected' : ''; ?> >Petugas</option>
                        <option value="2" <?= ($data['pengguna']['role'] == 2) ? 'selected' : ''; ?> >Siswa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>