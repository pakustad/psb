<?php
  $cek    = $user->row();
  $id_user = $cek->id_siswa;
  $nama    = $cek->nama_lengkap;

  $tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
    <?php if ($cek->status_pendaftaran == 'lulus') {?>
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
    <?php }elseif ($cek->status_pendaftaran == 'tidak lulus') { ?>
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="glyphicon glyphicon-bullhorn"></i> Pengumuman
          </h3>
        </div>
        <div class="panel-body" style="color:red">
          <h3>
            <center>
              Mohon Maaf <b><?php echo $nama; ?></b>
               <span class="label label-danger" style="font-size:20px;">Tidak Lulus</span> <br>
              Sebagai Peserta Didik Baru Di <b>SMA Pesantren Terpadu Hayatan Thayyibah</b>.
            </center>
            <br>
          </h3>
        </div>
      </div>
    <?php }else{ ?>
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
          Assalaamualaikum Warahmatullaahi Wabarakaatuh.</br></br>
Kepada Yth calon siswa baru SMA Pesantren Terpadu Hayatan Thayyibah, berikut kami sampaikan susunan kegiatan Tes PPDB SMA Pesantren Terpadu Hayatan Thayyibah TA 2022/2023 yang dilaksanakan secara online, Ahad, 16 Januari 2022 (Gelombang 1) dan 13 Maret 2022 (Gelombang 2), dengan ketentuan sbb:</br>
<ol>
    <li>Pukul 08.30 sd 10.15  
    <ul>
        <li>Siswa : Tes tulis melalui google form, terdiri dari 4 mata pelajaran (Matematika, Bahasa Inggris, Ilmu Pengetahuan Alam dan Ilmu Pengetahuan Sosial) masing-masing 10 soal.</li>
        <li>Orang tua : Mengisi tes wawancara (melalui google form)</li>
    </ul>
    </li>
    <li>Pukul 10.30 sd 12.00 tes BTQ/hafalan plus wawancara melalui video call (Didampingi orang tua)</li>
    <li>Pukul 12.30 sd Pukul 15.00 tes English Conversation (melalui video call).</li>
</ol>
</br>Teknisnya panitia PPDB akan melakukan panggilan secara berurutan pada waktu yang telah ditentukan.
        </div>
      </div>
    <?php } ?>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
