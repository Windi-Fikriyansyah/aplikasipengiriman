<div class="card card-secondary">
            <div class="card-header">
                <h5 class="card-title">Halaman Tambah Data</h5>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <?= form_open_multipart('pelanggan/tambah'); ?>

                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" value="<?= set_value('nama_pelanggan'); ?>" class="form-control <?= form_error('nama_pelanggan') ? 'is-invalid' : null ?>" placeholder="Nama Pelanggan">
                    <small class="form-text text-danger"><?= form_error('nama_pelanggan'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="custom-select" name="jenis_kelamin">
                        <option selected>--Pilih Jenis Kelamin--</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
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