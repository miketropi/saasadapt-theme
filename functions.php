<?php 
/**
 * Functions 
 */

add_action( 'wp_enqueue_scripts', 'SAT_enqueue_styles' );
function SAT_enqueue_styles() {
  $parenthandle = 'parent-style';
  $theme        = wp_get_theme();

  wp_enqueue_style( $parenthandle,
    get_template_directory_uri() . '/style.css',
    [],  // If the parent theme code has a dependency, copy it to here.
    $theme->parent()->get( 'Version' )
  );

  wp_enqueue_style( 'saasadapt-theme-style',
    get_stylesheet_uri(),
    [$parenthandle],
    $theme->get( 'Version' ) // This only works if you have Version defined in the style header.
  );
}