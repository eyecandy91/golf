<section class="section content negative-section">
    <div class="container">
        <div class="tile is-ancestor has-text-centered is-multi-page">
            <?php

            $posts = get_field('content_blocks');

            if ($posts) : ?>
                <?php foreach ($posts as $post) :
                    ?>
                    <?php setup_postdata($post);
                    $content_image         = get_field('content_image');
                    ?>

                    <a data-aos="fade-up" href="<?php the_permalink(); ?>">
                        <span class="is-uppercase has-text-white"><?php the_title(); ?></span> <br>
                        <i class="fas fa-chevron-down has-text-primary"></i>
                        <div class="tile is-parent">
                            <article class="tile is-child is-paddingless">
                                <?php if (isset($content_image)) : ?>
                                    <img src="<?php echo $content_image  ?>" alt="" width="" height="">
                                <?php endif; ?>
                            </article>
                        </div>
                    </a>
                <?php endforeach; ?>
                <?php wp_reset_postdata();
                ?>
            <?php endif; ?>

        </div>
    </div>
</section>