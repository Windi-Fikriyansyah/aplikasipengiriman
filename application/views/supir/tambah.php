<div class="card card-secondary">
            <div class="card-header">
                <h5 class="card-title">Halaman Tambah Data</h5>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <?= form_open_multipart('supir/tambah'); ?>

                <div class="form-group">
                    <label>No. KTP</label>
                    <input type="text" name="no_ktp" value="<?= set_value('no_ktp'); ?>" class="form-control <?= form_error('no_ktp') ? 'is-invalid' : null ?>" placeholder="No. KTP">
                    <small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama_supir" value="<?= set_value('nama_supir'); ?>" placeholder="Nama Supir" class="form-control <?= form_error('nama_supir') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('nama_supir'); ?></small>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control <?= form_error('alamat') ? 'is-invalid' : null ?>" placeholder="Alamat">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon</label>
                    <input type="text" name="telepon" placeholder="Telepon" value="<?= set_value('telepon'); ?>" class="form-control <?= form_error('telepon') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
                </div>

                
                    
                <button class="btn btn-primary" type="submit" name="tambah">&nbsp;Simpan</button>
            </div>
            <!-- /.card-body -->


            <?= form_close(); ?>
        </div>
<!-- /.card -->