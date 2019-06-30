<?php
$title             = get_field('title_menu_function');
$sub               = get_field('requirements');
$buffet            = get_field('buffet_menu');
$wedding           = get_field('wedding_package');
$function          = get_field('function_menu');
$sunday            = get_field('sunday_menu');
?>

<?php if (!empty($title)) : ?>
<section class="content <?php if (get_field('slim_design')) : ?>is-slim-booking<?php endif; ?>"
    style="background-image: url('<?php echo $img ?>')">
    <div data-aos="fade-left" class="buttons is-centered">
        <?php if (!empty($buffet['url'])) : ?>
        <a target="_blank" href="<?php echo $buffet['url'] ?>" class="button is-primary">
            <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
            <span><?php echo $buffet['title'] ?></span>
        </a>
        <?php endif; ?>
        <?php if (!empty($wedding['url'])) : ?>
        <a target="_blank" href="<?php echo $wedding['url'] ?>" class="button is-black">
            <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
            <span><?php echo $wedding['title'] ?></span>
        </a>
        <?php endif; ?>
        <?php if (!empty($function['url'])) : ?>
        <a target="_blank" href="<?php echo $function['url'] ?>" class="button is-success">
            <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
            <span><?php echo $function['title'] ?></span>
        </a>
        <?php endif; ?>
        <?php if (!empty($sunday['url'])) : ?>
        <a target="_blank" href="<?php echo $sunday['url'] ?>" class="button is-light">
            <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
            <span><?php echo $sunday['title'] ?></span>
        </a>
        <?php endif; ?>
    </div>
    </div>
</section>
<?php endif; ?>