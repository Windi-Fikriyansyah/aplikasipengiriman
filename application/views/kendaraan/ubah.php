<div class="card card-primary">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Pelanggan</h6>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        <div class="card-body">
            <input type="hidden" name="id_kendaraan" value="<?= $ubah_kendaraan['id_kendaraan'] ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">No Polisi</label>
                <input type="text" name="no_polisi" value="<?= $ubah_kendaraan['no_polisi'] ?>" class="form-control" required>
            </div>
            
            
            <div class="form-group">
                <label for="exampleInputEmail1">Merek</label>
                <input type="text" name="merk" value="<?= $ubah_kendaraan['merk'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">No Mesin</label>
                <input type="text" name="no_mesin" value="<?= $ubah_kendaraan['no_mesin'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tahun</label>
                <input type="text" name="tahun" value="<?= $ubah_kendaraan['tahun'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Warna</label>
                <input type="text" name="warna" value="<?= $ubah_kendaraan['warna'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Supir</label>
                <select class="custom-select" name="supir">
                    <option value="<?= $ubah_kendaraan['id_supir'] ?>"><?= $ubah_kendaraan['nama_supir'] ?></option>
                    <?php foreach ($supir as $kls) : ?>
                        <option value="<?= $kls['id_supir'] ?>"><?= $kls['nama_supir'] ?></option>
                    <?php endforeach; ?>
                </select>
                <small class="form-text text-danger"><?= form_error('supir'); ?></small>
            </div>
            
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Update</button>
        </div>
    </form>
</div>
<!-- /.card -->