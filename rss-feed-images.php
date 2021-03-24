<?php

/*
Plugin Name: RSS Feed Images
Description: Adds a post image to your RSS feed.
Version: 0.1.0
License: GPL2+
Author: Chris Baldelomar
Author URI: https://webplant.media
*/

function rss_feed_images_insert_image_rss($content) {
	global $post;
		if ( has_post_thumbnail( $post->ID ) ){
			$content = '' . get_the_post_thumbnail( $post->ID, 'large' ) . '' . $content;
		}
	return $content;
}

add_filter('the_excerpt_rss', 'rss_feed_images_insert_image_rss');
add_filter('the_content_feed', 'rss_feed_images_insert_image_rss');
