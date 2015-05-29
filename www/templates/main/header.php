<div class="ct-menuMobile">
    <div class="ct-menuMobile-logo"><a href="<?php echo SITE_DIR; ?>"><img src="<?php echo SITE_DIR; ?>images/main/qcop_logo_small.png" alt=""/></a></div>
    <ul class="ct-menuMobile-navbar">
        <li class="active"><a href="<?php echo SITE_DIR; ?>"><span>Home</span></a></li>
        <li><a href="<?php echo SITE_DIR; ?>category/"><span>Квадрокоптеры</span></a></li>
        <li><a href="<?php echo SITE_DIR; ?>"><span>Our gallery</span></a></li>
        <li class="dropdown"><a href="rent-now.html"><span>Rent Now</span></a>
            <ul class="dropdown-menu">
                <li><a href="rent-now.html"><span>Rent Now</span></a></li>
                <li><a href="rent-item.html"><span>Rent Item</span></a></li>
                <li><a href="rent-page-variation-1.html"><span>Rent Page v1</span></a></li>
                <li><a href="rent-page-variation-2.html"><span>Rent Page v2</span></a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="blog.html"><span>Blog</span></a>
            <ul class="dropdown-menu">
                <li><a href="blog.html"><span>Blog</span></a></li>
                <li><a href="blog-single.html"><span>Blog Single</span></a></li>
                <li><a href="blog-archive.html"><span>Blog Archive</span></a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="events.html"><span>Events</span></a>
            <ul class="dropdown-menu">
                <li><a href="events.html"><span>Events</span></a></li>
                <li><a href="event-single.html"><span>Event Single 1</span></a></li>
                <li><a href="event-single2.html"><span>Event Single 2</span></a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="account.html"><span>Pages</span></a>
            <ul class="dropdown-menu">
                <li><a href="account.html"><span>My Account</span></a></li>
                <li><a href="login.html"><span>Login</span></a></li>

                <li><a href="404.html"><span>404</span></a></li>
            </ul>
        </li>
        <li><a href="services.html"><span>Services</span></a></li>
        <li><a href="contact.html"><span>Contact</span></a></li>
    </ul>
</div>

<div id="ct-js-wrapper" class="ct-pageWrapper">

    <nav class="navbar navbar-default ct-navbar ct-shadow ct-shadow--type1">

        <div class="navbar-header">
            <a class="ct-logoDark" href="index.html"><img src="<?php echo SITE_DIR; ?>images/main/qcop_logo_small.png" alt=""/></a>
        </div>

        <div class="container">
            <div class="ct-navbarBox">
                <a href="login.html" class="ct-login"><span>Войти</span><i class="fa fa-lock"></i></a>
                <div class="ct-navbarBox-meta">
                    <div class="ct-navSearch-box">
                        <a class="ct-js-navSearch ct-navSearch" href="#"><i class="fa fa-search"></i></a> <!-- Navbar Search  -->
                        <div class="ct-navbar-search">
                            <form role="form">
                                <div class="form-group  ct-input--type2">
                                    <input id="searchM" required="" type="text" name="field[]" placeholder="Поиск..." class="form-control">
                                    <label for="searchM"><span>Search</span></label>
                                    <button class="ct-navbar-search-button" type="submit">
                                        <i class="fa fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
<!--                    <div class="ct-langPicker">-->
<!--                        <div class="ct-langPicker-content">-->
<!--                            <a href="#"><img src="--><?php //echo SITE_DIR; ?><!--images/demo-content/flag-01.jpg" alt=""/></a>-->
<!--                            <ul class="ct-langPicker-list">-->
<!--                                <li><a href="#">English <img src="--><?php //echo SITE_DIR; ?><!--images/demo-content/flag-01.jpg" alt=""/></a></li>-->
<!--                                <li><a href="#">Español <img src="--><?php //echo SITE_DIR; ?><!--images/demo-content/flag-03.jpg" alt=""/></a></li>-->
<!--                                <li><a href="#">Italiano <img src="--><?php //echo SITE_DIR; ?><!--images/demo-content/flag-02.jpg" alt=""/></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div> <!-- Flags -->
                </div>

                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <ul class="nav navbar-nav ct-navbar--fadeIn">
                <!--=========================================================================-->
                <li<?php if(registry::get('route') == '') echo ' class="active"'; ?>>
                    <a href="<?php echo SITE_DIR; ?>">
                        <div class="ct-textEffect"><span data-content="Главная">Главная</span></div>
                    </a>
                </li>
                <!--=========================================================================-->
                <li<?php if(registry::get('route') == 'category') echo ' class="active"'; ?>>
                    <a href="<?php echo SITE_DIR; ?>category/">
                        <div class="ct-textEffect"><span data-content="Квадрокоптеры">Квадрокоптеры</span></div>
                    </a>
                </li>
