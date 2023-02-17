<div class="container">
    <h2>Form Tambah Pengguna</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/admin/add_pengguna" method="post">
                <div class="mb-2">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="username" id="Username">
                </div>
                <div class="mb-2">
                    <label for="passoword">passoword</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-2">
                    <label for="Role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="0">Admin</option>
                        <option value="1">Petugas</option>
                        <option value="2">Siswa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>