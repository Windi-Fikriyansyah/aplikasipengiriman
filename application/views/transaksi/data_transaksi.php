<div class="card-header">
    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <h5>Data Pengiriman</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>No Resi</th>
                            <th>Nama Pengirim</th>
                            <th>No Telp</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Grand Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_transaksi as $transaksi) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $transaksi['tgl']; ?></td>
                                <td><?= $transaksi['no_pengirim']; ?></td>
                                <td><?= $transaksi['nama_pelanggan']; ?></td>
                                <td><?= $transaksi['telepon']; ?></td>
                                <td><?= $transaksi['asal']; ?></td>
                                <td><?= $transaksi['alamat_penerima']; ?></td>

                                <td><?= number_format($transaksi['total'], 0, ',', '.'); ?></td>
                                <td>
                                    <a href="<?= base_url() ?>transaksi/cetak/<?= $transaksi['no_pengirim']; ?>" target="_blank" class="btn btn-small text-primary"><i class="fa fa-print"></i></a>
                                    <a href="#modal-hapus<?= $transaksi['no_pengirim']; ?>" data-toggle="modal" type="button" class="btn btn-small text-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php foreach ($data_transaksi as $transaksi) : ?>
    <div class="modal fade" id="modal-hapus<?= $transaksi['no_pengirim']; ?>" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('transaksi/hapus'); ?>">
                    <div class="modal-body">
                        <p>Apakah yakin ingin hapus...?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <input type="hidden" name="id" value="<?= $transaksi['no_pengirim']; ?>">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>