<div style="height: 100px;" class="hidden-xs"></div>
<div class="row">
    <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-4">
        <section class="panel" style="border: 1px solid #39435C;">
            <header class="panel-heading text-center" style="background-color: #39435C;">
                <img src="<?php echo SITE_DIR; ?>images/main/qcop_logo_small_wite.png" id="authorization-logo">
            </header>
            <div class="panel-body">
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <label for="inputEmail1" class="control-label">Login</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <label for="inputPassword1" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-1 col-lg-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" name="login_btn" class="btn btn-danger btn-lg">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>