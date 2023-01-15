<div class="card card-secondary">
            <div class="card-header">
                <h5 class="card-title">Halaman Tambah Data</h5>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <?= form_open_multipart('kendaraan/tambah'); ?>

                <div class="form-group">
                    <label>No Polisi</label>
                    <input type="text" name="no_polisi" value="<?= set_value('no_polisi'); ?>" class="form-control <?= form_error('no_polisi') ? 'is-invalid' : null ?>" placeholder="No Polisi">
                    <small class="form-text text-danger"><?= form_error('no_polisi'); ?></small>
                </div>

                <div class="form-group">
                    <label>Merek</label>
                    <input type="text" name="merk" value="<?= set_value('merk'); ?>" class="form-control <?= form_error('merk') ? 'is-invalid' : null ?>" placeholder="Merek">
                    <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">No Mesin</label>
                    <input type="text" name="no_mesin" value="<?= set_value('no_mesin'); ?>" class="form-control <?= form_error('no_mesin') ? 'is-invalid' : null ?>" placeholder="No Mesin">
                    <small class="form-text text-danger"><?= form_error('no_mesin'); ?></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" name="tahun" placeholder="Tahun" value="<?= set_value('tahun'); ?>" class="form-control <?= form_error('tahun') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Warna</label>
                    <input type="text" name="warna" placeholder="Warna" value="<?= set_value('warna'); ?>" class="form-control <?= form_error('warna') ? 'is-invalid' : null ?>">
                    <small class="form-text text-danger"><?= form_error('warna'); ?></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Supir</label>
                    <select class="custom-select" name="supir">
                        <option selected>--Pilih supir--</option>
                        <?php foreach ($supir as $kls) : ?>
                            <option value="<?= $kls['id_supir'] ?>"><?= $kls['nama_supir'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('supir'); ?></small>
                </div>
                
                    
                <button class="btn btn-primary" type="submit" name="tambah">&nbsp;Simpan</button>
            </div>
            <!-- /.card-body -->


            <?= form_close(); ?>
        </div>
<!-- /.card -->