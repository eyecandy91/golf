<?php
$value              = myprefix_get_theme_option('input_example');
$copyright          = myprefix_get_theme_option('footer_copyright');
$telephone          = myprefix_get_theme_option('telephone');
$twitter_handle     = myprefix_get_theme_option('twitter_handle');
$twitter_url        = myprefix_get_theme_option('twitter_url');
$address            = myprefix_get_theme_option('address');
$email_address      = myprefix_get_theme_option('email_address');
?>

<nav id="navbar" class="navbar is-spaced is-fixed-top navbar has-shadow is-spaced is-uppercase" itemscope="itemscope" itemtype="https://schema.org/SiteHeader">
    <div class="container">
        <div class="navbar-brand">
            <div class="navbar-item">
                <?php echo get_custom_logo(); ?>
            </div>
            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navMenuDocumentation" class="navbar-menu">
            <div class="navbar-end ">
                <!-- <ul>
                            <li><a class="is-active" href="#">Home</a></li>
                            <li><a id="service" href="#">Our services</a></li>
                            <li><a href="/contact.html">Contact</a></li>
                        </ul> -->
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'menu-1',
                    'menu_id'         => 'primary-menu',
                    // 'container'      => '1111',
                    'menu_class'      => 'navbar-nav ',
                    'list_item_class' => 'nav-item',
                    // 'link_class'     => 'nav-link m-2 menu-item nav-active'
                ));
                ?>
                <i class="fas fa-phone has-text-primary is-hidden-mobile"></i>
                <div class="phone-no has-text-primary is-hidden-mobile"><?php echo $telephone; ?></div>
            </div>
        </div>
    </div>
</nav>