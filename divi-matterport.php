<?php
/*
Plugin Name: Divi Matterport
Plugin URI:  https://github.com/jamesbishopca/divi-matterport
Description: A module for adding Matterport embeds into Divi websites.
Version:     1.0.0
Author:      James Bishop
Author URI:  https://jamesbishop.ca/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dima-divi-matterport
Domain Path: /languages

Divi Matterport is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Matterport is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Matterport. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'dima_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dima_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviMatterport.php';
}
add_action( 'divi_extensions_init', 'dima_initialize_extension' );
endif;
