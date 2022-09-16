<?php
$thn_ppdb = $this->db->get_where('tbl_web')->row('thn_ppdb');
?>
<style>
  #chart {
    z-index: -10;
  }
</style>

<!-- Dashboard content -->

<center>
  <div id="chart">
  </div>
</center>

<!-- /dashboard content -->

<!-- <script src="assets/highcharts/jquery.min.js" type="text/javascript"></script> -->
<script src="assets/panel/highcharts/highcharts.js" type="text/javascript"></script>
<script src="assets/panel/highcharts/modules/exporting.js" type="text/javascript"></script>
<script src="assets/panel/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(function() {
    new Highcharts.Chart({
      chart: {
        renderTo: 'chart',
        type: 'line',
      },
      title: {
        text: 'Grafik Statistik Data Pendaftaran Tahun <?= $thn_ppdb; ?>/<?= $thn_ppdb + 1; ?>',
        x: -20
      },
      subtitle: {
        text: 'Jumlah Data Pendaftar',
        x: -20
      },
      xAxis: {
        categories: ['Ags', 'Sep', 'Okt', 'Nov', 'Des', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
          'Jul'
        ]
      },
      yAxis: {
        title: {
          text: 'Total Data Pendaftar'
        }
      },
      tooltip: {
        valueSuffix: ' Orang'
      },
      series: [{
        name: 'Data Pendaftar',
        data: <?php echo json_encode($grafik); ?>
      }]
    });
  });

  function thn() {
    var thn = $('[name="thn"]').val();
    window.location = "panel_admin/statistik/thn/";
  }
  $('[name="thn"]').select2({
    placeholder: "- Tahun -"
  });
</script>