<?php if (have_rows('content_boxes')) :

    while (have_rows('content_boxes')) : the_row();

        // vars
        $title          = get_sub_field('content_title_3');
        $info           = get_sub_field('content_info_3');
        $program        = get_sub_field('content_button_link_3');
        $button_norm    = get_sub_field('content_button_3');
        $button_url     = get_sub_field('content_button_url_3');
        $button_name    = get_sub_field('content_button_name_3');
        $img            = get_sub_field('content_background_3');
        $show           = get_sub_field('show_3');
        $file           = get_sub_field('content_button_file_3');
        ?>

        <?php if ($show == 1) { ?>
            <section class="section content <?php if (get_field('slim_design')) : ?>is-slim<?php endif; ?>">
                <div class="container">
                    <div class="columns is-gapless is-vcentered content-area has-background-grey-lighter <?php if (get_sub_field('content_reverse_3')) : ?>reverse<?php endif; ?>">

                        <div data-aos="fade-down" class="column page-featured-image is-half-tablet" style="background-image: url('<?php echo $img ?>')"></div>

                        <div data-aos="fade-lrft" class="column reverse is-half-tablet half-content">
                            <?php if (!empty($title)) : ?>
                                <h1 class="title is-2 is-size-3-mobile"><?php echo $title ?></h1>
                            <?php endif; ?>

                            <?php if (!empty($info)) : ?>
                                <?php echo $info ?>
                            <?php endif; ?>

                            <?php if ($program == 2) { ?>
                                <div class="field is-grouped">
                                    <a href="<?php echo $button_norm ?>" class="button is-dark is-outlined"><?php echo $button_name ?></span></a>
                                </div>
                            <?php } else if ($program  == 3) { ?>
                                <div class="field is-grouped">
                                    <a href="<?php echo $button_url ?>" class="button is-dark is-outlined"><?php echo $button_name ?></span></a>
                                </div>
                            <?php } else if ($program  == 4) { ?>
                                <div class="field is-grouped">
                                    <a target="_blank" href="<?php echo $file['url'] ?>" class="button is-dark is-outlined">
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