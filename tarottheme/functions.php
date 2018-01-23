<?php
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function adv_theme_support() {

	add_theme_support('post-thumbnails');
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'tarottheme' ),
	) );

}

add_action('after_setup_theme','adv_theme_support');

function adv_set_excerpt_length() {
	return 25;
}

add_filter('excerpt_length','adv_set_excerpt_length');
?>
