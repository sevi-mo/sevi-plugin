<?php 
/**
 * @package  SeviPlugin
 */

namespace Inc\Base;

class BaseController
{
	public $plugin_path;
	public $plugin_url;
	public $plugin;
	public $managers = array();
	public function __construct()
	{
		$this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
		$this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
		$this->plugin = plugin_basename(dirname(__FILE__, 3)) . '/sevi-plugin.php';
		$this->managers = array(
			'cpt_manager' => 'Activate CPT Manager',
			'taxonomy_manager' => 'Activate Taxonomy Manager',
			'media_widget' => 'Activate Media Widget',
			// 'slideshow_manager' => 'Activate Slideshow Manager (not yet)',
			'testimonial_manager' => 'Activate Testimonial Manager',
			// 'templates_manager' => 'Activate Custom Templates (not yet)',
			// 'login_manager' => 'Activate Ajax Login/Signup (not yet)',
			// 'membership_manager' => 'Activate Membership Manager (not yet)',
			// 'chat_manager' => 'Activate Chat Manager (not yet)'
		);
	}
	public function activated(string $key)
	{
		$option = get_option('sevi_plugin');
		return isset($option[$key]) ? $option[$key] : false;
	}
}