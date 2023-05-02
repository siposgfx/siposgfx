<?php
defined( 'ABSPATH' ) || exit;
require 'vendor/autoload.php';

/**
 * Initiate Update Checker
 *
 * @since 0.0.3
 */
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/siposgfx/siposgfx',
	__FILE__,
	'siposgfx'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


/**
 * Load Bootstrap 5
 *
 * @since 0.0.2
 */
function load_bootstrap_scripts() {
	wp_enqueue_style( 'bs-5-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.0-alpha3', 'all' );
	wp_enqueue_script( 'bs-5-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.3.0-alpha3', false );
}
add_action( 'wp_enqueue_scripts', 'load_bootstrap_scripts' );
