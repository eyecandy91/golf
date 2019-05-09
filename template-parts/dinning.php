<?php
$page_ref   = get_field('ref');
//  echo "<pre>";
//  print_r($page_ref);
//  echo "</pre>";
$page_id = $page_ref[0]; //example
$wpblog_fetrdimg = wp_get_attachment_url(get_post_thumbnail_id($page_id));
?>

<div data-aos="fade-left" class="container content has-text-centered page-featured-image" <?php if ($wpblog_fetrdimg) : ?> style="background-image: url(<?php echo $wpblog_fetrdimg; ?>)" <?php endif; ?>>
    <section class="hero is-medium">
        <div class="hero-body dinning">
            <div class="columns">
                <div class="column is-offset-2-tablet is-8-tablet">
                    <?php if (get_field('dinning_title')) : ?>
                        <h1 data-aos="fade-down" class="title is-2 is-size-3-mobile fade-in has-text-white">
                            <?php the_field('dinning_title'); ?>
                        </h1>
                    <?php endif; ?>
                    <?php if (get_field('dinning_sub_title')) : ?>
                        <div data-aos="fade-up" class="has-text-white">
                            <?php the_field('dinning_sub_title'); ?>
                        </div>
                    <?php endif; ?>
                    <?php $program = get_field('dinning_button_link'); ?>

                    <?php if ($program == 1) { ?>
                        <div data-aos="fade-right" class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <div class="intro-buttons">
                                    <a href="<?php the_field('dinning_button'); ?>" class="button is-primary"><?php the_field('dinning_button_name'); ?></span></a>
                                </div>
                            </p>
                        </div>
                    <?php } else if ($program  == 2) { ?>
                        <div data-aos="fade-right" class="field is-grouped is-grouped-centered">
                            <p class="control">
                                <div class="intro-buttons">
                                    <a href="<?php the_field('dinning_button_url'); ?>" class="button is-primary"><?php the_field('dinning_button_name'); ?></span></a>
                                </div>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>