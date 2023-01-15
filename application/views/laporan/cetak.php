<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
</head>

<body style='font-family:tahoma; font-size:8pt;' onload="window.print()">
    <div style="text-align:justify; margin-top: 20px">
        <!-- <img src="<?php echo base_url(); ?>assets/img/BTS.jpg" style="width: 78px; height: 80px; float:left; margin:0 8px 4px 0;" /> -->
        <p style="text-align: center; line-height: 17px">
            <span style="font-size: 26px; color: black;"><strong>LAPORAN PENGIRIMAN BARANG</strong></span><br />
            <span style="font-size: 20px;"><strong>RANIL PERMATA LOGISTIK</strong></span><br />
            <span style="font-size: 12px">Jln. Delta Mandala III No:22 Semawalang Kec. Gedangan Kab. Sidoarjo</span><br />
            <span style="font-size: 12px">Email - cvranilpermatalogistik@gmail.com</span>
            <hr>
        </p>
    </div>

    <center>

        <table style='width:100%; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='100%' align='left' style='padding-right:80px; vertical-align:top'>
                <span style='font-size:10pt'><b>Periode <?= date('d F Y', strtotime($tgl_awal)); ?> s.d <?= date('d F Y', strtotime($tgl_akhir)); ?></b></span></br>
            </td>
        </table>
        <table cellspacing='0' style='width:100%; font-size:10pt; font-family:calibri;  border-collapse: collapse;' border='1'>
            </br>
            <tr align='center'>
                <th style="width: 5px;">No</th>
                <th>Tanggal</th>
                <th>No Resi</th>
                <th>Nama Pengirim</th>
                <th>No Telp</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Total</th>
            </tr>
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

                </tr>
            <?php endforeach; ?>
            <td colspan='7'>
                <div style='text-align:left; font-size:12pt'><b>Grand Total</b></div>
            </td>
            <td style='text-align:left; font-size:12pt'><b>Rp. <?= number_format($grandtotal, 0, ',', '.'); ?>,-</b></td>
            </tr>
        </table>

        <table style='width:100%; font-size:7pt;' cellspacing='2'>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <tr>
                <td style='border:0px solid black; padding:5px; text-align:left; width:80%'></td>
                <td align='center'>Surabaya, <?= date('d F Y'); ?></br>Pimpinan,</br></br></br></br></br></br><u>(.....................................)</u></td>
            </tr>
        </table>
    </center>
</body>

</html>