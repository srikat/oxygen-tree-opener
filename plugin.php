<?php
/*
Plugin Name:	Oxygen Tree Opener
Plugin URI:		https://wpdevdesign.com/oxygen-tree-opener-plugin/
Description:	Automatically opens the Structure (DOM tree) panel in the Oxygen editor.
Version:		1.0.0
Author:			Sridhar Katakam
Author URI:		https://sridharkatakam.com
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

// If Oxygen is not active, abort.
// Commenting this out for now as this seems to cause issues..
// if ( ! is_plugin_active( 'oxygen/functions.php' ) ) {
// 	die;
// }

add_action( 'oxygen_enqueue_ui_scripts', 'oto_enqueue_files' );
/**
 * Loads the plugin's JS file.
 */
function oto_enqueue_files() {

	if ( defined( 'SHOW_CT_BUILDER' ) ) {
		wp_enqueue_script( 'oxygen-tree-opener', plugin_dir_url( __FILE__ ) . 'assets/js/main.js', array( 'jquery' ), '1.0.0', true );
	}

}
