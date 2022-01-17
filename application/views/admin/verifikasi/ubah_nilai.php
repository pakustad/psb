<div class="content-wrapper">
    <div class="content">
        <div class="col-md-12"></div>
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <fieldset class="contebt-group">
                        <legend class="text-bold"> Ubah Nilai Siswa </legend>
                        <?php
                        echo $this->session->flashdata('msg');
                        ?>
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group">
                                <label class="col-sm-3">No Pendaftaran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $siswa->no_pendaftaran; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?php echo $siswa->nama_lengkap; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Matematika</label>
                                <div class="col-sm-9">
                                    <input type="number" name="nmatematika" class="form-control" value="<?php echo $nilai->matematika ?? 0 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Bahasa Inggris</label>
                                <div class="col-sm-9">
                                    <input type="number" name="nb_inggris" class="form-control" value="<?php echo $nilai->b_inggris ?? 0 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">IPA</label>
                                <div class="col-sm-9">
                                    <input type="number" name="nipa" class="form-control" value="<?php echo $nilai->ipa ?? 0 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">IPS</label>
                                <div class="col-sm-9">
                                    <input type="number" name="nips" class="form-control" value="<?php echo $nilai->ips ?? 0 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Baca Tulis Al-Quran</label>
                                <div class="col-sm-9">
                                    <input type="number" name="nb_t_alquran" class="form-control" value="<?php echo $nilai->b_t_alquran ?? 0 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">English Conversation</label>
                                <div class="col-sm-9">
                                    <input type="number" name="ne_conversation" class="form-control" value="<?php echo $nilai->e_conversation ?? 0 ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Minat Peserta Didik</label>
                                <div class="col-sm-9">
                                    <input type="text" name="minat" class="form-control" value="<?php echo $nilai->minat ?? '' ?>">
                                </div>
                            </div>
                            <hr>
                            <a href="panel_admin/verifikasi" class="btn btn-default">
                                << Data Verifikasi</a>
                                    <button type="submit" name="ubahnilai" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>