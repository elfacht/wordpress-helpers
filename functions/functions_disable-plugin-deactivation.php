<?php
/**
 * Disbale plugin deactivation, removes the deactivation link
 */
add_filter('plugin_action_links', 'e8_lock_plugins', 10, 4);
function e8_lock_plugins($actions, $plugin_file, $plugin_data, $context) {
  // Remove edit link for all
  if (array_key_exists('edit', $actions))
    unset($actions['edit']);
  // Remove deactivate link for crucial plugins
  if (array_key_exists('deactivate', $actions) && in_array($plugin_file, array(
    'plugin-name/plugin-name.php'
  )))
  unset($actions['deactivate']);
  return $actions;
}
?>
