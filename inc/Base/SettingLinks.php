<?php
/**
 * @package  AlecadddPlugin
 */
namespace Inc\Base;

class SettingLinks
{

	public function __construct() {
		$this->plugin = PLUGIN;
	}
	public function register() {
		add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
	}

	public function setting_link( $links ) {

		$settings_link = '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
		array_push( $links, $settings_link );
		return $links;

	}
}