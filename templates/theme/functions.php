<?php
/**
 * CentOS functions and definitions
 */


/**
 * CentOS Style
 *
 * The stylesheet used by wordpress site is not in the them directory structure
 * but in a remote location that we use as single point of change.
 */
function centos_scripts() {
	wp_enqueue_style('centos-blog', '{{ httpd_assets_url }}/assets/css/centos-blog.bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'centos_scripts');

/**
 * CentOS Favicon
 */
function centos_favicon(){
    echo '<link rel="shortcut icon" href="{{ httpd_assets_url }}/assets/img/favicon.png" />';
}
add_action('wp_head', 'centos_favicon');

/**
 * CentOS Sidebar
 */
function centos_widgets_init() {
    register_sidebar( array (
        'name'          => __('Primary Sidebar', 'centos'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="font-weight-bold">',
        'after_title'   => '</div>',
   ));
}
add_action('widgets_init', 'centos_widgets_init');

/**
 * CentOS Navbar and Wordpress administration bar integration
 *
 * By default the admin bar consumes 32px height, always. This adds an extra
 * space on top of the navigation bar which affects the CentOS navigation bar
 * expected presentation. Here (and in header.php) we remove that space and fix
 * the CentOS navigation bar presentation to deal with Wordpress admin bar
 * based on whether the user is logged in or not.
 */
if (is_user_logged_in()) {
	add_filter('show_admin_bar' , '__return_true');
} else {
	add_filter('show_admin_bar' , '__return_false');
}

/**
 * CentOS Title
 */

function centos_title() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'centos_title' );
?>
