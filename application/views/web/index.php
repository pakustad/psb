<?php
$ceks = $this->session->userdata('no_pendaftaran');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online | SMA PESANTREN TERPADU HAYATAN THAYYIBAH</title>
    <base href="<?php echo base_url(); ?>" />

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="img/logo.svg" alt="Logo" width="30" style="position:absolute;margin-top:-5px;"> <span style="margin-left:35px;">PPDB Online</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><img src="img/logo.svg" alt="Logo" width="15"> Tentang Sekolah</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-info-circle"></i> Informasi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#cost"><i class="fa fa-money"></i> Biaya</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone-square"></i> Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <?php
        if (strtolower($this->uri->segment(1)) == 'logcs') {
            $this->load->view('web/login');
        } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><br><br>
                    <img class="img-responsive" src="https://smahatoy.sch.id/uploads/images/slider/sekolah_penggerak.webp" style="margin-top:-15%;margin-bottom:-10px;" width="250">
                    <div class="intro-text"><br />
                        <span class="name shad" style="font-size:35px">PPDB ONLINE <br> SMA PESANTREN TERPADU HAYATAN THAYYIBAH</span>

                        <br>
                        <?php if ($web_ppdb->status_ppdb == 'buka') { ?>
                            <!--        <span class="skills">
                        	<a href="files/Panduan_PPDB_Online_SMAN1_Belitang.pdf" class="btn btn-danger btn-lg"><i class="fa fa-file-pdf-o faa-pulse animated"></i> &nbsp;Download Panduan PPDB Online</a>  
                        </span>
                        <br> <br>-->
                            <hr class="star-light">
                            <br>
                            <span>
                                <a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online</a>
                                <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;<?php if ($ceks == '') {
                                                                                                                                                                        echo "Login";
                                                                                                                                                                    } else {
                                                                                                                                                                        echo "Panel";
                                                                                                                                                                    } ?> Calon Siswa</a>
                                <br>
                            </span>
                        <?php } else { ?>
                            <span class="skills">
                            </span>
                            <br> <br>
                            <hr class="star-light">
                            <br>
                            <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online SMA NEGERI 1 Belitang</h3> -->
                            <span>
                                <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
                                <br>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Booklet PPDB 2023-2024</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-item">
                    <a href="https://drive.google.com/file/d/1hd4A7khy0tmzX2AQ1TLL1HozjDqtFLR7/view?usp=sharing" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/logo.svg" class="img-thumbnail" alt=""><br><br>
                        <span class="btn btn-success btn-block">SMAS Hayatan Thayyibah</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi PPDB Online</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify">
                    <p>SMA PESANTREN TERPADU HAYATAN THAYYIBAH menyediakan PPDB secara <i>online</i> diharapkan proses PPDB dapat berjalan cepat dan bisa dilakukan dimanapun dan kapanpun selama sesi PPDB Online dibuka. Proses pendaftaran calon siswa baru tidak menggunakan formulir konvensional hanya dengan mengakses website PPDB Online SMA PESANTREN TERPADU HAYATAN THAYYIBAH. </p>
                </div>
                <div class="col-lg-4" style="text-align:justify">
                    <p>Pengisian form PPDB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses PPDB. Setelah proses pengisian form PPDB secara online berhasil dilakukan, calon siswa akan mendapatkan bukti pendaftaran dengan nomor pendaftaran akan digunakan sebagai akses login untuk melanjutkan proses berikutnya.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                    <a href="#page-top" class="btn btn-md btn-outline">
                        <i class="fa fa-pencil-square-o "></i> PPDB Online
                    </a> &nbsp;&nbsp;
                    <a href="#prosedur" class="btn btn-md btn-outline">
                        <i class="fa fa-tasks"></i> Prosedur PPDB Online
                    </a>&nbsp;&nbsp;
                    <a href="logcs" class="btn btn-md btn-outline">
                        <i class="fa fa-sign-in"></i> <?php if ($ceks == '') {
                                                            echo "Login";
                                                        } else {
                                                            echo "Panel";
                                                        } ?> Calon Siswa
                    </a>&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </section>

    <section id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Prosedur PPDB Online</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <img class="img-responsive" src="img/alur_pendaftaran.png" alt="">
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                                <h4>Penjelasan Prosedur PPDB Online</h4>
                                <hr class="star-primary">
                                <ol style="font-size:18px;text-align:left">
                                    <li>Calon Siswa melakukan <b><a href="pendaftaran">Pendaftaran PPDB <i>online</i></a></b> melalui website <b><a href="">PPDB SMA PESANTREN TERPADU HAYATAN THAYYIBAH</a></b>.</li>
                                    <li>Calon Siswa mengisi Formulir Pendaftaran dan wajib <b>mencetak (Print Out) Formulir Pendaftaran serta Mempersiapkan Kelengkapan Berkas PPDB SMA PESANTREN TERPADU HAYATAN THAYYIBAH</b>.</li>
                                    <li>Calon Siswa Membayar Biaya Pendaftaran dan melampirkan bukti pembayarannya sebagai syarat dalam kelengkapan pemberkasan PPDB SMA PESANTREN TERPADU HAYATAN THAYYIBAH.</li>
                                    <li>Calon siswa datang ke SMA PESANTREN TERPADU HAYATAN THAYYIBAH untuk <b>VERIFIKASI</b>, dengan membawa <b>Bukti pendaftaran & Kelengkapan Berkas PPDB SMA PESANTREN TERPADU HAYATAN THAYYIBAH</b>. </li>
                                    <!--    <li>Panitia PPDB melakukan <b>Verifikasi dan Validasi Berkas Pendaftaran</b>.</li> -->
                                    <li>Calon Siswa Menerima <b>TANDA BUKTI VERIFIKASI</b> dan mengambil <b>NOMOR TEST</b>.</li>
                                    <!--    <li>Calon Siswa wajib mengambil <b>NOMOR TEST & Mengecek Ruang Ujian</b>.</li> -->
                                    <li>Calon Siswa wajib melakukan <b>TES SELEKSI AKADEMIK dan TES KESEHATAN</b>.</li>
                                    <li>PENGUMUMAN HASIL PPDB Online bisa dilihat di Web PPDB SMA PESANTREN TERPADU HAYATAN THAYYIBAH. Untuk <b>No. Pendaftaran</b> sesuaikan dengan <b>Formulir No. Pendaftaran</b> & <b>Passwordnya</b> yaitu <b>NISN</b> Calon Siswa tersebut.</li>
                                    <li>Calon Siswa yang dinyatakan <b>LULUS</b> maka Wajib <b>Registrasi/Daftar Ulang dengan Membayar minimal 50% dari Total Biaya Pendidikan paling lambat 9 hari setelah informasi kelulusan dan untuk pelunasannya paling lambat tanggal 15 Juli 2023</b> di <b>SMA PESANTREN TERPADU HAYATAN THAYYIBAH</b>.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost Section -->
    <section class="success" id="cost">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Biaya Pendidikan</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div dir="ltr" style="text-align: left;" trbidi="on"><br>
                <div class="col-lg-12 text-center">
                    <h4>Program Boarding</h4>
                </div>
                <div style="text-align: -webkit-center;">
                    <table border="1" cellpadding="0" cellspacing="0" class="MsoTable15Grid5DarkAccent1" style="background-color: white; border-collapse: collapse; border-spacing: 0px; border: medium none; box-sizing: border-box; color: #404040; font-family: Lato, sans-serif; font-size: 14px; line-height: 2; margin: 0px 0px 20px; max-width: 100%; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline; width: 825px;">
                        <tbody style="border: 0px none; box-sizing: border-box; font-family: inherit; font-size: 16px; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">No<o:p style="box-sizing: border-box;"></o:p></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white;  box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">Rincian<o:p style="box-sizing: border-box;"></o:p></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-style: none; border-style: solid none; border-top-color: white; border-top-width: 1pt; border-top: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">Nominal<o:p style="box-sizing: border-box;"></o:p></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">Keterangan<o:p style="box-sizing: border-box;"></o:p></span>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">1<o:p style="box-sizing: border-box;"></o:p></span></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Biaya Pendaftaran<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <?= number_format($reg->pendaftaran); ?><o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Panitia PPDB<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">2<o:p style="box-sizing: border-box;"></o:p></span></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Uang Pangkal/Bangunan<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <?= number_format($reg->bd_pangkal); ?><o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Dibayar 1x saat daftar ulang<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">3<o:p style="box-sizing: border-box;"></o:p></span></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Uang Infaq Pendidikan<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <?= number_format($reg->bd_spp); ?><o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Dibayar tiap bulan<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">4<o:p style="box-sizing: border-box;"></o:p></span></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Uang Kegiatan Tahunan<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <?= number_format($reg->tahunan); ?><o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Dibayar 1x dalam satu tahun<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <div style="text-align: center;">
                                            <span style="box-sizing: border-box; font-weight: 700;">Jumlah<o:p style="box-sizing: border-box;"></o:p></span>
                                        </div>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <span style="box-sizing: border-box; font-weight: 700;"><?= number_format($reg->pendaftaran + $reg->bd_pangkal + $reg->bd_spp + $reg->tahunan); ?><o:p style="box-sizing: border-box;"></o:p></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                </td>
                            </tr>
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;"><br>
                                            </span></span> <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;"><br>
                                            </span></span> <span style="color: white; font-family: inherit; font-style: inherit; font-weight: inherit; line-height: 2;">5</span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Seragam Sekolah<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0cm 0cm 0.0001pt 8.55pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Putih Abu, Biru Abu, Pramuka, Batik, Kaos Olahraga, Jas Almamater, Koko, Baju Silat PSTD<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Buku Paket Pelajaran<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Kasur, Bantal, Guling, Sprei<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <?= number_format($reg->bd_paket); ?><o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        Disediakan oleh Koperasi Sekolah<o:p style="box-sizing: border-box;"></o:p>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                    <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <div style="text-align: center;">
                                            <span style="box-sizing: border-box; font-weight: 700;">Total Biaya<o:p style="box-sizing: border-box;"></o:p></span>
                                        </div>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                    <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                        <span style="box-sizing: border-box; font-weight: 700;"><?= number_format($reg->pendaftaran + $reg->bd_pangkal + $reg->bd_spp + $reg->tahunan + $reg->bd_paket); ?><o:p style="box-sizing: border-box;"></o:p></span>
                                    </div>
                                </td>
                                <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right-color: white; border-right-width: 1pt; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                    <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <br style="box-sizing: border-box;">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div style="border: 0px none; box-sizing: border-box; color: #404040; font-family: Lato, sans-serif; font-size: 16px; line-height: 24px; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                        <div class="col-lg-12 text-center" style="color: #fff;">
                            <h4>Program Fullday</h4>
                        </div>
                        <div style="color: black; font-size: medium; text-align: -webkit-center;">
                            <table border="1" cellpadding="0" cellspacing="0" class="MsoTable15Grid5DarkAccent1" style="border-collapse: collapse; border-spacing: 0px; border: medium none; box-sizing: border-box; color: #404040; font-family: lato, sans-serif; font-size: 14px; line-height: 2; margin: 0px 0px 20px; max-width: 100%; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline; width: 825px;">
                                <tbody style="border: 0px none; box-sizing: border-box; font-family: inherit; font-size: 16px; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">No<o:p style="box-sizing: border-box;"></o:p></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white;  box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">Rincian<o:p style="box-sizing: border-box;"></o:p></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border-bottom: 1pt solid white; border-left-style: none; border-right-style: none; border-style: solid none; border-top: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">Nominal<o:p style="box-sizing: border-box;"></o:p></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">Keterangan<o:p style="box-sizing: border-box;"></o:p></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">1<o:p style="box-sizing: border-box;"></o:p></span></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Biaya Pendaftaran<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <?= number_format($reg->pendaftaran); ?><o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Panitia PPDB<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">2<o:p style="box-sizing: border-box;"></o:p></span></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Uang Pangkal/Bangunan<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <?= number_format($reg->fd_pangkal); ?><o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Dibayar 1x saat daftar ulang<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">3<o:p style="box-sizing: border-box;"></o:p></span></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Uang Infaq Pendidikan<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <?= number_format($reg->fd_spp); ?><o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Dibayar tiap bulan<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">4<o:p style="box-sizing: border-box;"></o:p></span></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Uang Kegiatan Tahunan<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <?= number_format($reg->tahunan); ?><o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Dibayar 1x dalam satu tahun<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="text-align: center;">
                                                    <div style="margin: 0px;">
                                                        <span style="box-sizing: border-box; font-weight: 700;">Jumlah<o:p style="box-sizing: border-box;"></o:p></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="box-sizing: border-box; font-weight: 700;"><?= number_format($reg->pendaftaran + $reg->fd_pangkal + $reg->fd_spp + $reg->tahunan); ?>
                                                        <o:p style="box-sizing: border-box;"></o:p>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;"><br>
                                                        </span></span><span style="box-sizing: border-box; font-weight: 700;"><span style="border: 0px none; box-sizing: border-box; color: white; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;"><br>
                                                        </span></span><span style="color: white; font-family: inherit; font-style: inherit; font-weight: inherit; line-height: 2;">5</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Seragam Sekolah<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0cm 0cm 0.0001pt 8.55pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Putih Abu, Biru Abu, Pramuka, Batik, Kaos Olahraga, Jas Almamater, Koko, Baju Silat PSTD<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Buku Paket Pelajaran</div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="font-family: inherit; font-style: inherit; font-weight: inherit;"><?= number_format($reg->fd_paket); ?></span>
                                                </div>
                                            </div>
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(222, 234, 246); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    Disediakan oleh Koperasi Sekolah<o:p style="box-sizing: border-box;"></o:p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                        <td style="background: none 0% 0% repeat scroll rgb(91, 155, 213); border: 1pt solid white; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 28.1pt;" valign="top" width="47">
                                            <div align="center" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: center; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 163.05pt;" valign="top" width="272">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="text-align: center;">
                                                    <div style="margin: 0px;">
                                                        <span style="box-sizing: border-box; font-weight: 700;">Total Biaya<o:p style="box-sizing: border-box;"></o:p></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 106.3pt;" valign="top" width="177">
                                            <div align="right" class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; text-align: right; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <span style="box-sizing: border-box; font-weight: 700;"><?= number_format($reg->pendaftaran + $reg->fd_pangkal + $reg->fd_spp + $reg->tahunan + $reg->fd_paket); ?>
                                                        <o:p style="box-sizing: border-box;"></o:p>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background: none 0% 0% repeat scroll rgb(189, 214, 238); border-bottom-color: white; border-bottom-width: 1pt; border-bottom: 1pt solid white; border-left-style: none; border-right: 1pt solid white; border-style: none solid solid none; border-top-style: none; box-sizing: border-box; font-family: inherit; font-style: inherit; margin: 0px; outline: currentcolor none 0px; padding: 0cm 5.4pt; vertical-align: baseline; width: 116.9pt;" valign="top" width="195">
                                            <div class="MsoNormal" style="border: 0px none; box-sizing: border-box; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 0.0001pt; outline: currentcolor none 0px; padding: 0px; vertical-align: baseline;">
                                                <div style="margin: 0px;">
                                                    <br style="box-sizing: border-box;">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="success" id="contact">
        <!-- <div class="container"> -->
        <div class="row" style="margin-top:-100px;margin-bottom:-105px; background-color:#fff; color:#333;">
            <div class="col-lg-4 text-center">
                <br><br>
                <h2>Kontak Kami</h2>
                <hr class="star-primary">
                <img src="http://localhost/hatoy/uploads/system/logo/logo-dark.png" class="img-responsive" style="width: 45%; display: block; margin-left: auto; margin-right: auto;">
                <h4>
                    JL. Karamat No. 123, 43122<br>
                    Sukabumi, Jawa Barat, Indonesia <br><br>
                </h4>
                <span style="color:#222;"><b><i class="fa fa-phone-square"></i> 0266-229851</b> </span>
                &nbsp;
                <span class="eml" style="color:#222;"><i class="fa fa-envelope"></i> info@smahatoy.sch.id</span>
                <br>
                <a href="http://www.smahatoy.sch.id" target="_blank">
                    <h4 class="btn btn-success">SMA PESANTREN TERPADU HAYATAN THAYYIBAH </h4>
                </a>
            </div>
            <div class="col-lg-8 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8872146340495!2d106.91547621436727!3d-6.904088769484464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6849d736f0dfa7%3A0x35a7444884ecf08e!2sSMA%20Pesantren%20Terpadu%20Hayatan%20Thayyibah%20Sukabumi!5e0!3m2!1sen!2sid!4v1570973358564!5m2!1sen!2sid" width="100%" height="465" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- </div> -->
    </section>



    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="http://www.smahatoy.sch.id" target="_blank" style="color: #ffff;">SMA Pesantren Terpadu Hayatan Thayyibah</a> <?php echo date('Y'); ?> | IT Development
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.min.js"></script>

</body>

</html>