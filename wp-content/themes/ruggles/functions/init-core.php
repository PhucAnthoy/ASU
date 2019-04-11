<?php 
function hu_load() {
    // Load theme languages
    load_theme_textdomain( 'hueman', get_stylesheet_directory().'/languages' );

    // Load theme options and meta boxes
    // load_template( get_template_directory() . '/functions/theme-options.php' );
    load_template( get_template_directory() . '/functions/init-meta-boxes.php' );

    // Load custom widgets
    load_template( get_template_directory() . '/functions/widgets/alx-tabs.php' );
    load_template( get_template_directory() . '/functions/widgets/alx-video.php' );
    load_template( get_template_directory() . '/functions/widgets/alx-posts.php' );

    // Load dynamic styles
    load_template( get_stylesheet_directory() . '/functions/dynamic-styles.php' );
  }

/* ------------------------------------------------------------------------- *
 *  Loads and instanciates Utils
/* ------------------------------------------------------------------------- */
load_template( get_template_directory() . '/functions/class-utils-settings-map.php' );
new HU_utils_settings_map;

?>