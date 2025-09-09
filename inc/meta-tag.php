<?php if (is_home()) : ?>
<?php
$setting_description = get_bloginfo('description');
?>
<meta name="description" content="<?php echo $setting_description ?>" />
<meta name="DC.Title" content="<?php bloginfo('name') ?>" />
<meta name="DC.Description" content="<?php echo $setting_description ?>" />
<meta name="DC.Language" content="fa_IR" />
<meta name="DC.Publisher" content="<?php bloginfo('name') ?>" />
<meta property="og:locale" content="fa_IR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php bloginfo('name') ?>" />
<meta property="og:description" content="<?php echo $setting_description ?>" />
<meta property="og:url" content="<?php echo esc_url(home_url()) ?>" />
<meta property="og:site_name" content="<?php bloginfo('name') ?>" />
<?php endif ?>
<?php if (is_singular('post')) : ?>
<meta name="description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<meta name="DC.Identifier" content="<?php the_permalink() ?>" />
<meta name="DC.Date.Created" content="<?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>" />
<meta name="DC.Title" content="<?php the_title() ?>" />
<meta name="DC.Description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<meta name="DC.Language" content="<?php echo get_bloginfo('language') ?>" />
<meta name="DC.Publisher" content="<?php echo get_bloginfo('name') ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name') ?>" />
<meta property="og:url" content="<?php the_permalink() ?>">
<meta property="og:title" content="<?php the_title() ?>" />
<meta property="og:description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<?php $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "medium"); ?>
<meta property="og:image" content="<?php echo $thumbnail_src[0]; ?>" />
<meta property="og:image:secure_url" content="<?php echo $thumbnail_src[0]; ?>">
<meta property="og:image:width" content="<?php echo $thumbnail_src[1]; ?>">
<meta property="og:image:height" content="<?php echo $thumbnail_src[2]; ?>">
<meta property="og:image:type" content="images/jpg">
<?php endif ?>