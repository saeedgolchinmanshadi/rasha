<div class="section container-fluid section-products-categroy">
    <div class="container">
        <h2 class="section-heading">
            <?php _e( 'Our Products', 'Goldio' ); ?>
        </h2>
        <div class="separator"></div>
        <div class="products-category">

            <?php
            $cat_arr = array('hide_empty' => false, 'parent'  => 1);
            $categories = get_categories($cat_arr);
            ?>
            <?php foreach ($categories as $cat) : ?>
                <div class="product-category colm colm4">
                    <div class="pad-20">
                        <a href="<?php echo get_category_link($cat->term_id); ?>">
                            <div class="product-image">
                                <img src="<?php echo z_taxonomy_image_url($cat->term_id, 'vertical'); ?>" />
                            </div>
                            <div class="product-category-title">
                                <?php echo $cat->name; ?>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>