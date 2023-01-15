<div class="card card-secondary">
    <div class="card-header">
        <h5 class="card-title">Halaman Tambah Data</h5>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <?= form_open_multipart('kapal/tambah'); ?>

        <div class="form-group">
            <label>Nama Kapal</label>
            <input type="text" name="kapal" value="<?= set_value('kapal'); ?>" class="form-control <?= form_error('kapal') ? 'is-invalid' : null ?>" placeholder="Nama Kapal">
            <small class="form-text text-danger"><?= form_error('kapal'); ?></small>
        </div>

        <button class="btn btn-primary" type="submit" name="tambah">&nbsp;Simpan</button>
    </div>
    <!-- /.card-body -->


    <?= form_close(); ?>
</div>
<!-- /.card -->