<?php
/**
 * Remove paragraphs (<p>) in excerpt.
 */
remove_filter('the_excerpt', 'wpautop');
?>
