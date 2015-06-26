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

/**
 * Use this for multisites
 */
function mu_hide_plugins_network( $plugins ) {
    // let's hide akismet
    if( in_array( 'akismet/akismet.php', array_keys( $plugins ) ) ) {
        unset( $plugins['akismet/akismet.php'] );
    }
    return $plugins;
}

add_filter( 'all_plugins', 'mu_hide_plugins_network' );

?>
