<?php
require_once(get_template_directory() . '/functions/mail.php');
require_once(get_template_directory() . '/functions/filters.php');
require_once(get_template_directory() . '/functions/theme-support.php');
require_once(get_template_directory() . '/functions/cleanup.php');
require_once(get_template_directory() . '/functions/enqueue-scripts.php');
require_once(get_template_directory() . '/functions/menu.php');
require_once(get_template_directory() . '/functions/sidebar.php');
require_once(get_template_directory() . '/functions/comments.php');
require_once(get_template_directory() . '/functions/page-navi.php');
require_once(get_template_directory() . '/functions/disable-emoji.php');
require_once(get_template_directory() . '/functions/pagination.php');
require_once(get_template_directory() . '/functions/login.php');
require_once(get_template_directory() . '/functions/admin.php');
require_once(get_template_directory() . '/functions/image-size.php');
require_once(get_template_directory() . '/functions/custom-post-type.php');

function elang($en, $fa)
{
    echo (is_rtl()) ? $fa : $en;
}

function show_lang_switcher_ru_en() {
    // لیست زبان‌ها با اطلاعات کامل (پرچم + لینک + اسم)
    $languages = pll_the_languages( array(
        'raw'           => 1,
        'hide_if_empty' => 0, // مطمئن بشیم حتی اگر ترجمه نبود باز هم بیاد
    ) );

    $current = pll_current_language();

    if ( $current === 'ru' && isset($languages['en']) ) {
        // زبان انگلیسی رو نشون بده (پرچم)
        echo '<a href="' . esc_url($languages['en']['url']) . '"><span class="language">EN</span></a>';
    } elseif ( $current === 'en' && isset($languages['ru']) ) {
        // زبان روسی رو نشون بده (پرچم)
        echo '<a href="' . esc_url($languages['ru']['url']) . '"><span class="language">RU</span></a>';
    }
}
