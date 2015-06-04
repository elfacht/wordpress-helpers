<?php
/**
 * Remove featured image on static pages
 */
add_action('init', 'e8_remove_thumbs');

function e8_remove_thumbs() {
  remove_post_type_support('page','thumbnail');
}
?>
