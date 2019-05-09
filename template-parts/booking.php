<?php
$img            = get_field('book_image');
?>

<?php if (get_field('book_title')) : ?>
<section data-aos="fade-down" class="section content page-featured-image <?php if (get_field('slim_design')) : ?>is-slim-booking<?php endif; ?>" style="background-image: url('<?php echo $img ?>')">
    <div class="container">
        <div class="column is-offset-2-tablet is-8-tablet">
                <h1 data-aos="fade-left" class="title is-2 is-size-3-mobile fade-in">
                    <?php the_field('book_title'); ?>
                </h1>
                
                <?php $program = get_field('book_button_link'); ?>
                
                <?php if ($program == 1) { ?>
                <div data-aos="fade-right" class="field is-grouped">
                    <a href="<?php the_field('book_button'); ?>" class="button is-black"><?php the_field('book_button_name'); ?></span></a>
                </div>
                <?php } else if ($program  == 2) { ?>
                <div data-aos="fade-right" class="field is-grouped">
                    <a href="<?php the_field('book_button_url'); ?>" class="button is-black"><?php the_field('book_button_name'); ?></span></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php endif; ?>