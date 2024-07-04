<?php
/**
 * CentOS functions and definitions
 */


/**
 * CentOS Stylesheet
 *
 * The stylesheet used by wordpress are copied into the theme during the theme
 * building process. It uses stylesheet and scripts from jekyll-theme-centos
 * theme.
 */
function centos_stylesheet() {
	wp_enqueue_style('stylesheet-bootstrap', get_parent_theme_file_uri('assets/css/base/stylesheet.min.css'));
	wp_enqueue_style('stylesheet-wordpress', get_parent_theme_file_uri('style.css'));
	wp_enqueue_script('backtotop', 'https://unpkg.com/vanilla-back-to-top@7.2.1/dist/vanilla-back-to-top.min.js');
	wp_enqueue_script('bootstrap', get_parent_theme_file_uri('assets/js/bootstrap.bundle.min.js'));
}
add_action('wp_enqueue_scripts', 'centos_stylesheet');

/**
 * CentOS Favicon
 */
function centos_head(){
  echo '<link rel="shortcut icon" href="' . get_parent_theme_file_uri("assets/icons/favicon.ico") . '" />';
  echo '<link rel="icon" href="' . get_parent_theme_file_uri("assets/icons/favicon-16.png") . '" sizes="16x16" />';
  echo '<link rel="icon" href="' . get_parent_theme_file_uri("assets/icons/favicon-32.png") . '" sizes="32x32" />';
  echo '<link rel="icon" href="' . get_parent_theme_file_uri("assets/icons/favicon.svg") . '" sizes="any" />';
  echo '<link rel="icon" href="' . get_parent_theme_file_uri("assets/icons/apple-touch-icon.png") . '" sizes="180x180" />';
  echo '<link rel="icon" href="' . get_parent_theme_file_uri("assets/icons/apple-touch-icon.png") . '" sizes="180x180" />';
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
  echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Code+Pro:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap">';
  echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap">';
  echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
}
add_action('wp_head', 'centos_head');

/**
 * CentOS Sidebar
 */
function centos_sidebar() {
    register_sidebar( array (
        'name'          => __('Primary Sidebar', 'centos'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="%2$s form-floating mb-3 small">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="h6">',
        'after_title'   => '</div>',
   ));
}
add_action('widgets_init', 'centos_sidebar');

/**
 * CentOS Title
 */

function centos_title() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'centos_title' );

/**
 * CentOS Body
 */
function centos_body_class( $classes ) {
    $classes[] = 'bg-dots';

    return $classes;
}
add_filter( 'body_class','centos_body_class' );
?>
