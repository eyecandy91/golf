<?php
$show           = get_field('show_info');
$file           = get_field('section_button_file');
$file2          = get_field('section_button_file_2');
?>

<?php if ($show == 1) { ?>
    <section class="section has-text-centered content">
        <div class="container">
            <div class="column is-offset-2-tablet is-8-tablet">
                <?php if (get_field('section_title')) : ?>
                    <h1 data-aos="fade-down" class="title is-2 is-size-3-mobile fade-in">
                        <?php the_field('section_title'); ?>
                    </h1>
                <?php endif; ?>
                <?php if (get_field('section_sub_title')) : ?>
                    <div data-aos="fade-right">
                        <?php the_field('section_sub_title'); ?>
                    </div>
                <?php endif; ?>

                <?php $program = get_field('section_button_link'); ?>

                <?php if ($program == 2) { ?>
                    <div class="has-text-centered block">
                    <div data-aos="fade-left" class="field is-grouped is-grouped-centered">
                        <a href="<?php the_field('section_button'); ?>" class="button is-dark is-outlined"><?php the_field('section_button_name'); ?></span></a>
                    </div>
                    </div>
                <?php } else if ($program  == 3) { ?>
                    <div class="has-text-centered block">
                    <div data-aos="fade-left" class="field is-grouped is-grouped-centered">
                        <a href="<?php the_field('section_button_url'); ?>" class="button is-dark is-outlined"><?php the_field('section_button_name'); ?></span></a>
                    </div>
                    </div>
                <?php } else if ($program  == 4) { ?>
                    <div data-aos="fade-left" class="has-text-centered block">
                    <div class="field is-grouped is-grouped-centered">
                        <a target="_blank" href="<?php echo $file['url'] ?>" class="button is-primary is-outlined is-file">
                            <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
                            <span><?php the_field('section_button_name'); ?></span>
                        </a>
                    </div>
                    </div>
                <?php } ?>

                <?php $program = get_field('section_button_link_2'); ?>

                <?php if ($program == 2) { ?>
                    <div class="has-text-centered block">
                    <div data-aos="fade-left" class="field is-grouped is-grouped-centered">
                        <a href="<?php the_field('section_button_2'); ?>" class="button is-black"><?php the_field('section_button_name_2'); ?></span></a>
                    </div>
                    </div>
                <?php } else if ($program  == 3) { ?>
                    <div class="has-text-centered block">
                    <div data-aos="fade-left" class="field is-grouped is-grouped-centered">
                        <a href="<?php the_field('section_button_url_2'); ?>" class="button is-black"><?php the_field('section_button_name_2'); ?></span></a>
                    </div>
                    </div>
                <?php } else if ($program  == 4) { ?>
                    <div data-aos="fade-left" class="has-text-centered block">
                    <div class="field is-grouped is-grouped-centered">
                        <a target="_blank" href="<?php echo $file2['url'] ?>" class="button is-black">
                            <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
                            <span><?php the_field('section_button_name_2'); ?></span>
                        </a>
                    </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
<?php } ?>