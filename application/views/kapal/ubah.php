<div class="card card-primary">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Kapal</h6>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $ubah_kapal['id'] ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">No Polisi</label>
                <input type="text" name="kapal" value="<?= $ubah_kapal['nama_kapal'] ?>" class="form-control" required>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Update</button>
            </div>
    </form>
</div>
<!-- /.card -->