<!--                <li class="dropdown">-->
<!--                    -->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="about.html"><span>О нас</span></a></li>-->
<!--                        <li><a href="gallery.html"><span>Галерея</span></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <!--=========================================================================-->
                <li<?php if(registry::get('route') == 'spares') echo ' class="active"'; ?>>
                    <a href="<?php echo SITE_DIR; ?>spares/">
                        <div class="ct-textEffect"><span data-content="Комплектующие">Комплектующие</span></div>
                    </a>
                </li>
                <li<?php if(registry::get('route') == 'reviews') echo ' class="active"'; ?>>
                    <a href="<?php echo SITE_DIR; ?>reviews/">
                        <div class="ct-textEffect"><span data-content="Обзоры">Обзоры</span></div>
                    </a>
                </li>
                <li<?php if(registry::get('route') == 'news') echo ' class="active"'; ?>>
                    <a href="<?php echo SITE_DIR; ?>news/">
                        <div class="ct-textEffect"><span data-content="Новости">Новости</span></div>
                    </a>
                </li>
                <li<?php if(registry::get('route') == 'about') echo ' class="active"'; ?>>
                    <a href="<?php echo SITE_DIR; ?>about/">
                        <div class="ct-textEffect"><span data-content="Новости">О нас</span></div>
                    </a>
                </li>
                <li<?php if(registry::get('route') == 'contacts') echo ' class="active"'; ?>>
                    <a href="<?php echo SITE_DIR; ?>contacts/">
                        <div class="ct-textEffect"><span data-content="Новости">Контакты</span></div>
                    </a>
                </li>
<!--                <li class="dropdown"><a href="rent-now.html"><div class="ct-textEffect"><span data-content="Rent Now">Rent Now</span></div></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="rent-now.html"><span>Rent Now</span></a></li>-->
<!--                        <li><a href="rent-item.html"><span>Rent Item</span></a></li>-->
<!--                        <li class="ct-subDropdown"><a href="rent-page-variation-1.html">Rent Page</a>-->
<!--                            <ul class="ct-submenu dropdown-menu">-->
<!--                                <li><a href="rent-page-variation-1.html"><span>Rent Page v1</span></a></li>-->
<!--                                <li><a href="rent-page-variation-2.html"><span>Rent Page v2</span></a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <!--=========================================================================-->
<!--                <li class="dropdown"><a href="blog.html"><div class="ct-textEffect"><span data-content="Blog">Статьи</span></div></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="blog.html"><span>Blog</span></a></li>-->
<!--                        <li><a href="blog-single.html"><span>Blog Single</span></a></li>-->
<!--                        <li><a href="blog-archive.html"><span>Blog Archive</span></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <!--=========================================================================-->
<!--                <li class="dropdown"><a href="events.html"><div class="ct-textEffect"><span data-content="Events">Events</span></div></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="events.html"><span>Events</span></a></li>-->
<!--                        <li class="ct-subDropdown"><a href="event-single.html">Event Single</a>-->
<!--                            <ul class="ct-submenu dropdown-menu">-->
<!--                                <li><a href="event-single.html"><span>Event Single 1</span></a></li>-->
<!--                                <li><a href="event-single2.html"><span>Event Single 2</span></a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <!--=========================================================================-->
<!--                <li class="dropdown"><a href="account.html"><div class="ct-textEffect"><span data-content="Pages">Pages</span></div></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="account.html"><span>My Account</span></a></li>-->
<!--                        <li><a href="login.html"><span>Login</span></a></li>-->
<!---->
<!--                        <li><a href="404.html"><span>404</span></a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <!--=========================================================================-->
<!--                <li><a href="contact.html"><div class="ct-textEffect"><span data-content="Contact">Contact</span></div></a></li>-->
            </ul>

        </div>
    </nav>
    <div class="main-content">