<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body"> Page content goes here </div>
            <div class="modal-footer">
                <button type="button" class="btn blue">Save changes</button>
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-4">
        <h3 class="page-title"> Tableau de bord </h3>
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="portlet box blue-steel">
                    <div class="portlet-title">
                        <div class="caption"> <i class="fa fa-envelope-o"></i>Courriels </div>
                        <div class="actions">
                            <div class="btn-group"> <a class="btn btn-sm btn-default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filtrer par <i class="fa fa-angle-down"></i> </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                    <label>
                                        <input type="checkbox"/>
                                        Nouveau</label>
                                    <label>
                                        <input type="checkbox" />
                                        Modifications</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="new_emails" class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                            <ul class="feeds">
                                <?php //include(ROOT_DIR . "common" . DS . "mailboxes0.php"); ?>
                            </ul>
                        </div>
                        <div class="scroller-footer">
                            <div class="btn-arrow-link pull-right"> <a href="#">Voir tous les courriels</a> <i class="icon-arrow-right"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
</div>