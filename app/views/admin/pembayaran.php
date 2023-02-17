<div class="container">
    <h4>Data Pembayaran</h4>
    <a href="<?= BASEURL ?>/admin/form_tambah_pembayaran" class="btn btn-primary my-2"> Tambah Pembayaran </a>
    <div class="row">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tahun Ajaran</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['pembayaran'] as $pembayaran): ?>
                            <tr>
                                <td> </td>
                                <td><?= $pembayaran['tahun_ajaran']?></td>
                                <td>Rp.<?= $pembayaran['nominal']?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/admin/form_edit_pembayaran/<?= $pembayaran['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= BASEURL; ?>/admin/delete_pembayaran/<?= $pembayaran['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>