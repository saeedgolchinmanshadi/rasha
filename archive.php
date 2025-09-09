<?php get_header(); ?>
<div class="container-fluid section-page-head">
  <div class="container">
    <div class="head-page">
      <h2><?php echo single_tag_title('', false); ?></h2>
      <p>
        <?php the_archive_description() ?>
      </p>
      <div class="seperator"></div>
    </div>
  </div>
</div>
<div class="container-fluid section-top-gallery">
  <div class="container flex-wrap">
    <?php while (have_posts()) : the_post(); ?>
      <div class="product-category colm colm4">
        <div class="pad-20">
          <a href="<?php the_permalink(); ?>">
            <div class="product-image image-fit">
              <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="product-category-title">
              <?php the_title() ?>
            </div>
          </a>
        </div>
      </div>
    <?php endwhile; ?>
    <div><?php goldio_page_navi() ?></div>
  </div>
</div>
<?php get_footer(); ?>