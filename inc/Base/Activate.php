<?php
/**
 * @package  SeviPlugin
 */
namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();

		$default = array();

		if ( ! get_option( 'sevi_plugin' ) ) {
			update_option( 'sevi_plugin', $default );
		}

		if ( ! get_option( 'sevi_plugin_cpt' ) ) {
			update_option( 'sevi_plugin_cpt', $default );
		}
		if ( ! get_option( 'sevi_plugin_tax' ) ) {
			update_option( 'sevi_plugin_tax', $default );
		}
		if (!get_option('sevi_plugin_slideshow')) {
			update_option('sevi_plugin_slideshow', $default);
		}
		
	}
}