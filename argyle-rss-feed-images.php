<?php

/*
Plugin Name: Argyle RSS Thumbnails
Description: Adds a post thumbnail to your RSS feed.
Version: 0.1.0
License: GPL2+
Author: Drew Poland
Author URI: http://www.baltimoredrew.com
*/

function argyle_insert_thumb_rss($content) {
	global $post;
		if ( has_post_thumbnail( $post->ID ) ){
			$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail' ) . '' . $content;
		}
	return $content;
}

add_filter('the_excerpt_rss', 'argyle_insert_thumb_rss');
add_filter('the_content_feed', 'argyle_insert_thumb_rss');

?>