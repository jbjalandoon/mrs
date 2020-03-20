        </div>
      </main>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="<?= base_url() ?>/public/js/jquery-3.3.1.slim.min.js"></script> -->
    <script src="<?= base_url() ?>public/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>public/js/popper.min.js"></script>
    <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>public/js/scripts.js"></script>
    <script src="<?= base_url() ?>public/js/sweetalert2@9.js"></script>
    <script src="<?= base_url() ?>public/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url() ?>public/js/moment.min.js"></script>
    <script src="<?= base_url() ?>public/chart/Chart.min.js"></script>
    <script src="<?= base_url() ?>public/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>public/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>public/chart/utils.js"></script>
    <script type="text/javascript">
      var baseURL = "<?php echo base_url(); ?>";
    </script>
    <script src="<?= base_url() ?>public/js/myAlerts.js"></script>

    <script src="<?= base_url() ?>public/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/myJavascript.js"></script>
    <script src="<?= base_url() ?>public/js/user_profile.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        $(document).ready(function() {
            $('#allergy_id').select2({
              tags: true
            });
        });
        $(document).ready(function() {
            $('#condition_id').select2({
              tags: true
            });
        });
        $(document).ready(function() {
            $('#reaction_id').select2({
              tags: true
            });
        });
        <?php if (isset($health_summary)): ?>
        var timeFormat = 'MM/DD/YYYY HH:mm';
        function newDate(days) {
          return moment().add(days, 'd').toDate();
        }

        function newDateString(days) {
          return moment().add(days, 'd').format(timeFormat);
        }
        var color = Chart.helpers.color;
        var config = {
          type: 'line',
          data: {
            labels: [
              <?php
              foreach ($health_summary as $summary) {
                ?>
                  new Date(<?php echo date(strtotime($summary['created_at'])) ?>*1000),
                <?php
              }
              ?>
            ],
            datasets: [{
              label: 'Weight',
              backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
              borderColor: window.chartColors.red,
              fill: false,
              data: [
                <?php
                  foreach ($health_summary as $summary) {
                    echo $summary['weight'] . ',';
                  }
                ?>
              ],
            }]
          },
          options: {
            title: {
              text: 'Chart.js Time Scale'
            },
            scales: {
              xAxes: [{
                type: 'time',
                time: {
                  parser: timeFormat,
                  // round: 'day'
                  tooltipFormat: 'll HH:mm'
                },
                scaleLabel: {
                  display: true,
                  labelString: 'Date'
                }
              }],
              yAxes: [{
                scaleLabel: {
                  display: true,
                  labelString: 'value'
                }
              }]
            },
          }
        };

        window.onload = function() {
          // alert(newDate(1));
          // alert(newDate(0));
          var ctx = document.getElementById('canvas').getContext('2d');
          window.myLine = new Chart(ctx, config);

        };
        <?php endif; ?>

        $(document).ready(function() {
            $('.index-table').DataTable({
            });
        });

    </script>

  </body>
</html>
