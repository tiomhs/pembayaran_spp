<div class="container">
    <h4>Data Siswa</h4>
    <a href="<?= BASEURL ?>/admin/form_tambah_siswa" class="btn btn-primary my-2"> Tambah Siswa </a>
    <div class="row">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nisn</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['allSiswa'] as $siswa): ?>
                        <tr>
                            <td></td>
                            <td><?= $siswa['nisn']?></td>
                            <td><?= $siswa['nis']?></td>
                            <td><?= $siswa['nama']?></td>
                            <td><?= $siswa['alamat']?></td>
                            <td><?= $siswa['telepon']?></td>
                            <td><?= $siswa['kompetensi_keahlian']?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/admin/form_edit_siswa/<?= $siswa['id']; ?>" class="btn btn-success">Edit</a>
                                <a href="<?= BASEURL; ?>/admin/delete_siswa/<?= $siswa['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>