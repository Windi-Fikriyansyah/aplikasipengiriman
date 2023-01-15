<div class="card">
    <div class="card-header">

        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <div class="my-2"></div>
                <?php echo $this->session->flashdata('message'); ?>
                <a href="<?= base_url('pelanggan/tambah'); ?>" class="btn btn-w-m btn-primary">Tambah</a>


            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- /.card-header -->



                            <?php
                            $no = 1;
                            foreach ($pelanggan as $cs) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $cs['nama_pelanggan']; ?></td>
                                    <td><?= $cs['jenis_kelamin']; ?></td>
                                    <td><?= $cs['alamat']; ?></td>
                                    <td><?= $cs['telepon']; ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>pelanggan/ubah/<?= $cs['id_pelanggan']; ?>" class="btn-small text-info"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#modal-hapus<?= $cs['id_pelanggan']; ?>" data-toggle="modal" class="btn-small text-danger"><i class="fas fa-trash"></i>Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->



    <?php foreach ($pelanggan as $cs) : ?>
        <div class="modal fade" id="modal-hapus<?= $cs['id_pelanggan']; ?>" aria-modal="true" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form method="post" action="<?= base_url('pelanggan/hapus'); ?>">
                        <div class="modal-body">
                            <p>Apakah Anda Yakin Ingin Hapus ?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <input type="hidden" name="id_pelanggan" value="<?= $cs['id_pelanggan']; ?>">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <?php endforeach; ?>
</div>



