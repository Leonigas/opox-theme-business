<?php 

include_once( 'inc/customizer.php' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

set_post_thumbnail_size(400, 600);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function opox_scripts() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ), false, false );
	wp_enqueue_style( 'bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'opox_scripts' );


register_nav_menus( 
	array(
		'primaire' => __('Menu primaire', 'test')
	)
); 

function widget_opox() {

	$args = array(
		'name'          => __( 'Sidebar de droite', 'text-domain' ),
		'id'            => 'sidebar_droite',
		'description'   => 'test de description',
		'class'         => '',
		'before_widget' => '<li id="%1" class="widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	);

	register_sidebar( $args );

	$args = array(
		'name'          => __( 'Sidebar pour le footer', 'text-domain' ),
		'id'            => 'sidebar_footer',
		'description'   => 'test de description',
		'class'         => '',
		'before_widget' => '<li id="%1" class="widget %2">',
		'after_widget'  => '</li>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	);

	register_sidebar( $args );
}

add_action( 'widgets_init', 'widget_opox');

?>