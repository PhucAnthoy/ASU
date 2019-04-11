<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

load_template( get_stylesheet_directory() . '/functions/init-core.php' );

/*  Site name/logo
/* ------------------------------------ */
function hu_site_title() {
// Text or image?
if ( false != hu_get_img_src_from_option( 'custom-logo' ) ) {
  $logo = '<img src="'. hu_get_img_src_from_option( 'custom-logo' ) . '" alt="'.get_bloginfo('name').'">';
} else {
  $logo = '<img src="'. get_bloginfo('url') . '/wp-content/themes/ruggles/images/logo-header.png" alt="'.get_bloginfo('name').'"/>';
}

$link = '<a href="'.home_url('/').'" rel="home">'.$logo.'</a>';

if ( is_front_page() || is_home() ) {
  $sitename = '<h1 class="site-title">'.$link.'</h1>'."\n";
} else {
  $sitename = '<p class="site-title">'.$link.'</p>'."\n";
}

return $sitename;
}

/*  Custom favicon
/* ------------------------------------ */
  function hu_favicon() {
    if ( hu_get_option('favicon') ) {
      echo '<link rel="shortcut icon" href="'.hu_get_option('favicon').'" />'."\n";
    }
    else { echo '<link rel="shortcut icon" href="'. get_bloginfo('url') . '/wp-content/themes/ruggles/images/favicon.png">'."\n";
  }

}
add_filter( 'wp_head', 'hu_favicon' );
/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'hu_setup' ) ) {

  function hu_setup() {
    // Enable title tag
    add_theme_support( 'title-tag' );

    // Enable automatic feed links
    add_theme_support( 'automatic-feed-links' );

    // Enable featured image
    add_theme_support( 'post-thumbnails' );

    // Enable post format support
    add_theme_support( 'post-formats', array( 'audio', 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );

    // Declare WooCommerce support
    add_theme_support( 'woocommerce' );

    // Thumbnail sizes
    add_image_size( 'thumb-small', 160, 160, true );
    add_image_size( 'thumb-standard', 320, 320, true );
    add_image_size( 'thumb-medium', 520, 245, true );
    add_image_size( 'thumb-large', 1040, 340, true );

    // Custom menu areas
    register_nav_menus( array(
      'topbar' => 'Topbar',
      'header' => 'Header',
      'footer' => 'Footer',
    ) );
  }

}
add_action( 'after_setup_theme', 'hu_setup' );
?>
