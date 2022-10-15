<?php 

add_action( 'wp_enqueue_scripts', function() {


    // <script src="https://use.fontawesome.com/fcef79b3ef.js"></script>

	// wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com' );
	// wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com' );
	// wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );
    wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/fcef79b3ef.js');

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri() .'/assets/js/jquery.magnific-popup.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array(), 'null', true );
    
});



add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');

// add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
// function filter_nav_menu_link_attributes($atts, $item, $args) {
// 	if ($args->menu === 'Main') {
// 		$atts['class'] = 'menu__link';
// 		if ($item->current) {
// 			$atts['class'] .= ' active-button';
// 		}
// 	}
// 	return $atts;
// };
?>