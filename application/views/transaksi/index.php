<div class="card card-primary">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pembayaran</h6>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-widget">
                <div class="card-body">
                    <table width="100%">
                        <form action='<?= base_url('transaksi/tambah_cart') ?>' method="post">
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="jenis_barang" class="form-control" placeholder="Jenis Barang" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" min="1" name="colly" class="form-control" placeholder="Jumlah Colly" required>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" name="harga" id="hrg" value="<?php foreach ($harga as $hr) : ?><?= $hr['harga'] ?> <?php endforeach; ?>" class="form-control" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input required type="number" id="berat" name="berat" min="1" class="form-control" placeholder="Berat (kg)">

                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <button type="submit" name="tambah" id="add_cart" class="btn btn-danger">
                                            <i class="fa fa-cart-plus"></i> Add
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-widget">
                <div class="card-body">
                    <?php
                    if ($cart = $this->cart->contents()) {
                    ?>


                        <table class="table" width="100%">
                            <tr id="main_heading">
                                <td width="2%">No</td>
                                <td width="33%">Jenis Barang</td>
                                <td width="8%">Colly</td>
                                <td width="20%">Berat</td>
                                <td width="17%">Harga</td>
                                <td width="20%">Subtotal</td>
                                <td width="10%">Hapus</td>
                            </tr>
                            <?php
                            // Create form and send all values in "shopping/update_cart" function.
                            $grand_total = 0;
                            $i = 1;

                            foreach ($cart as $item) :
                                $subtotal = $item['berat'] * $item['price'];
                                $grand_total = $grand_total + $subtotal;
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $item['name']; ?></td>
                                    <td><?php echo $item['qty']; ?></td>
                                    <td><?php echo $item['berat']; ?></td>
                                    <td><?php echo number_format($item['price'], 0, ",", "."); ?></td>
                                    <td><?php echo number_format($subtotal, 0, ",", ".") ?></td>
                                    <td><a href="<?php echo base_url() ?>transaksi/hapus_cart/<?php echo $item['rowid']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                                <?php endforeach; ?>
                                </tr>

                                <tr>
                                    <td colspan="5"><b>Grand Total :</b></td>
                                    <td><b>Rp <?php echo number_format($grand_total, 0, ",", "."); ?></b></td>
                                </tr>

                        </table>
                    <?php
                    } else {
                        $grand_total = 0; ?>
                        <table class="table" width="100%">
                            <tr id="main_heading">
                                <td width="2%">No</td>
                                <td width="33%">Jenis Barang</td>
                                <td width="8%">Colly</td>
                                <td width="20%">Berat</td>
                                <td width="17%">Harga</td>
                                <td width="20%">Subtotal</td>
                                <td width="10%">Hapus</td>
                            </tr>
                            <tr>
                                <td colspan='6' align="center">Data Kosong</td>
                            </tr>

                        </table>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <form action="<?= base_url('transaksi/simpan') ?>" method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-widget">
                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align:top">
                                    <label for="date">No Resi</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="no_pengirim" id="no_pengirim" value="<?= $no_pengirim; ?>" class="form-control" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top">
                                    <label for="date">Tanggal</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="date" name="tgl" id="date" value="<?= date('Y-m-d') ?>" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top; width:20%">
                                    <label for="pelanggan">Nama Kapal</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select name="kapal" id="id_pelanggan" class="form-control chosen-select" tabindex="2">
                                            <option value="">Pilih Kapal</option>
                                            <?php foreach ($kapal as $kpl) : ?>
                                                <option value="<?= $kpl['id']; ?>"><?= $kpl['nama_kapal']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top; width:20%">
                                    <label for="user">Asal</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="asal" id="id_user" class="form-control" required>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-widget">
                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align:top; width:20%">
                                    <label for="pelanggan">Data Pengirim</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select name="pelanggan" id="id_pelanggan" class="form-control chosen-select" tabindex="2">
                                            <option value="">Pilih Pengirim...</option>
                                            <?php foreach ($pelanggan as $spl) : ?>
                                                <option value="<?= $spl['id_pelanggan']; ?>"><?= $spl['nama_pelanggan']; ?> - <?= $spl['alamat']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top">
                                    <label for="date">Nama Penerima</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="penerima" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top">
                                    <label for="date">Telp penerima</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="telpn" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top">
                                    <label for="date">Tujuan</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="alamat" class="form-control">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="total" id="ttl" value="<?= $grand_total == '' || '0' ? '0' : $grand_total; ?>" class="form-control" readonly>

        <!-- <div class="row">
        <div class="col-lg-12">
            <div class="card card-widget">
                <div class="card-body">
                    <table width="50%" align="right">
                        <tr>
                            <td style="vertical-align:top">
                                <label for="date">Total Bayar</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" name="total" id="ttl" value="<?= $grand_total == '' || '0' ? '0' : number_format($grand_total, 0, ",", "."); ?>" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div> -->

        <div class="card-footer" align="right">
            <button type="submit" name="tambah" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Simpan</button>
        </div>
    </form>
</div>