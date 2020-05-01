<?php

namespace Mamaduka\Suliko;

const VERSION = '01052020';

/**
 * Setup theme defaults.
 *
 * @return void
 */
function theme_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_setup' );

/**
 * Enqueue theme assets.
 *
 * @return void
 */
function enqueue_assets() {
	wp_enqueue_style(
		'normalize',
		get_template_directory_uri() . '/public/css/normalize.css',
		[],
		VERSION
	);

	wp_enqueue_style(
		'styles',
		get_template_directory_uri() . '/public/css/style.css',
		[],
		VERSION
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );

/**
 * Get the logo/avatar URL.
 *
 * @return string
 */
function get_the_logo() {
	return get_parent_theme_file_uri( '/public/images/george.png' );
}
