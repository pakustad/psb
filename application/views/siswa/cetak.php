<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $judul_web; ?></title>
  <base href="<?php echo base_url(); ?>" />
  <link rel="icon" type="image/png" href="assets/images/favicon.ico" />
  <style>
    table {
      border-collapse: collapse;
    }

    thead>tr {
      background-color: #0070C0;
      color: #f1f1f1;
    }

    thead>tr>th {
      background-color: #0070C0;
      color: #fff;
      padding: 10px;
      border-color: #fff;
    }

    th,
    td {
      padding: 2px;
    }

    th {
      color: #222;
    }

    body {
      font-family: Calibri;
    }
  </style>
</head>

<body onload="window.print();">
  <?php $this->load->view('kop_lap'); ?><br><br>
  <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
  <b>
    <center>
      PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) <br>
      SMA PESANTREN TERPADU HAYATAN THAYYIBAH <br>
      TAHUN PELAJARAN <?= $thn_ppdb; ?>/<?= $thn_ppdb + 1; ?></center>
  </b>
  <br><br><br>

  <table width="100%" border="0">
    <tr>
      <td width="200">NO. PENDAFTARAN</td>
      <td width="1">:</td>
      <td><?php echo $user->no_pendaftaran; ?></td>
    </tr>
    <tr>
      <td>TANGGAL PENDAFTARAN </td>
      <td>:</td>
      <td><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($user->tgl_siswa))); ?></td>
    </tr>
    <tr>
      <td>TANGGAL CETAK </td>
      <td>:</td>
      <td><?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?></td>
    </tr>
    <tr>
      <td>NIS</td>
      <td>:</td>
      <td><?php echo $user->nis; ?></td>
    </tr>
    <tr>
      <td>NISN</td>
      <td>:</td>
      <td><?php echo $user->nisn; ?></td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><?php echo $user->nik; ?></td>
    </tr>
    <tr>
      <td>NAMA LENGKAP</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_lengkap); ?></td>
    </tr>
    <tr>
      <td>JENIS KELAMIN</td>
      <td>:</td>
      <td><?php echo $user->jk; ?></td>
    </tr>
    <tr>
      <td>TEMPAT, TANGGAL LAHIR</td>
      <td>:</td>
      <td><?php echo "$user->tempat_lahir, " . $this->Model_data->tgl_id($user->tgl_lahir); ?></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td>:</td>
      <td><?php echo $user->alamat_siswa; ?></td>
    </tr>
    <tr>
      <td>AGAMA</td>
      <td>:</td>
      <td><?php echo $user->agama; ?></td>
    </tr>
    <tr>
      <td>NAMA ORANG TUA /WALI</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td style="padding-left:55px;">AYAH</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_ayah); ?></td>
    </tr>
    <tr>
      <td style="padding-left:55px;">IBU</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_ibu); ?></td>
    </tr>
    <tr>
      <td style="padding-left:55px;">WALI</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_wali); ?></td>
    </tr>
    <tr>
      <td>NO. HANDPHONE (HP)</td>
      <td>:</td>
      <td><?php echo $user->no_hp_siswa; ?></td>
    </tr>
    <tr>
      <td>ASAL SEKOLAH</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_sekolah); ?></td>
    </tr>
    <!-- <tr>
        <td>RATA - RATA NILAI RAPOR</td>
        <td>:</td>
        <td><?php echo number_format($nilai_rapor, 2, ",", "."); ?></td>
      </tr>
      <tr>
        <td>RATA - RATA NILAI USBN</td>
        <td>:</td>
        <td><?php echo number_format($nilai_usbn, 2, ",", "."); ?></td>
      </tr>
      <tr>
        <td>RATA - RATA NILAI UNBK/UNKP</td>
        <td>:</td>
        <td><?php echo number_format($nilai_unbk, 2, ",", "."); ?></td>
      </tr> -->
  </table>
  <br><br><br><br><br>

  <div style="float:right;">
    Sukabumi, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
    Ketua Panitia PPDB, <br>
    <img src="img/ttd.jpg" alt="" width="250" alignt="right"><br>
    <b><u>ABDUL KOHAR, S.Sos.I, M.M</u></b><br><br><br>

  </div>

  <?php $this->load->view('kop_lap'); ?><br>
  <b><u>Mohon disiapkan berkas berikut ketika melakukan verifikasi data ke sekolah :</u></b>
  <br>
  <table width="100%" style="margin-left:15px;">
    <tr>
      <td width="1">1.</td>
      <td>Cetak bukti pendaftaran</td>
      <td width="1">:</td>
      <td width="70px">1 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr>
    <!-- <tr>
      <td>2.</td>
      <td>Cetak rekap nilai</td>
      <td>:</td>
      <td>1 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr> -->
    <tr>
      <td style="vertical-align: top;">2.</td>
      <td>Bukti pembayaran biaya pendaftaran ke no rekening Bank Syariah Indonesia (BSI) KC Sukabumi (451-BSI) 0285255613 An. ABDUL KOHAR</td>
      <td style="vertical-align: top;">:</td>
      <td style="vertical-align: top;">1 lembar</td>
      <td width="10px" style="vertical-align: top;">(&nbsp;&nbsp;))</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Pas foto berwarna ukuran 3 x 4</td>
      <td>:</td>
      <td>3 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Fotokopi Kartu Keluarga (KK)</td>
      <td>:</td>
      <td>1 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Print out ASLI NISN dari web <i>http://nisn.data.kemdikbud.go.id</i> dilegalisir</td>
      <td>:</td>
      <td>1 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Fotokopi rapor SMP/MTs. Semester 1 s.d 4 dilegalisir</td>
      <td>:</td>
      <td>1 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Fotokopi nilai US dilegalisir (Jika sudah ada)</td>
      <td>:</td>
      <td>1 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Fotokopi Sertifikat/Piagam (Jika ada) </td>
      <td>:</td>
      <td>1 lembar</td>
      <td width="10px">(&nbsp;&nbsp;))</td>
    </tr>
  </table>
  Semua berkas dimasukan ke dalam map plastik berlubang (Contoh: merk folder one), Program Boarding warna hijau, Program Fullday ikhwan warna biru dan akhwat warna merah
</body>

</html>