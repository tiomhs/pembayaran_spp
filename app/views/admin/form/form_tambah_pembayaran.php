<div class="container">
    <h2>Form Tambah Pembayaran</h2>
    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL ?>/admin/add_pembayaran" method="post">
                <div class="mb-2">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="text" id="tahun_ajaran" name="tahun_ajaran" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nominal">Nominal</label>
                    <input type="text" id="nominal" name="nominal" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>