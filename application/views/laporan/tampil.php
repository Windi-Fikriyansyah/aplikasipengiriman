<div class="container-fluid">
    <!-- DataTales Example -->
    <?php echo $this->session->flashdata('message'); ?>

    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <a href="<?= base_url('laporan/cetak_laporan_pengiriman/' . $tgl_awal . '/' . $tgl_akhir); ?>" target="_blank" class="btn btn-success mt-1"><i class="fa fa-check"></i>&nbsp;Cetak</a>
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
                            <th>Total</th>
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
                                    <a href="<?= base_url() ?>transaksi/cetak/<?= $transaksi['no_pengirim']; ?>" target="_blank" class="btn btn-small text-primary"><i class="fa fa-search-plus"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <th colspan="7">Grand Total</th>
                        <th colspan="2"><?= number_format($grandtotal, 0, ',', '.'); ?></th>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>