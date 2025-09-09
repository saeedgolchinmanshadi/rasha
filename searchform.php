<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
  <label>
    <span class="screen-reader-text">جستجو برای : </span>
    <input type="search" class="search-field" placeholder="جستجو...." value="<?php echo get_search_query() ?>" name="s"
      title="جستجو برای : " />
  </label>
  <input type="submit" class="search-submit button" value="جستجو" />
</form>