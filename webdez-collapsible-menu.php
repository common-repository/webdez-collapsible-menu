<?php
/*
Plugin Name: WebDez Collapsible Menu
Plugin URI: http://webdez.se/wp-plugins/collapsing-menu-widget
Description: Transforms any wp_nav_menu to a collapsible vertical menu with jQuery.
Author: WebDez aka Andreas Lundgren
Version: 1.0
Author URI: http://webdez.se/
*/

/*

	WebDez Collapsible Menu plugin is released under the GNU General Public License.

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

add_action('init','wcm_load_javascript');

/**
 * @return void
 */
function wcm_load_javascript() {
    wp_enqueue_script('jquery_wcm',WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'wcm.js', array('jquery'));
}
