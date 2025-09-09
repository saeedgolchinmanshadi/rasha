<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container-fluid section-page-head">
      <div class="container">
        <div class="head-page">
          <div class="share">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= the_permalink() ?>/" target="_blank">
              <div class="share-box">
                <i class="icon-facebook-circle-fill"></i>
              </div>
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?= the_permalink() ?>/&text=<?= the_title() ?>" target="_blank">
              <div class="share-box">
                <i class="icon-twitter-fill"></i>
              </div>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= the_permalink() ?>/" target="_blank">
              <div class="share-box">
                <i class="icon-linkedin-fill"></i>
              </div>
            </a>
            <a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?= the_permalink() ?>/%0A<?= the_title() ?>" target="_blank">
              <div class="share-box">
                <i class="icon-mail-fill"></i>
              </div>
            </a>
          </div>
          <h2><?php the_title() ?></h2>
          <div class="seperator"></div>
        </div>
      </div>
    </div>
    <div class="container-fluid section-page-content">
      <div class="container">
        <div class="entry-content">
          <?php the_content();  ?>
        </div>
      </div>
    </div>
<?php endwhile;
endif; ?>
<div class="container-fluid single-related section">
  <div class="container">
    <div class="section-heading"><?php _e('Other Products', 'Goldio') ?></div>
    <div class="other-product">
      <?php $args = array('category_name' => 'products', 'posts_per_page' => 3, 'post__not_in' => array($post->ID),); ?>
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