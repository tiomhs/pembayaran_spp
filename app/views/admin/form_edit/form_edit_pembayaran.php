<div class="container">
    <h2>Form Edit Pembayaran</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL ?>/admin/update_pembayaran/<?= $data['pembayaran']['id']; ?>" method="post">
                <div class="mb-2">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="text" id="tahun_ajaran" name="tahun_ajaran" class="form-control" value="<?= $data['pembayaran']['tahun_ajaran']; ?>">
                </div>
                <div class="mb-2">
                    <label for="nominal">Nominal</label>
                    <input type="text" id="nominal" name="nominal" class="form-control" value="<?= $data['pembayaran']['nominal']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>