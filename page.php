<?php get_header(); ?>
<?php the_post(); ?>
<div class="container-fluid section-page-head">
  <?php if (get_post_thumbnail_id()) : ?>
    <style>
      .section-page-head::before {
        background: rgba(0, 0, 0, .4);
        content: "";
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 1;
      }

      .section-page-head .head-page {
        color: #fff;
      }

      .section-page-head .share a .share-box {
        background: #fff;
        color: #53565a;
      }

      .section-page-head .share a:hover .share-box {
        background: #53565a;
        color: #fff;
      }

      /* Mobile */
      @media (max-width: 767px) {
        .section-page-head::before {
          content: unset;
        }

        .section-page-head::before {
          content: unset;
        }

        .section-page-head {
          height: auto;
          background-color: #fff;
        }

        .section-page-head {
          padding: 0;
        }

        .section-page-head .head-page {
          color: #000;
        }

        .section-page-head .img-back {
          position: unset;
          height: unset;
          object-fit: cover;
        }

        .section-page-head .seperator {
          margin: 30px auto 0;
        }

        .section-page-content {
          padding: 20px 0;
        }
      }
    </style>
    <div class="img-back image-fit">
      <?php
      if (wp_is_mobile()) {
        the_post_thumbnail('large');
      ?>
        <div class="share">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>/" target="_blank">
            <div class="share-box">
              <i class="icon-facebook-circle-fill"></i>
            </div>
          </a>
          <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>/&text=<?php the_title() ?>" target="_blank">
            <div class="share-box">
              <i class="icon-twitter-fill"></i>
            </div>
          </a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>/" target="_blank">
            <div class="share-box">
              <i class="icon-linkedin-fill"></i>
            </div>
          </a>
          <a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?php the_permalink() ?>/%0A<?php the_title() ?>" target="_blank">
            <div class="share-box">
              <i class="icon-mail-fill"></i>
            </div>
          </a>
        </div>
      <?php } else {
        the_post_thumbnail('page');
      }
      ?>
    </div>
  <?php endif ?>
  <div class="container">
    <div class="head-page">
      <div class="share hide-share">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>/" target="_blank">
          <div class="share-box">
            <i class="icon-facebook-circle-fill"></i>
          </div>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>/&text=<?php the_title() ?>" target="_blank">
          <div class="share-box">
            <i class="icon-twitter-fill"></i>
          </div>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>/" target="_blank">
          <div class="share-box">
            <i class="icon-linkedin-fill"></i>
          </div>
        </a>
        <a href="mailto:info@example.com?&subject=&cc=&bcc=&body=<?php the_permalink() ?>/%0A<?php the_title() ?>" target="_blank">
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
      <?php the_content() ?>
    </div>
  </div>
</div>
<!-- <div class="inner-content ">

  <main class="main " role="main">





  </main>
</div> -->

<?php get_footer(); ?>