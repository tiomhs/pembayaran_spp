<div class="container">
    <h2>Laporan</h2>
    <div class="row">
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <?php foreach($data['bulan'] as $bulan): ?>
                                <th>bulan-<?= $bulan; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['siswa'] as $siswa): ?>
                        <tr>
                            <td><?= $siswa['nama']; ?></td>
                            <?php foreach($data['bulan'] as $bulan): ?>
                                <td>
                                    <?php if (in_array($bulan, $data['transaksi'][$siswa['id']])):?>
                                        <p>v</p>
                                    <?php else: ?>
                                        <p>x</p>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>