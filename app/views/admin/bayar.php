<?= var_dump($data['petugas']) ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h4>Nama : <?= $data['siswa']['nama'] ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mt-4 font-weight-bold">Pembayaran Spp</div>
            <form action="<?= BASEURL ?>/admin/add_transaksi" method="post">
               <!-- <div class="mb-2">
                   <label for="bulan">Bulan</label>
                   <select name="bulan_dibayar" id="bulan" class="form-control">
                       <option value="1">Januari</option>
                       <option value="2">Februari</option>
                       <option value="3">Maret</option>
                       <option value="4">April</option>
                       <option value="5">Mei</option>
                       <option value="6">Juni</option>
                       <option value="7">Juli</option>
                       <option value="8">Agustus</option>
                       <option value="9">September</option>
                       <option value="10">Oktober</option>
                       <option value="11">November</option>
                       <option value="12">Desember</option>
                   </select>
               </div> -->
               <div class="row">
                    <?php foreach($data['bulan'] as $bulan): ?>
                        <div class="col-6">
                            <input type="hidden" name="siswa_id" value="<?= $data['siswa']['id']; ?>">
                            <input type="hidden" name="pembayaran_id" value="<?= $data['siswa']['pembayaran_id']; ?>">
                            <input type="hidden" name="petugas_id" value="<?= $data['petugas']['id'] ?>">

                            <?php if(in_array($bulan, $data['bulan_dibayar'])): ?>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input" value="<?= $bulan; ?>" name="bulan" disabled>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" value="Bulan ke-<?= $bulan ?>" Disabled>
                                </div>

                            <?php else: ?>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input" value="<?= $bulan; ?>" name="bulan_dibayar[]">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" value="Bulan ke-<?= $bulan ?>" Disabled>
                                </div>

                            <?php endif ?>                
                        </div>
                    <?php endforeach; ?>

               </div>
               <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan Bayar</th>
                            <th>Tahun Bayar</th>
                            <th>Tahun Ajaran</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['history'] as $history): ?>
                        <tr>
                            <td></td>
                            <td><?= $history['tanggal_bayar']?></td>
                            <td><?= $history['bulan_dibayar']?></td>
                            <td><?= $history['tahun_dibayar']?></td>
                            <td><?= $history['tahun_ajaran']?></td>
                            <td><?= $history['nominal']?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 <!-- ($data['history'][$i]['bulan_dibayar'] == NULL) ?  '' : 'disabled' -->

 