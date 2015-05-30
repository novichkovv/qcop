</aside><!-- /.right-side -->

</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/jquery.min.js" type="text/javascript"></script>

<!-- jQuery UI 1.10.3 -->
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/bootstrap.min.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/plugins/chart.js" type="text/javascript"></script>

<!-- datepicker
<script src="<?php //echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
<!-- Bootstrap WYSIHTML5
<script src="<?php //echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
<!-- iCheck -->
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- calendar -->
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

<!-- Director App -->
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/Director/app.js" type="text/javascript"></script>

<!-- Director dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/theme/Director/dashboard.js" type="text/javascript"></script>
<script src="<?php echo SITE_DIR; ?>js/script.js" type="text/javascript"></script>
<script src="<?php echo SITE_DIR . 'js/'  . PROJECT;  ?>/script.js" type="text/javascript"></script>

<!-- Director for demo purposes -->
<script>
    $('#noti-box').slimScroll({
        height: '400px',
        size: '5px',
        BorderRadius: '5px'
    });

    $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
        checkboxClass: 'icheckbox_flat-grey',
        radioClass: 'iradio_flat-grey'
    });
</script>
<script type="text/javascript">
    $(function() {
        "use strict";
        //BAR CHART
        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };
        new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
            responsive : true,
            maintainAspectRatio: false,
        });

    });
    // Chart.defaults.global.responsive = true;
</script>
</body>
</html>