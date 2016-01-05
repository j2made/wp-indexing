<?php
/*
Plugin Name:  WP Indexing
Plugin URI:   https://github.com/j2made/wp-indexing
Description:  Configure privacy settings conditionally
Version:      1.0.0
Author:       Daniel Olson
Author URI:   http://github.com/emaildano
License:      MIT License
*/

add_action( 'wp_loaded', 'wp_indexing' );

function wp_indexing() {
  if (WP_ENV !== 'production') {
    update_option( 'blog_public', '1' );
  } else {
    update_option( 'blog_public', '0' );
  }
}
