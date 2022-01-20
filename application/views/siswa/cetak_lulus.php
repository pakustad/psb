<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title><?php echo $judul_web; ?></title>
  <base href="<?php echo base_url(); ?>" />
  <link rel="icon" type="image/png" href="assets/images/favicon.ico" />
  <style>
    table {
      border-collapse: collapse;
    }

    th,
    td {
      padding: 2px;
    }

    body {
      font-family: Calibri;
    }
  </style>
</head>

<body onload="window.print();">
  <?php $this->load->view('kop_lap'); ?><br />
  <div style=" size: 21cm 29.7cm; background-color: #fff;">
    <h4 align="center" style="margin:0px;font-size:19px;"><u><b>S U R A T &nbsp&nbsp K E P U T U S A N</b></u></h4>
    <center>
      Nomor : <?= $user->id_siswa; ?>/PAN-PPDB/SMA-PTHT/<?= date('m'); ?>/<?= $thn_ppdb; ?><br />
    </center>

    <br>
    Panitia PPDB SMA Pesantren Terpadu Hayatan Thayyibah, dengan ini menyatakan bahwa :<br />
    <center>
      <table width="60%" border="0">
        <tr>
          <td width="150">Nama</td>
          <td width="20">:</td>
          <td><?php echo ucwords($user->nama_lengkap); ?></td>
        </tr>
        <tr>
          <td width="150">Jenis Kelamin</td>
          <td width="20">:</td>
          <td><?php echo ucwords($user->jk); ?></td>
        </tr>
        <tr>
          <td width="150">Asal Sekolah</td>
          <td width="20">:</td>
          <td><?php echo ucwords($user->nama_sekolah); ?></td>
        </tr>
        <tr>
          <td width="150">No Tes Peserta</td>
          <td width="20">:</td>
          <td><?php echo $user->no_pendaftaran; ?></td>
        </tr>
      </table>
    </center>
    <br>

    <center>
      <div style="border:1px solid black; width: 60%; padding: 10px;">
        <b style="font-size: 18px;">Dinyatakan : <u style="font-size: 20px; color: green; ">D I T E R I M A</u></b>
      </div>
    </center>
    <br>

    <div width="80%; font-size: 10px;">
      Sebagai Peserta Didik di SMA Pesantren Terpadu Hayatan Thayyibah Tahun Pelajaran <?= $thn_ppdb; ?>/<?= $thn_ppdb+1; ?>, dengan perolehan nilai sebagai berikut :
    </div>
    <br>

    <center>
      <?php
      $mat = $this->db->get_where('tbl_nilai', array('id_siswa' => $user->id_siswa))->row('matematika');
      $ing = $this->db->get_where('tbl_nilai', array('id_siswa' => $user->id_siswa))->row('b_inggris');
      $ipa = $this->db->get_where('tbl_nilai', array('id_siswa' => $user->id_siswa))->row('ipa');
      $ips = $this->db->get_where('tbl_nilai', array('id_siswa' => $user->id_siswa))->row('ips');
      $btq = $this->db->get_where('tbl_nilai', array('id_siswa' => $user->id_siswa))->row('b_t_alquran');
      $conv = $this->db->get_where('tbl_nilai', array('id_siswa' => $user->id_siswa))->row('e_conversation');
      ?>
      <table style="width: 100%;" border="1">
        <tr>
          <th width="330">Mata Uji Tes Tulis</th>
          <th width="40">KKM</th>
          <th width="105">Nilai</th>
          <th>Jenis Tidak Lanjut</th>
        </tr>
      </table>
      <table style="width: 100%;" border="1">
        <tr>
          <td width="20" style="text-align: center">1</td>
          <td width="305"> Matematika </td>
          <td width="40" style="text-align: center;">65</td>
          <td width="50" style="text-align: center;"><?= $mat; ?></td>
          <td width="50" style="text-align: center;">
            <?php
            if ($mat >= 92 && $mat <= 100) {
              echo "A";
            } else if ($mat >= 83 && $mat <= 91) {
              echo "B";
            } else if ($mat >= 75 && $mat <= 82) {
              echo "C";
            } else if ($mat >= 0 && $mat <= 74) {
              echo "D";
            } else {
              echo "E";
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td width="20" style="text-align: center">2</td>
          <td width="305"> Bahasa Inggris </td>
          <td width="40" style="text-align: center;">75</td>
          <td width="50" style="text-align: center;"><?= $ing; ?></td>
          <td width="50" style="text-align: center;">
            <?php
            if ($ing >= 92 && $ing <= 100) {
              echo "A";
            } else if ($ing >= 83 && $ing <= 91) {
              echo "B";
            } else if ($ing >= 75 && $ing <= 82) {
              echo "C";
            } else if ($ing >= 0 && $ing <= 74) {
              echo "D";
            } else {
              echo "E";
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td width="20" style="text-align: center">3</td>
          <td width="305"> IPA </td>
          <td width="40" style="text-align: center;">65</td>
          <td width="50" style="text-align: center;"><?= $ipa; ?></td>
          <td width="50" style="text-align: center;">
            <?php
            if ($ipa >= 92 && $ipa <= 100) {
              echo "A";
            } else if ($ipa >= 83 && $ipa <= 91) {
              echo "B";
            } else if ($ipa >= 75 && $ipa <= 82) {
              echo "C";
            } else if ($ipa >= 0 && $ipa <= 74) {
              echo "D";
            } else {
              echo "E";
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td width="20" style="text-align: center">4</td>
          <td width="305"> IPS </td>
          <td width="40" style="text-align: center;">65</td>
          <td width="50" style="text-align: center;"><?= $ips; ?></td>
          <td width="50" style="text-align: center;">
            <?php
            if ($ips >= 92 && $ips <= 100) {
              echo "A";
            } else if ($ips >= 83 && $ips <= 91) {
              echo "B";
            } else if ($ips >= 75 && $ips <= 82) {
              echo "C";
            } else if ($ips >= 0 && $ips <= 74) {
              echo "D";
            } else {
              echo "E";
            }
            ?>
          </td>
          <td></td>
        </tr>
      </table>
      <table style="width: 100%;" border="1">
        <tr>
          <th width="330">Mata Uji Tes Lisan</th>
          <th width="40"></th>
          <th width="105"></th>
          <th></th>
        </tr>
      </table>
      <table style="width: 100%;" border="1">
        <tr>
          <td width="20" style="text-align: center">5</td>
          <td width="305"> Baca Tulis Al-Quran </td>
          <td width="40" style="text-align: center;">75</td>
          <td width="50" style="text-align: center;"><?= $btq; ?></td>
          <td width="50" style="text-align: center;">
            <?php
            if ($btq >= 92 && $btq <= 100) {
              echo "A";
            } else if ($btq >= 83 && $btq <= 91) {
              echo "B";
            } else if ($btq >= 75 && $btq <= 82) {
              echo "C";
            } else if ($btq >= 0 && $btq <= 74) {
              echo "D";
            } else {
              echo "E";
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td width="20" style="text-align: center">6</td>
          <td width="305"> English Conversation </td>
          <td width="40" style="text-align: center;">75</td>
          <td width="50" style="text-align: center;"><?= $conv; ?></td>
          <td width="50" style="text-align: center;">
            <?php
            if ($conv >= 92 && $conv <= 100) {
              echo "A";
            } else if ($conv >= 83 && $conv <= 91) {
              echo "B";
            } else if ($conv >= 75 && $conv <= 82) {
              echo "C";
            } else if ($conv >= 0 && $conv <= 74) {
              echo "D";
            } else {
              echo "E";
            }
            ?>
          </td>
          <td></td>
        </tr>
      </table>
      <?php
      $rata2 = ($mat + $ing + $ipa + $ips + $btq + $conv) / 6;
      ?>
      <table style="width: 100%;" border="1">
        <tr>
          <th width="330">Rata-rata</th>
          <th width="40">70</th>
          <th width="105"><?= number_format((float)$rata2, 2, '.', ''); ?></th>
          <th></th>
        </tr>
      </table>
      <table style="width: 100%;" border="1">
        <tr>
          <td width="20" style="text-align: center">7</td>
          <td width="305"> Pilihan Peminatan Berdasarkan Peserta Didik </td>
          <td width="150" style="text-align: center;"><?= $this->db->get_where('tbl_nilai', array('id_siswa'=> $user->id_siswa))->row('minat'); ?></td>
          <td></td>
        </tr>
      </table>
    </center>

    <table style="width: 100%;">
      <style>
        img {
          position: relative;
          z-index: 1;
          top: 0px;
        }

        .ttd {
          padding-left: 40px;
        }
      </style>
      <tr>
        <td style="width: 55%; padding-left: 25px;">
          Mengetahui,<br>
          Kepala Sekolah,<br>
          <img src="img/ks_hatoy.png" alt="" width="40%"><br>
          <b>Zaenal Arifin, S.T.P., M.Pd.</b>
        </td>
        <td style="width: 45%; padding-left: 25px;">
          <div class="ttd">
            Sukabumi, <?= format_tgl(date('Y-m-d')); ?><br>
            Ketua PPDB,<br>
          </div>
          <img src="img/ttd1.jpg" alt="" width="70%"><br>
          <div class="ttd">
          <b>Abdul Kohar, S.Sos.I., M.M.</b>
          </div>
        </td>
      </tr>
    </table>

    <?php echo $v_ket->ket_pengumuman; ?>
  </div>
</body>

</html>