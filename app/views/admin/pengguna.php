<div class="container">
    <h4>Data Pengguna</h4>
    <a href="<?= BASEURL ?>/admin/form_tambah_pengguna" class="btn btn-primary my-2"> Tambah Pengguna </a>
    <div class="row">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['allPengguna'] as $pengguna): ?>
                            <tr>
                                <td></td>
                                <td><?= $pengguna['username']?></td>
                                <td><?= $pengguna['password']?></td>
                                <td><?= $pengguna['role']?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/admin/form_edit_pengguna/<?= $pengguna['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= BASEURL; ?>/admin/delete_pengguna/<?= $pengguna['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>