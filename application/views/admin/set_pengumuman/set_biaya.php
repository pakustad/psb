<?php
function rupiah($angka)
{

    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
?>
<div class="content-wrapper">
    <div class="content">
        <div class="col-md-12"></div>
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <fieldset class="contebt-group">
                        <legend class="text-bold"> Setting Biaya </legend>
                        <?php
                        echo $this->session->flashdata('msg');
                        ?>
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group">
                                <label class="col-sm-3">Biaya Pendaftaran</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="pendaftaran" class="form-control" value="<?= $v_cost->pendaftaran; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Uang Pangkal/Bangunan (Boarding)</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="bd_pangkal" class="form-control" value="<?= $v_cost->bd_pangkal; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Uang Pangkal/Bangunan (Fullday)</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="fd_pangkal" class="form-control" value="<?= $v_cost->fd_pangkal; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Infaq Pendidikan (Boarding)</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="bd_spp" class="form-control" value="<?= $v_cost->bd_spp; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Infaq Pendidikan (Fullday)</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="fd_spp" class="form-control" value="<?= $v_cost->fd_spp; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Kegiatan Tahunan</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="tahunan" class="form-control" value="<?= $v_cost->tahunan; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Seragam dan Buku Paket (Boarding)</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="bd_paket" class="form-control" value="<?= $v_cost->bd_paket; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3">Seragam dan Buku Paket (Fullday)</label>
                                <div class="col-sm-9">
                                    <input type="text" onkeypress="return hanyaAngka(event)" name="fd_paket" class="form-control" value="<?= $v_cost->fd_paket; ?>" style="text-align: right; width: unset;">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" name="ubahnilai" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, "Rp. ");
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }
</script>