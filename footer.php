<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<?php
// ez media theme option vars
$booking_text       = myprefix_get_theme_option('booking_text');
$booking_url        = myprefix_get_theme_option('booking_url');
$copyright          = myprefix_get_theme_option('footer_copyright');
$telephone_shop     = myprefix_get_theme_option('telephone');
$telephone_food     = myprefix_get_theme_option('telephone_shop');
$telephone          = myprefix_get_theme_option('telephone_food');
$twitter_handle     = myprefix_get_theme_option('twitter_handle');
$twitter_url        = myprefix_get_theme_option('twitter_url');
$address            = myprefix_get_theme_option('address');
$email_address      = myprefix_get_theme_option('email_address');
// get_template_part( 'template-parts/localhost' ); 
?>


<footer id="colophon" class="site-footer">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_theme_mod('logo_footer'); ?>" height="<?php echo $image[1]; ?>" width="" alt="<?php echo $image[2]; ?>" />
        </a>
    </div>

    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-2',
            'menu_id'        => 'secondary-menu',
            // 'before'         => '<i class="icon"></i>',
            // 'link_before'    => '<span class="icon is-small"><i class="fas fa-chevron-right"></i></span>',
            'items_wrap'     => '<ul class="is-uppercase has-text-weight-bold is-flex-tablet">%3$s</ul>',
            // 'container'       => 'div', 
            // 'container_class' => 'collapse navbar-collapse', 
            // 'container_id'    => 'navbarCollapse',
            // 'menu_class'      => 'is-uppercase', 
            // 'echo'            => true,
            // 'fallback_cb'     => 'wp_page_menu',
            // 'depth'           => 0
        ));
        ?>
    </div>

    <small class="has-text-grey has-text-centered is-fullwidth is-block"><?php echo $address; ?></small>
    <small class="has-text-grey has-text-centered is-fullwidth is-block is-flex-tablet"><div>Enquiries <span><?php echo $telephone; ?></span></div><div>Pro shop <span><?php echo $telephone_shop; ?></span></div><div>Rivers restuarant <span><?php echo $telephone_food; ?></span></div><div><a href="<?php echo $booking_url; ?>"><?php echo $booking_text; ?></a></div></small>
    <small class="has-text-grey has-text-centered is-fullwidth is-block"><?php echo $copyright; ?></small>

    
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<script>
    AOS.init({
        duration: 2000, // values from 0 to 3000, with step 50ms
        once: true, // whether animation should happen only once - while scrolling down
        offset: 0, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
    });
</script>

</body>

</html>