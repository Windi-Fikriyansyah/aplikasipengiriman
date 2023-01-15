<!DOCTYPE html>
<html>

<head>
  <title>Invoice</title>
</head>

<body style='font-family:tahoma; font-size:8pt;' onload="window.print()">
  <div style="text-align:justify; margin-top: 20px" id="cetak">
    <!-- <img src="<?= base_url(); ?>assets/dist/img/avatar2.png" style="width: 78px; height: 80px; float:left; margin:0 8px 4px 0;"/> -->
    <p style="text-align: center; line-height: 20px">
      <!-- <span style="font-size: 15px">INVOICE</span><br /> -->
      <span style="font-size: 20px;"><strong>RANIL PERMATA LOGISTIK</strong></span><br />
      <span style="font-size: 12px">Jln. Delta Mandala III No:22 Semawalang Kec. Gedangan Kab. Sidoarjo</span><br />
      <span style="font-size: 12px">Email - cvranilpermatalogistik@gmail.com</span>
      <hr>
    </p>
  </div>
  <center>
    <table style='width:800px; font-size:12pt; font-family:calibri; border-collapse: collapse;' border='0'>
      <td width='100%' align='center' style='padding-right:80px; vertical-align:top'>
        <span style='font-size:12pt'><b><u>INVOICE</u></b></span></br>
      </td>
    </table>
    <br>
    <table style='width:800px; font-size:10pt; font-family:calibri; border-collapse: collapse;' border='0'>
      <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
        <!-- <span style='font-size:12pt'><b>INVOICE</b></span></br> -->
        No Resi : <?= $cetak['no_pengirim'] ?></br>
        Tanggal : <?= $cetak['tgl'] ?></br>
        Kapal : <?= $cetak['nama_kapal'] ?>
        Asal : <?= $cetak['asal'] ?>

      </td>

    </table>
    <table style='width:800px; font-size:10pt; font-family:calibri; border-collapse: collapse;' border='0'>
      <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
        <span style='font-size:12pt'><b></b></span></br>
        Nama Pengirim : <?= $cetak['nama_pelanggan'] ?></br>
        No Telp : <?= $cetak['telepon'] ?></br>
        Alamat : <?= $cetak['alamat'] ?>
      </td>

      <td style='vertical-align:top' width='30%' align='left'>
        <b><span style='font-size:10pt'></span></b></br>
        Nama Penerima : <?= $cetak['penerima'] ?></br>
        No Telp : <?= $cetak['telpn'] ?></br>
        Tujuan : <?= $cetak['alamat_penerima'] ?>
      </td>
    </table>
    <table cellspacing='0' style='width:800px; font-size:10pt; font-family:calibri;  border-collapse: collapse;' border='1'>
      </br>
      <tr align='center'>
        <td width='20%'>Jenis Barang</td>
        <td width='6%'>Jumlah Colly</td>
        <td width='10%'>Berat (kg)</td>
        <td width='13%'>Harga</td>
        <td width='13%'>Total Harga</td>
      </tr>
      <?php foreach ($detail as $ctk) : ?>
        <tr align='left'>
          <td><?= $ctk['jenis_barang'] ?></td>
          <td><?= $ctk['colly'] ?></td>
          <td><?= $ctk['berat'] ?></td>
          <td style='text-align:right'><?= number_format($ctk['harga'], 0, '.', ','); ?></td>
          <td style='text-align:right'><?= number_format($ctk['subtotal'], 0, '.', ','); ?></td>
        <?php endforeach; ?>
        <tr>

          <td colspan='3'>
            <div style='text-align:right'><b>Grand Total : </b></div>
          </td>
          <td style='text-align:right'><b>Rp. <?= number_format($cetak['total'], 0, '.', ','); ?></b></td>
        </tr>
        <!-- <tr>
          <td colspan='3'>
            <div style='text-align:right'><b>Total Bayar : </b></div>
          </td>
          <td style='text-align:right'><b>Rp. <?= number_format($penjualan['total_bayar'], 0, '.', ','); ?> </b></td>
        </tr>
        <tr>
          <td colspan='3'>
            <div style='text-align:right'><b>Kembalian : </b></div>
          </td>
          <td style='text-align:right'><b>Rp. <?= number_format($penjualan['total_kembali'], 0, '.', ','); ?></b></td>
        </tr> -->
    </table>

    <table style='width:800px; font-size:10pt;' cellspacing='2'>
      <br>
      <br>
      <br>
      <tr>
        <td align='center'>
          Pembayaran : </br>
          <li>Mandiri : 140-00-2134280 -
            A/N : Nur Wahdania Jaida La Sufu </li>
          <li>BRI : 0172-01-068160-50-4 -
            A/N : Nur Wahdania Jaida La Sufu</li>
        </td>
        <td style='border:0px solid black; padding:5px; text-align:left; width:30%'></td>
        <td align='center'>Hormat Kami,</br></br></br></br></br></br><u>(........................)</u></td>
      </tr>
    </table>
  </center>
</body>

</html>