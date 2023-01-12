<?php
$cek    = $user->row();
$id_user = $cek->id_siswa;
$nama    = $cek->nama_lengkap;
$thn_ppdb = $this->db->get_where('tbl_web')->row('thn_ppdb');
$tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <?php if ($cek->status_pendaftaran == 'lulus') { ?>
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
            </h3>
          </div>
          <div class="panel-body">
            <h3>
              <center>
                Selamat <b><?php echo $nama; ?></b> <span class="label label-success" style="font-size:20px;">Lulus</span> Seleksi Sebagai Peserta Didik Baru Di <b>SMA Pesantren Terpadu Hayatan Thayyibah</b>, Silahkan Cetak Surat Pengumuman Sebagai Bukti Lulus Seleksi.
                <hr>
                <a href="panel_siswa/cetak_lulus" class="btn btn-success btn-lg" target="_blank"><i class="icon-printer4"></i> Cetak Bukti Lulus</a>
              </center>
            </h3>
          </div>
        </div>
      <?php } elseif ($cek->status_pendaftaran == 'tidak lulus') { ?>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
            </h3>
          </div>
          <div class="panel-body">
            <h3>
              <center>
                Untuk sementara <b><?php echo $nama; ?></b>
                <span class="label label-info" style="font-size:20px;">Masuk Daftar Tunggu</span> <br>
                Sebagai Peserta Didik Baru Di <b>SMA Pesantren Terpadu Hayatan Thayyibah</b>.<br /><br />
                <a href="panel_siswa/cetak_lulus" class="btn btn-default btn-lg" target="_blank"><i class="icon-printer4"></i> Cetak SK Nilai Hasil Tes Seleksi</a>
              </center>
              <br>
            </h3>
          </div>
        </div>
      <?php } else { ?>
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
            </h3>
          </div>
          <div class="panel-body">
            <h3>
              <center>~ Informasi Teknis Pelaksanaan Kegiatan Tes PPDB ~</center>
            </h3>
            <?= $this->db->get_where('tbl_pengumuman', array('id_pengumuman' => 1))->row('pra_pengumuman'); ?>
          </div>
        </div>
      <?php } ?>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->