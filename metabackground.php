<?php
/*
Plugin Name: MetaBackGround
Plugin URI: http://www.mores.cc/metabackground
Description: Backgroundimages for posts and pages. Add a custom field called BGIMAGE with the absolute link to your desired background image.
Version: 1.0
Author: Mores Daniel
Author URI: http://www.mores.cc/
*/

add_action('wp_head', 'mores_metabackground');

function mores_metabackground() {
	global $post;
	
	$key = "BGIMAGE";
	$BGIMAGE = get_post_meta($post->ID, $key, true);
	
	if(!empty($BGIMAGE)) { 
		echo "\n<style>\nbody{background: url('".$BGIMAGE."');}\n</style>\n";
	} 
} ?>