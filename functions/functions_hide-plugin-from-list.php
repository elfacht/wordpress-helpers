<?php
/**
 * Hide a specific plugin from the plugin directory list
 */
function hide_plugin_trickspanda() {
  global $wp_list_table;
  $hidearr = array('plugin-directory/plugin-file.php');
  $myplugins = $wp_list_table->items;
  foreach ($myplugins as $key => $val) {
    if (in_array($key,$hidearr)) {
      unset($wp_list_table->items[$key]);
    }
  }
}

add_action('pre_current_active_plugins', 'hide_plugin_trickspanda');

?>
