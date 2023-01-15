<div class="card card-primary">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Pelanggan</h6>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        <div class="card-body">
            <input type="hidden" name="id_pelanggan" value="<?= $ubah_pelanggan['id_pelanggan'] ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" value="<?= $ubah_pelanggan['nama_pelanggan'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                    <option value="<?= $ubah_pelanggan['jenis_kelamin'] ?>"><?= $ubah_pelanggan['jenis_kelamin'] ?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" name="alamat" value="<?= $ubah_pelanggan['alamat'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telepon</label>
                <input type="text" name="telepon" value="<?= $ubah_pelanggan['telepon'] ?>" class="form-control" required>
            </div>
            
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Update</button>
        </div>
    </form>
</div>
<!-- /.card -->