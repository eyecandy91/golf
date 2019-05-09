<section class="section">
    <div class="container gallery">
        <?php
        while (have_posts()) :
            the_post();

            the_content();

        endwhile; // End of the loop.
        ?>
    </div>
</section>
<?php 
?>