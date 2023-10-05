<?php 
/**
 * Functions 
 */

/**
 * Define
 */
define('SAT_VERSION', '1.0.0');
define('SAT_DIR', get_stylesheet_directory());
define('SAT_URI', get_stylesheet_directory_uri());

/**
 * Inc
 */
require(SAT_DIR . '/inc/static.php');
require(SAT_DIR . '/inc/helpers.php');
require(SAT_DIR . '/inc/hooks.php');
require(SAT_DIR . '/inc/ajax.php');


add_action( 'wp_enqueue_scripts', 'SAT_enqueue_styles' );
function SAT_enqueue_styles() {
  $parenthandle = 'parent-style';
  $theme        = wp_get_theme();

  wp_enqueue_style( $parenthandle,
    get_template_directory_uri() . '/style.css',
    [],
    $theme->parent()->get( 'Version' )
  );

  wp_enqueue_style( 'saasadapt-theme-style',
    get_stylesheet_uri(),
    [$parenthandle],
    $theme->get( 'Version' )
  );
}