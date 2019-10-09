<?php
$shop_email             = myprefix_get_theme_option('shop_email_address');
$shop_phone             = myprefix_get_theme_option('telephone_shop');
$booking_text           = myprefix_get_theme_option('booking_text');
$booking_url            = myprefix_get_theme_option('booking_url');
$copyright              = myprefix_get_theme_option('footer_copyright');
$telephone_shop         = myprefix_get_theme_option('telephone');
$telephone_food         = myprefix_get_theme_option('telephone_food');
$address                = myprefix_get_theme_option('address');
$email_address          = myprefix_get_theme_option('email_address');
$fax                    = myprefix_get_theme_option('fax');
$rest_email             = myprefix_get_theme_option('rest_email');


if (have_rows('content_boxes')) :

    while (have_rows('content_boxes')) : the_row();

        // vars
        $title          = get_sub_field('content_title');
        $info           = get_sub_field('content_info');
        $program        = get_sub_field('content_button_link');
        $button_norm    = get_sub_field('content_button');
        $button_url     = get_sub_field('content_button_url');
        $button_name    = get_sub_field('content_button_name');
        $img            = get_sub_field('content_background');
        $show           = get_sub_field('show_1');
        $file           = get_sub_field('content_button_file');
        ?>

        <?php if ($show == 1) { ?>
            <section class="section content <?php if (get_field('slim_design')) : ?>is-slim<?php endif; ?>">
                <div class="container">
                    <div class="columns is-gapless is-vcentered content-area has-background-light <?php if (get_sub_field('content_reverse')) : ?>reverse<?php endif; ?>">

                        <div data-aos="fade-down" class="column page-featured-image is-half-tablet" style="background-image: url('<?php echo $img ?>')"></div>

                        <div data-aos="fade-right" class="column is-half-tablet half-content">
                            <?php if (!empty($title)) : ?>
                                <h1 class="title is-2 is-size-3-mobile"><?php echo $title ?></h1>
                            <?php endif; ?>

                            <?php if (!empty($info)) : ?>
                                <?php echo $info ?>
                            <?php endif; ?>

                            <?php
                if (is_page(array('weddings-functions', 'christmas-package'))) :
                    get_template_part('template-parts/menus');
                endif;
                ?>

                            <?php

                            if (is_page('contact-us')) : ?>
                                <div class="is-contact">
                                    <div class="control">
                                        <div class="contact-block is-text is-marginless is-paddingless">
                                            <span class="is-title">Enquiries </span>
                                            <div class="row has-text-weight-light">
                                                <div>
                                                    <span class="icon is-small">
                                                        <i class="fas fa-phone"></i>
                                                    </span>
                                                    <span><?php echo $telephone_shop; ?></span>
                                                </div>
                                                <div class="email"><?php echo $email_address; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control">
                                        <div class="contact-block is-text is-marginless is-paddingless">
                                            <span class="is-title">Fax </span>
                                            <div class="row has-text-weight-light">
                                                <div>
                                                    <span class="icon is-small">
                                                        <i class="fas fa-fax"></i>
                                                    </span>
                                                    <span><?php echo $fax; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control">
                                        <div class="contact-block is-text is-marginless is-paddingless">
                                            <span class="is-title">Pro shop </span>
                                            <div class="row has-text-weight-light">
                                                <div>
                                                    <span class="icon is-small">
                                                        <i class="fas fa-golf-ball"></i>
                                                    </span>
                                                    <span><?php echo $shop_phone; ?></span>
                                                </div>
                                                <div class="email"><?php echo $shop_email; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control">
                                        <div class="contact-block is-text is-marginless is-paddingless">
                                            <span class="is-title">Rivers restuarant</span>
                                            <div class="row has-text-weight-light">
                                                <div>
                                                    <span class="icon is-small">
                                                    <i class="fas fa-utensils"></i>
                                                    </span>
                                                    <span><?php echo $telephone_food; ?></span>
                                                </div>
                                                <div class="email"><?php echo $rest_email; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;

                        if (is_page('Pro shop & driving range')) : ?>
                                <div>
                                    <p class="control">
                                        <a class="button is-dark">
                                            <span class="icon is-small">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                            <span><?php echo $shop_phone; ?></span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-primary is-outlined is-marginless">
                                            <span class="icon is-small">
                                                <i class="fas fa-envelope-open-text"></i>
                                            </span>
                                            <span><?php echo $shop_email; ?></span>
                                        </a>
                                    </p>
                                </div>
                            <?php endif; ?>


                            <?php if ($program == 2) { ?>
                                <div class="field is-grouped">
                                    <a href="<?php echo $button_norm ?>" class="button is-dark"><?php echo $button_name ?></span></a>
                                </div>
                            <?php } else if ($program  == 3) { ?>
                                <div class="field is-grouped">
                                    <a href="<?php echo $button_url ?>" class="button is-dark"><?php echo $button_name ?></span></a>
                                </div>
                            <?php } else if ($program  == 4) { ?>
                                <div class="field is-grouped">
                                    <a target="_blank" href="<?php echo $file['url'] ?>" class="button is-dark">
                                        <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
                                        <span><?php echo $button_name ?></span>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </section>

        <?php } ?>

    <?php endwhile; ?>

<?php endif; ?>