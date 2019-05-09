<?php
$roast_items    = get_field('roast_item');
$sunday_roast   = "<li>" . implode('</li><li>', (array)$roast_items) . "</li>";

if (have_rows('content_boxes')) :

    while (have_rows('content_boxes')) : the_row();

        // vars
        $title          = get_sub_field('content_title_2');
        $info           = get_sub_field('content_info_2');
        $program        = get_sub_field('content_button_link_2');
        $button_norm    = get_sub_field('content_button_2');
        $button_url     = get_sub_field('content_button_url_2');
        $button_name    = get_sub_field('content_button_name_2');
        $img            = get_sub_field('content_background_2');
        $show           = get_sub_field('show_2');
        $file           = get_sub_field('content_button_file_2');
        $maps           = get_field('embeded_map');
        ?>

        <?php if ($show == 1) { ?>
            <section class="section content <?php if (get_field('slim_design')) : ?>is-slim<?php endif; ?>">
                <div class="container">
                    <div class="columns is-gapless is-vcentered content-area <?php if (get_sub_field('content_reverse_2')) : ?>reverse<?php endif; ?>">

                        <div data-aos="fade-left" class="column is-half-tablet half-content">
                            <?php if (!empty($title)) : ?>
                                <h1 class="title is-2 is-size-3-mobile"><?php echo $title ?></h1>
                            <?php endif; ?>

                            <?php if (!empty($info)) : ?>
                                <?php echo $info ?>
                            <?php endif;

                        if (is_page('weddings-functions')) : ?>
                                <ul>
                                    <?php echo $sunday_roast; ?>
                                </ul>
                            <?php endif;

                        if ($program == 2) { ?>
                                <div class="field is-grouped">
                                    <a href="<?php echo $button_norm ?>" class="button is-primary is-outlined"><?php echo $button_name ?></span></a>
                                </div>
                            <?php } else if ($program  == 3) { ?>
                                <div class="field is-grouped">
                                    <a href="<?php echo $button_url ?>" class="button is-primary is-outlined"><?php echo $button_name ?></span></a>
                                </div>
                            <?php } else if ($program  == 4) { ?>
                                <div class="field is-grouped">
                                    <a target="_blank" href="<?php echo $file['url'] ?>" class="button is-primary is-outlined">
                                        <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
                                        <span><?php echo $button_name ?></span>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <?php if (!empty($maps)) { ?>
                            <div data-aos="fade-up" class="column page-featured-image is-half-tablet">
                                <div class="map-responsive">
                                    <?php echo $maps ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div data-aos="fade-up" class="column page-featured-image is-half-tablet" style="background-image: url('<?php echo $img ?>')"></div>
                        <?php } ?>

                    </div>
                </div>
            </section>

        <?php } ?>

    <?php endwhile; ?>

<?php endif; ?>