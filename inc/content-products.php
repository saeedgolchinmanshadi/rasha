<div class="section container-fluid section-products-categroy">
    <div class="container">
        <h2 class="section-heading">
            <?php _e( 'LATEST Product', 'Goldio' ); ?>
        </h2>
        <div class="separator"></div>
        <div class="products-category">
            <?php
            $args = array(
                'posts_per_page' => 4,
                'category_name'  => 'products'
            );
            query_posts($args);
            ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="product-category colm colm4">
                    <div class="pad-20">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image-fit product-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                            <div class="product-category-title">
                                <?php the_title() ?>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query() ?>
        </div>
    </div>
</div>