<div class="container">
    <h4>Data Kelas</h4>
    <a href="<?= BASEURL ?>/admin/form_tambah_kelas" class="btn btn-primary my-2"> Tambah Kelas </a>
    <div class="row">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['kelas'] as $kelas): ?>
                            <tr>
                                <td> </td>
                                <td><?= $kelas['nama']?></td>
                                <td><?= $kelas['kompetensi_keahlian']?></td>
                                <td>
                                    <a href="<?= BASEURL; ?>/admin/form_edit_kelas/<?= $kelas['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= BASEURL; ?>/admin/delete_kelas/<?= $kelas['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>