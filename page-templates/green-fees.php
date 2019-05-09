<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Green fees
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();

get_template_part('template-parts/hero');

$golf_type          = get_field('golf_type');
$golf_header        = get_field('golf_header');
$additional         = get_field('additional');
$additional_2       = get_field('additional_2');
// echo "<pre>";
// print_r($golf_header);
// echo "</pre>";
?>

<section class="section content">
    <div class="container table-container">
        <table class="table is-hoverable is-fullwidth">
            <thead class="has-background-primary">
                <tr>
                    <th valign="top">
                        <p>&nbsp;</p>
                    </th>
                    <?php
                    $types = get_field('golf_package');
                    // $times = get_field('class_time');
                    // $date  = get_field('class_date');
                    foreach ($types as $value) { ?>
                        <th valign="top" class="table-heading">
                            <p align="center"><?php echo $value ?></p>
                        </th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" valign="top" class="has-background-black table-heading">
                        <strong class="has-text-white">
                            <p><?php echo $golf_header[0]['label']; ?></p>
                        </strong>
                    </td>

                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[0]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'weekday+members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_1 = get_field('price_1'); ?>

                            <td valign="top">

                                <?php
                                if (!empty($price_1)) {
                                    if (fmod($price_1, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_1; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_1; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[1]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'weekend+members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_2 = get_field('price_2'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_2)) {
                                    if (fmod($price_2, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_2; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_2; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[2]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'veteran+members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_3 = get_field('price_3'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_3)) {
                                    if (fmod($price_3, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_3; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_3; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[3]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'junior+members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_4 = get_field('price_4'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_4)) {
                                    if (fmod($price_4, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_4; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_4; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top">
                        <p><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" valign="top" class="has-background-black table-heading">
                        <strong class="has-text-white">
                            <p><?php echo $golf_header[1]['label']; ?></p>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[0]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'weekday+non-members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_5 = get_field('price_5'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_5)) {
                                    if (fmod($price_5, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_5; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_5; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[1]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'weekend+non-members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_6 = get_field('price_6'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_6)) {
                                    if (fmod($price_6, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_6; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_6; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[2]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'veteran+non-members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_7 = get_field('price_7'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_7)) {
                                    if (fmod($price_7, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_7; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_7; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[3]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'junior+non-members',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_8 = get_field('price_8'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_8)) {
                                    if (fmod($price_8, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_8; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_8; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top">
                        <p><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" valign="top" class="has-background-black table-heading">
                        <strong class="has-text-white">
                            <p><?php echo $golf_header[2]['label']; ?></p>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[4]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'buggy-hire',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_9 = get_field('price_9'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_9)) {
                                    if (fmod($price_9, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_9; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_9; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[5]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'buggy-hire',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_10 = get_field('price_10'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_10)) {
                                    if (fmod($price_10, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_10; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_10; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top" class="table-heading">
                        <p><?php echo $golf_type[6]['label']; ?></p>
                    </td>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'buggy-hire',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_11 = get_field('price_11'); ?>
                            <td valign="top">

                                <?php
                                if (!empty($price_11)) {
                                    if (fmod($price_11, 1) !== 0.00) { ?>
                                        <p align="center">£ <?php echo $price_11; ?></p>
                                    <? } else { ?>
                                        <p align="center">£ <?php echo $price_11; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top">
                        <p><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" valign="top" class="has-background-black table-heading">
                        <strong class="has-text-white">
                            <p><?php echo $golf_header[3]['label']; ?></p>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'offers',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_12 = get_field('price_12'); ?>
                            <td colspan="7" valign="top">

                                <?php
                                if (!empty($price_12)) {
                                    if (fmod($price_12, 1) !== 0.00) { ?>
                                        <p><span class="table-heading"><?php echo $golf_type[0]['label']; ?></span> - £ <?php echo $price_12; ?></p>
                                    <? } else { ?>
                                        <p><span class="table-heading"><?php echo $golf_type[0]['label']; ?></span> - £ <?php echo $price_12; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <?php
                    $args = array(
                        'posts_per_page'     => -1,
                        'category_name'     => 'offers',
                        'post_type'         => 'pricing'
                    );
                    $items = get_posts($args);
                    foreach ($items as $post) : setup_postdata($post);
                        $count++; //increment the variable by 1 each time the loop executes
                        if (!empty($items)) { ?>
                            <?php $price_13 = get_field('price_13'); ?>
                            <td colspan="7" valign="top">

                                <?php
                                if (!empty($price_13)) {
                                    if (fmod($price_13, 1) !== 0.00) { ?>
                                        <p><span class="table-heading"><?php echo $golf_type[1]['label']; ?></span> - £ <?php echo $price_13; ?></p>
                                    <? } else { ?>
                                        <p><span class="table-heading"><?php echo $golf_type[1]['label']; ?></span> - £ <?php echo $price_13; ?>.00</p>
                                    <?php }
                            } else { }
                            ?>

                            </td>
                        <?php } ?>
                    <?php endforeach;
                wp_reset_postdata(); ?>
                </tr>
                <tr>
                    <td valign="top">
                        <p><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                    <td valign="top">
                        <p align="center"><strong>&nbsp;</strong></p>
                    </td>
                </tr>
                <tr>
                    <?php if (isset($additional)) : ?>
                        <td colspan="7" valign="top">
                            <p><strong><?php echo $additional ?></strong></p>
                        </td>
                    <?php endif; ?>
                </tr>
                <tr>
                <?php if (isset($additional_2)) : ?>
                    <td colspan="7" valign="top">
                        <p><strong><?php echo $additional_2 ?></strong></p>
                    </td>
                <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </div>
</section>


<?php
// get_sidebar();
get_footer();
