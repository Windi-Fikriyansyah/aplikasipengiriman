<div class="card card-primary">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Supir</h6>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        <div class="card-body">
            <input type="hidden" name="id_supir" value="<?= $ubah_supir['id_supir'] ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">No. KTP</label>
                <input type="text" name="no_ktp" value="<?= $ubah_supir['no_ktp'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" name="nama_supir" value="<?= $ubah_supir['nama_supir'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" name="alamat" value="<?= $ubah_supir['alamat'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telepon</label>
                <input type="text" name="telepon" value="<?= $ubah_supir['telepon'] ?>" class="form-control" required>
            </div>
            
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Update</button>
        </div>
    </form>
</div>
<!-- /.card -->