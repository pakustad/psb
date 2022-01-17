<?php
$cek    = $user->row();
$id_user = $cek->id_user;
$nama    = $cek->nama_lengkap;
$level   = $cek->level;

$tgl = date('m-Y');
?>

<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat bg-info">
        <div class="panel-heading">
          <h3 class="panel-title">
            <center>Selamat Datang, <?php echo ucwords($nama); ?></center>
          </h3>
        </div>
      </div>
      <!-- /basic datatable -->

      <div class="row">
        <div class="col-lg-12">

          <!-- Quick stats boxes -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Current server load -->
              <div class="panel bg-teal-400">
                <div class="panel-body">
                  <div class="heading-elements">
                    <span class="heading-text"></span>
                  </div>
                  <h3 class="no-margin">
                    <?= number_format($this->db->get('tbl_siswa')->num_rows(), 0, ",", "."); ?>
                  </h3>
                  Calon Siswa yang mendaftar Tahun 2022-2023
                </div>
              </div>
              <!-- /current server load -->
            </div>

            <div class="col-lg-6">
              <!-- Current server load -->
              <div class="panel bg-orange-400">
                <div class="panel-body">
                  <div class="heading-elements">
                    <span class="heading-text"></span>
                  </div>
                  <h3 class="no-margin">
                    <?= number_format($this->db->get_where('tbl_siswa', "status_pendaftaran='lulus'")->num_rows(), 0, ",", ".");  ?>
                  </h3>
                  Calon Siswa yang Lulus PPDB Tahun 2022-2023
                </div>
              </div>
              <!-- /current server load -->
            </div>

          </div>
          <!-- /quick stats boxes -->


        </div>

      </div>

      <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
        <div class="alert alert-info alert-dismissible" role="alert">
          <form action="" method="post">
            <button type="submit" name="btnnonaktif" class="btn btn-primary" onclick="return confirm('Anda Yakin?')"><i class="icon-laptop"></i> Tutup Pendaftaran PPDB Online!</button>
            <strong>Status Pendaftaran PPDB Online</strong> masih dibuka. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_ppdb->tgl_diubah)); ?>.
          </form>
        </div>
      <?php } else { ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <form action="" method="post">
            <button type="submit" name="btnaktif" class="btn btn-warning" onclick="return confirm('Anda Yakin?')"><i class="icon-laptop"></i> Buka Pendaftaran PPDB Online!</button>
            <strong>Status Pendaftaran PPDB Online</strong> masih ditutup. Terakhir diubah <?php echo date('d-m-Y H:i:s', strtotime($web_ppdb->tgl_diubah)); ?>.
          </form>
        </div>
      <?php } ?>

    </div>
    <!-- /dashboard content -->

    <div class="row">
      <div class="panel panel-flat col-md-12">
        <div class="panel-body">
          <fieldset class="content-group">
            <legend class="text-bold"><i class="icon-stats-dots"></i> Grafik Statistik Pendaftaran Siswa Tahun 2022/2023</legend>
            <?php $this->load->view('admin/statistik/pendaftar'); ?>
          </fieldset>
        </div>
      </div>
    </div>