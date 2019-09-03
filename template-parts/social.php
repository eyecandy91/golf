<?php
$tw            = myprefix_get_theme_option('twitter_url');
$fb            = myprefix_get_theme_option('facebook_url');
?>
<section data-aos="fade-down" class="section content page-featured-image social_media has-text-centered">
    <div class="container">
        <h1 data-aos="fade-down" class="title is-2 is-size-3-mobile ">Follow Us On Facebook or Twitter</h1>
        <div class="columns is-mobile is-centered">
            <div class="column is-narrow">
                <a class="twitter" href="<?php echo $tw ?>" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="column is-narrow">
                <a class="facebook" href="<?php echo $fb ?>" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </div>
</section>