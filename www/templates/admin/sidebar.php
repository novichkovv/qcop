<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/26115.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Привет, <?php echo registry::get('user')['user_name']; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <?php foreach($sidebar as $k => $v): ?>
                <li <?php if(registry::get('route_parts')[0] == $v['route']) echo 'class="active"' ?>>
                    <?php if(!$v['children']): ?>
                        <a href="<?php echo ($v['external'] ? '' : SITE_DIR ) . ($v['route'] ? $v['route'] .'/' : '') ; ?>">
                    <?php endif; ?>
                    <?php if($v['children']): ?>
                        <a href="#" class="expand">
                    <?php endif; ?>
<!--                    <a href="--><?php //echo SITE_DIR . $v['route']; ?><!--/">-->
                        <?php if($v['icon']) echo '<i class="' . $v['icon'] . '"></i>'; ?>
                        <span><?php echo $v['title']; ?></span>
                    </a>
                        <?php if($v['children']): ?>
                            <ul class="sub-menu">
                                <?php foreach($v['children'] as $child): ?>
                                    <li>
                                        <a href="<?php echo SITE_DIR . $child['route']; ?>/">
                                            <i class="<?php echo $child['icon']; ?>"></i>
                                            <?php echo $child['title']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                </li>
            <?php endforeach; ?>
<!--            <li class="active">-->
<!--                <a href="index.html">-->
<!--                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="general.html">-->
<!--                    <i class="fa fa-gavel"></i> <span>General</span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <a href="basic_form.html">-->
<!--                    <i class="fa fa-globe"></i> <span>Basic Elements</span>-->
<!--                </a>-->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <a href="simple.html">-->
<!--                    <i class="fa fa-glass"></i> <span>Simple tables</span>-->
<!--                </a>-->
<!--            </li>-->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<aside class="right-side">
    <!-- Main content -->
    <section class="content">