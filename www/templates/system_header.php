<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>AGS TRADUCTION <?php echo (preg_match('/koan/', $_SERVER['HTTP_HOST']))? "K":"";?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="<?php echo SITE_DIR; ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo SITE_DIR; ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo SITE_DIR; ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>assets/global/plugins/fullcalendar/lib\cupertino/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>assets/global/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_DIR; ?>assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo SITE_DIR; ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>


    <link href="<?php echo SITE_DIR; ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo SITE_DIR; ?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo SITE_DIR; ?>assets/admin/layout2/css/themes/grey.css" id="style_color" rel="stylesheet" type="text/css"/>
    <link href="<?php echo SITE_DIR; ?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo SITE_DIR; ?>assets/admin/pages/css/tasks.css" rel="stylesheet" id="page_css01" type="text/css"/>
    <link href="<?php echo SITE_DIR; ?>assets/global/plugins/icheck/skins/all.css" type="text/css"/>
    <link href="<?php echo SITE_DIR; ?>css/jquery.fancybox.css"rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo SITE_DIR; ?>css/custom_style.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!--    <script src="--><?php //echo SITE_DIR; ?><!--assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>-->
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>assets/global/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo SITE_DIR; ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>assets/admin/pages/scripts/components-dropdowns.js"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-toastr/toastr.js"></script>
    <script src="<?php echo SITE_DIR; ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo SITE_DIR; ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo SITE_DIR; ?>js/jquery.fancybox.pack.js"></script>
    <?php foreach($scripts as $script): ?>
        <script src="<?php echo SITE_DIR; ?>js/<?php echo $script; ?>.js"></script>
    <?php endforeach; ?>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Demo.init(); // init demo features
            ComponentsDropdowns.init();
        });
    </script>
    <script type="text/javascript" src="<?php echo SITE_DIR; ?>js/script.js"></script>
</head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->


