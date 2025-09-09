<?php
$args = array(
    'post_type' => 'slider',
    'post_per_page' => 3
);
query_posts($args);
if (have_posts()) {
?>
    <div class="section-slider continer-fluid">
        <div class="slider">
            <?php query_posts($args) ?>
            <?php while (have_posts()) : the_post(); ?>
                <div>
                    <div class="image-fit">
                        <?php the_post_thumbnail('slider') ?>
                    </div>
                    <div class="slide-caption">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query() ?>
        </div>
    </div>
<?php } ?>