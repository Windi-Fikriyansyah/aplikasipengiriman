<div class="card card-primary">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Harga</h6>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        <div class="card-body">
            <input type="hidden" name="id_harga" value="<?= $ubah_harga['id_harga'] ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Harga/Kg</label>
                <input type="text" name="harga" value="<?= $ubah_harga['harga'] ?>" class="form-control" required>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Update</button>
        </div>
    </form>
</div>

<!-- /.card -->