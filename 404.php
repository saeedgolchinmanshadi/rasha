<?php get_header(); ?>

<style>
  .section-page-head h2 {
    color: #fff;
  }

  .img-back img {
    filter: grayscale(100%);
  }
</style>
<div class="container-fluid section-page-head">
  <div class="img-back image-fit">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner_default.jpg" alt="<?php _e('404', 'Goldio') ?>">
  </div>

  <div class="container">
    <div class="head-page">
      <h2><?php _e('Page not found', 'Goldio') ?></h2>
      <div class="seperator"></div>
    </div>
  </div>
</div>


<div class="container">

  <main class="colm colm8 margin-auto error-404" role="main">



    <p class="error-message">
      <?php _e('Oops! The page you are looking for could not be found.', 'Goldio') ?>
    </p>

    <p class="error-description">
      <?php _e('The page you requested might have been moved, deleted, or you may have entered an incorrect URL. Please check the address and try again.', 'Goldio') ?>
    </p>

    <div class="error-actions">
      <a href="<?php echo home_url(); ?>" class="btn-home">
        <?php _e('Go to Homepage', 'Goldio') ?>
      </a>
    </div>

    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
      <input type="search" class="search-field" placeholder="<?php _e('Search...', 'Goldio') ?>" value="<?php echo get_search_query(); ?>" name="s" />
      <button type="submit" class="search-submit">
        <?php _e('Search', 'Goldio') ?>
      </button>
    </form>


  </main> <!-- end #main -->

</div>

<div class="container-fluid single-related section">
  <div class="container">
    <div class="section-heading"><?php _e('Popular Products', 'Goldio') ?></div>
    <div class="other-product">
      <?php $args = array('category_name' => 'products', 'posts_per_page' => 3, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'); ?>
      <?php query_posts($args); ?>
      <div class="flex-wrap">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('inc/loop', 'archive'); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>