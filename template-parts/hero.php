<?php
$wpblog_fetrdimg = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<section class="hero page-featured-image top <?php if (get_field('slim_design')) : ?>is-slim-spacer<?php endif; ?> <?php if (is_front_page()) {
                                                                                                                                echo 'is-large';
                                                                                                                            } else {
                                                                                                                                echo 'is-medium section';
                                                                                                                            } ?>" <?php if ($wpblog_fetrdimg) : ?> style="background-image: url(<?php echo $wpblog_fetrdimg; ?>)" <?php endif; ?>>
    <div class="hero-body main">
        <div class="container has-text-centered">
            <?php if (get_field('title')) : ?>
                <h1 data-aos="fade-down" class="title is-8 is-size-2-mobile has-text-white fade-in main-title">
                    <?php the_field('title'); ?>
                </h1>
            <?php endif; ?>

            <?php $program = get_field('page_button_link'); ?>

            <?php if ($program == 2) { ?>
                <div data-aos="fade-left" class="field is-grouped is-grouped-centered">
                    <a href="<?php the_field('button'); ?>" class="button is-primary <?php if (!is_front_page()) : ?>is-marginless<?php endif; ?>"><?php the_field('button_name'); ?></span></a>
                </div>
            <?php } else if ($program  == 3) { ?>
                <div data-aos="fade-left" class="field is-grouped is-grouped-centered">
                    <a href="<?php the_field('button_url'); ?>" class="button is-primary <?php if (!is_front_page()) : ?>is-marginless<?php endif; ?>""><?php the_field('button_name'); ?></span></a>
                        </div>
                <?php } ?>

            <?php
            // endif;
            ?>
        </div>
    </div>
</section>