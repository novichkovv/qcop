<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo"> <a href="index.html"> <img src="../../assets/admin/layout2/img/logo-default.png" alt="logo" class="logo-default"/> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions">
            <div class="btn-group">
                <button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-plus"></i>&nbsp;<span class="hidden-sm hidden-xs">Ajouter&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i> </button>
                <ul class="dropdown-menu" role="menu">
                    <li> <a href="#"> <i class="icon-book-open"></i> Nouvelle commande </a> </li>
                    <li> <a href="../clients/client_add.php"> <i class="icon-star"></i> Nouveau client </a> </li>
                    <li> <a href="#"> <i class="icon-users"></i> Nouveau contact </a> </li>
                    <li> <a href="#"> <i class="icon-users"></i> Nouveau traducteur </a> </li>
                    <li class="divider"> </li>
                    <li> <a href="#"> <i class="icon-user-follow"></i> Nouvel utilisateur </a> </li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-circle green-haze dropdown-toggle hide" data-toggle="dropdown"> <i class="fa fa-plus"></i>&nbsp;<span class="hidden-sm hidden-xs">Create&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i> </button>
                <ul class="dropdown-menu" role="menu">
                    <li> <a href="#"> <i class="icon-docs"></i> New Post </a> </li>
                    <li> <a href="#"> <i class="icon-tag"></i> New Comment </a> </li>
                    <li> <a href="#"> <i class="icon-share"></i> Share </a> </li>
                    <li class="divider"> </li>
                    <li> <a href="#"> <i class="icon-flag"></i> Comments <span class="badge badge-success">4</span> </a> </li>
                    <li> <a href="#"> <i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span> </a> </li>
                </ul>
            </div>
        </div>

        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->

        <div class="page-top">
            <script language="javascript">
                function changeSection(fld){
                    alert(fld.value);
                    return true}
            </script>

            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
            <form  id="search_form"  name="search_form" class="search-form" action="../search/search_results.php" method="GET">
                <div style="width: 410px; height: 45px; display: -webkit-flex; /* Safari */ -webkit-align-items: center; /* Safari 7.0+ */  display: flex; align-items: center;" >
                    <div style="position:relative;display: inline-block;float:left; padding-top:20px;" >
                        <select class="bs-select form-control input-small" data-style="btn-primary" id="cherche" name="cherche" onChange="changeSection(this)">
                            <option value="sstraduction2">Sous traduction (par N°)</option>
                            <option value="numcommande">N° de commande</option>
                            <option value="refclient">Référence client</option>
                            <option value="devis">N° de devis</option>
                            <option value="client">Client</option>
                            <option value="contact">Contact</option>
                            <option value="traducteur">Traducteur (par nom)</option>
                            <option value="codeclient">Code client </option>
                            <option value="sstraduction1">Sous traduction (par titre doc)</option>
                        </select>
                    </div>
                    <div style="position:relative;display: inline-block;float:left;margin-left:50px;margin-right:-23px;padding-top:21px;">
                        <div class="col-md-12">
                            <input name="client_code" type="text" class="form-control champ4" id="client_code" />
                        </div>
                    </div>
                    <div style=" -webkit-flex: 1; flex: 1; padding-top:19px;"><a href="#" class="btn submit"> <i class="icon-magnifier btn-loupe"></i> </a> </div>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?php echo registry::get('user')['user_avatar']; ?>"/> <span class="username username-hide-on-mobile">
                                <?php echo registry::get('user')['user_first_name']; ?>
                            </span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">
                            <li> <a href="/profile"> <i class="icon-user"></i> Mon Profil</a> </li>
                            <li> <a href="page_calendar.html"> <i class="icon-calendar"></i> Mon Calendrier</a></li>
                            <li> <a href="#"> <i class="icon-rocket"></i> Mes Tâches</a> </li>
                            <li class="divider"> </li>
                            <li> <a href="#" id="logout_button"> <i class="icon-lock"></i> Fermer la session</a> </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<body class="page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed-mobile page-footer-fixed1">
<!-- BEGIN HEADER -->
<!-- END HEADER -->
<div class="clearfix"> </div>
<!-- BEGIN CONTAINER -->
<div class="page-container">

<?php require_once(ROOT_DIR . 'templates' . DS . 'sidebar.php'); ?>

<!-- BEGIN CONTAINER -->
    <div class="page-content-wrapper">

    <div class="page-content">
        <?php if($log): ?>
        <div id="log">
            <pre>
                <?php foreach($log as $l): ?>
                    <?php echo $l; ?><hr />
                <?php endforeach; ?>
            </pre>
        </div>
        <div id="log-button">
        </div>
        <?php endif; ?>