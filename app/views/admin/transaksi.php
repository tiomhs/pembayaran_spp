<div class="container">
    <h4>Data Transaksi</h4>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nisn</th>
                            <th>Nis</th>
                            <th>Tahun Ajaran</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['siswa'] as $siswa): ?>
                            <tr>
                                <td> </td>
                                <td><?= $siswa['nama']?></td>
                                <td><?= $siswa['nisn']?></td>
                                <td><?= $siswa['nis']?></td>
                                <td><?= $siswa['tahun_ajaran']?></td>
                                <td>Rp.<?= $siswa['nominal']?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/admin/bayar/<?= $siswa['id']; ?>" class="btn btn-primary">Bayar</a>
                                    <!-- <a href="<?= BASEURL; ?>/admin/form_edit_transaksi/<?= $transaksi['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= BASEURL; ?>/admin/delete_transaksi/<?= $transaksi['id']; ?>" class="btn btn-danger">Delete</a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>