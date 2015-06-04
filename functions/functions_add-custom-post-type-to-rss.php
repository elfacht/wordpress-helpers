<?php
/**
 * Add custom post type to RSS feed.
 */
function cpt_rss_feed($qv) {
  if (isset($qv['feed']))
    $qv['post_type'] = get_post_types(); // adds all cpt to RSS feed.
    # $qv['post_type'] = 'your-post-type'; // adds selected cpt to RSS feed
  return $qv;
}
add_filter('request', 'cpt_rss_feed');
?>
