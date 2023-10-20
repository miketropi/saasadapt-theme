<?php 
/**
 * Static
 * 
 * @since 1.0.0
 */

add_action('wp_enqueue_scripts', 'SAT_enqueue_scripts');
function SAT_enqueue_scripts() {
  // wp_enqueue_style('saasadapt-theme-css', SAT_URI . '/dist/css/saasadapt-theme.bundle.css', [], SAT_VERSION);
  // wp_enqueue_script('saasadapt-theme-js', SAT_URI . '/dist/saasadapt-theme.bundle.js', ['jquery'], SAT_VERSION, true);

  wp_localize_script('saasadapt-theme-js', 'SAT_PHP_DATA', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'lang' => []
  ]);

  // wp_add_inline_style('saasadapt-theme-css', SAT_css_variables_register());
}

function SAT_css_variables_register() {
  $theme_colors = get_field('theme_color', 'option');
  ob_start();
  ?>
:root {
--sat-primary-color: <?php echo isset($theme_colors['primary_color']) ? $theme_colors['primary_color'] : '#003049'; ?>;
--sat-primary-color-2:
<?php echo isset($theme_colors['primary_color_2']) ? $theme_colors['primary_color_2'] : '#D62828'; ?>;
--sat-secondary-color:
<?php echo isset($theme_colors['secondary_color']) ? $theme_colors['secondary_color'] : '#F77F00'; ?>;
--sat-secondary-color-2:
<?php echo isset($theme_colors['secondary_color_2']) ? $theme_colors['secondary_color_2'] : '#FCBF49'; ?>;
--sat-secondary-color-3:
<?php echo isset($theme_colors['secondary_color_3']) ? $theme_colors['secondary_color_3'] : '#EAE287'; ?>;
}
<?php
  return ob_get_clean();
}