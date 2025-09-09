<?php get_header(); ?>
<div class="container-fluid section-page-head">
  <div class="container">
    <div class="head-page">
      <h2>Search : <?php the_search_query(); ?></h2>
      <div class="seperator"></div>
      <div class="relative aligncenter">
        <form action="<?php echo home_url(); ?>">
          <input type="search" name="s" class="colm6" placeholder="Search..." value="<?php the_search_query(); ?>">
          <input type="submit" value="submit">
        </form>
      </div>
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
  </div>
</div>
<?php get_footer(); ?>