<div class="container">
    <div class="row">
        <h2>Hai👋.... <span class="d-block mt-2"><?= $data['siswa']['nama_siswa']; ?></span></h2>
        <div class="col-10">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal Bayar</th>
                                <th>Bulan Dibayar</th>
                                <th>Tahun Dibayar</th>
                                <th>Petugas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><?= $data['history']['tanggal_bayar']; ?></td>
                                <td><?= $data['history']['bulan_dibayar']; ?></td>
                                <td><?= $data['history']['tahun_dibayar']; ?></td>
                                <td><?= $data['history']['nama']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>