<?php
 /**
 *
 * @package WebODF Integration Elgg
 */

elgg_register_event_handler('init', 'system', 'webodf_elgg_init');

function webodf_elgg_init() {

			global $CONFIG;

	elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'expages_public_pages');
}
function expages_public_pages($hook, $type, $return_value, $params) {
	$allowed_pages = array();
	$allowed_pages[] = 'webodf_elgg/*.*/*.*';
	return $allowed_pages; 
}
?>