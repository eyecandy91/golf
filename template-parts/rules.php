<?php
$rules              = get_field ('rules');
$rules_title        = get_field('rules_title');
$single_rules       = "<li>" . implode('</li><li>', (array)$rules) . "</li>";
?>

<section class="section content">
    <div class="container">
        <div class="column is-offset-2-tablet is-8-tablet">
            <?php if ($rules_title) : ?>
                <h1 data-aos="fade-down" class="title is-2 is-size-3-mobile fade-in has-text-centered">
                <?php echo $rules_title; ?>
                </h1>
            <?php endif; ?>
            <ul data-aos="fade-left">
                <?php echo $single_rules; ?>
            </ul>
        </div>
    </div>
</section>