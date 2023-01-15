<div class="card card-secondary">
            <div class="card-header">
                <h5 class="card-title">Halaman Tambah Data</h5>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <?= form_open_multipart('admin/tambah'); ?>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_admin" value="<?= set_value('nama_admin'); ?>" class="form-control <?= form_error('nama_admin') ? 'is-invalid' : null ?>" placeholder="Nama">
                    <small class="form-text text-danger"><?= form_error('nama_admin'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('username'); ?></small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="pass1" placeholder="Password" value="<?= set_value('pass1'); ?>" class="form-control <?= form_error('pass1') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('pass1'); ?></small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Konfirmasi Password*</label>
                    <input type="password" name="pass2" placeholder="Konfirmasi Password" value="<?= set_value('pass2'); ?>" class="form-control <?= form_error('pass2') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('pass2'); ?></small>
                    </div>

                    <div class="form-group">
                    <label for="email">Hak Akses</label>
                    <input type="text" value="Admin" name="hak_akses" value="<?= set_value('hak_akses'); ?>" class="form-control <?= form_error('hak_akses') ? 'is-invalid' : null ?>" readonly>
                    <small class="form-text text-danger"><?= form_error('hak_akses'); ?></small>
                    </div>
                    
                <button class="btn btn-primary" type="submit" name="tambah">&nbsp;Simpan</button>
            </div>
            <!-- /.card-body -->


            <?= form_close(); ?>
        </div>
<!-- /.card -->