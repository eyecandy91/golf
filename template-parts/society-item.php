<?php
$additonal          = get_field('additional_header');
?>

<?php if (!empty($additonal)) : ?>
    <section class="section content">
        <div class="container">
            <h5 data-aos="fade-down" class="title is-2 is-size-3-mobile fade-in is-marginless has-text-centered">
                <?php echo $additonal ?>
            </h5>
        </div>
    </section>
<?php endif; ?>
<section class="section content has-background-grey-lighter positve-section small">
    <div class="container">
        <div class="columns is-multiline negative-section small">
            <?php
            $args = array(
                'posts_per_page'     => -1,
                'category_name'     => 'society',
                'post_type'         => 'society'
            );
            $items = get_posts($args);
            foreach ($items as $post) : setup_postdata($post);
                $count++; //increment the variable by 1 each time the loop executes

                $price          = get_field('price');
                $package        = get_field('golf_type');
                $days           = get_field('days');
                $includes       = get_field('included');
                $dates_srt      = get_field('dates_start');
                $dates_fin      = get_field('dates_finish');
                $rules          = get_field('rules');

                $single_package     = implode(' & ', (array)$package);
                $single_days        = implode(' & ', (array)$days);
                $single_include     = "<li>" . implode('</li><li>', (array)$includes) . "</li>";
                $single_start       = implode('', (array)$dates_srt);
                $single_finish      = implode('', (array)$dates_fin);


                ?>
                <div data-aos="fade-right" class="column is-full-mobile is-half-tablet is-one-third-desktop">
                    <div class="has-background-white box is-primary">
                        <h5 class="title is-alternative has-text-weight-bold is-5 is-uppercase">
                            <strong><?php if (!empty($post->post_title)) : ?>

                                    <?php the_title(); ?>

                                <?php endif; ?> -

                                <?php if ($dates_srt) :
                                    echo "(" . $single_start;
                                    if ($dates_fin) :
                                        echo " - ";
                                        echo $single_finish;
                                    endif;
                                    echo ") - ";
                                endif;

                                if (!empty($price)) {
                                    if (fmod($price, 1) !== 0.00) { ?>
                                        £<?php echo $price; ?>
                                    <? } else { ?>
                                        £<?php echo $price; ?>.00
                                    <?php }
                            }
                            ?>
                                PER PERSON
                            </strong>
                        </h5>
                        <div>
                            <ul>
                                <li>
                                    <?php
                                    if ($single_package !== "No type needed") {
                                        echo $single_package;
                                    }
                                    echo " (" . $single_days . " ONLY )";
                                    echo "</li>";
                                    echo $single_include;
                                    ?>
                            </ul>
                        </div>
                    </div>
                </div>


            <?php endforeach;
        wp_reset_postdata(); ?>
        </div>
    </div>
</section>