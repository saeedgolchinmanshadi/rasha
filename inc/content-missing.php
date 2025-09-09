<div class="post-not-found">

  <?php if ( is_search() ) : ?>

  <header class="article-header">
    <h1><?php _e( 'Sorry, No Results.', 'goldio' );?></h1>
  </header>

  <section class="entry-content">
    <p><?php _e( 'Try your search again.', 'goldio' );?></p>
  </section>

  <section class="search">
    <p><?php get_search_form(); ?></p>
  </section> <!-- end search section -->

  <footer class="article-footer">
    <p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'goldio' ); ?></p>
  </footer>

  <?php else: ?>

  <header class="article-header">
    <h1><?php _e( 'Oops, Post Not Found!', 'goldio' ); ?></h1>
  </header>

  <section class="entry-content">
    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'goldio' ); ?></p>
  </section>

  <section class="search">
    <p><?php get_search_form(); ?></p>
  </section> <!-- end search section -->

  <footer class="article-footer">
    <p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'goldio' ); ?></p>
  </footer>

  <?php endif; ?>

</div>