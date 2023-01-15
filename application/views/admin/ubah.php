<div class="card card-primary">
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Admin</h6>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $ubah_admin['id_admin'] ?>">
            
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama_admin" value="<?= $ubah_admin['nama_admin'] ?>" class="form-control" required>
            </div>
            

            <div class="form-group">
                 <label for="exampleInputEmail1">Username</label>
                 <input type="text" name="username" value="<?= $ubah_admin['username'] ?>" class="form-control" required>
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Password</label>
                 <input type="password" name="pass1" class="form-control">
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Konfirmasi Password</label>
                 <input type="password" name="pass2" class="form-control">
             </div>


             <div class="form-group">
                <label for="exampleInputEmail1">Hak Akses</label>
                <input type="text" name="hak_akses" value="<?= $ubah_admin['hak_akses'] ?>" class="form-control" readonly>
            </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Update</button>
        </div>
    </form>
</div>
<!-- /.card -->