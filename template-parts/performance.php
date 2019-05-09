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
                'category_name'     => 'performance',
                'post_type'         => 'performance',
            );
            // $months = array(
            //     'January',
            //     'February',
            //     'March',
            //     'April',
            //     'may',
            //     'June',
            //     'July ',
            //     'August',
            //     'September',
            //     'October',
            //     'November',
            //     'December',
            // );
            $items = get_posts($args);
            foreach ($items as $post) : setup_postdata($post);
                $count++; //increment the variable by 1 each time the loop executes

                $date               = get_field('date_picker');
                $performer          = get_field('performer');
                $xtra               = get_field('info_performer');
                $perform_file       = get_field('perform_file');
                ?>

                <div data-aos="fade-right" class="column is-full-mobile is-third-tablet is-one-quarter-desktop ">
                    <div class="has-background-white box is-primary is-tooltip">

                        <h5 class="title is-alternative has-text-weight-bold is-5 is-uppercase">

                            <?php if ($date) :
                                echo $date;
                            endif; ?>

                        </h5>
                        <div>
                            <?php if ($performer) :
                                echo "<div class='block'>";
                                echo $performer;
                                echo "</div>";
                            endif; ?>
                            <?php if ($xtra) : ?>
                                <button class="button is-small tooltip is-tooltip-multiline is-tooltip-left-mobile" data-tooltip="<?php echo $xtra; ?>">
                                    <span><i class="far fa-question-circle"></i></span>
                                    <span></span>
                                </button>
                            <?php endif; ?>
                            <?php if ($perform_file) : ?>
                                <div>
                                    <a href="<?php echo $perform_file['url'] ?>" target="_blank" class="button is-dark is-small is-file">
                                        <span class="icon is-small"><i class="fas fa-file-pdf"></i></span>
                                        <span>click to view more</span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endforeach;
        wp_reset_postdata(); ?>

        </div>
    </div>
</section>