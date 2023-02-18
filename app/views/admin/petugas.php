<div class="container">
    <h4>Data Petugas</h4>
    <a href="<?= BASEURL ?>/admin/form_tambah_petugas" class="btn btn-primary my-2"> Tambah Petugas </a>
    <div class="row">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['allPetugas'] as $petugas): ?>
                            <tr>
                                <td></td>
                                <td><?= $petugas['nama']?></td>
                                <td><?= $petugas['username']?></td>
                                <td><?= ($petugas['role'] == 0) ? 'admin' : 'petugas'?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/admin/form_edit_petugas/<?= $petugas['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= BASEURL; ?>/admin/delete_petugas/<?= $petugas['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>