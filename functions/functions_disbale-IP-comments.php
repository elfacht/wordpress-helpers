<?php
/**
 * Disable IP address in comments for more privacy
 */
add_filter('pre_comment_user_ip', 'no_ips');
function no_ips($comment_author_ip){
  return '';
}
?>
