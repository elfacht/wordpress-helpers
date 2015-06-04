<?php
/**
 * Remove version number from JavaScript and CSS files
 */
add_filter( 'script_loader_src', 'remove_src_version' );
add_filter( 'style_loader_src', 'remove_src_version' );

function remove_src_version ( $src ) {

  global $wp_version;

  $version_str = '?ver='.$wp_version;
  $version_str_offset = strlen( $src ) - strlen( $version_str );

  if( substr( $src, $version_str_offset ) == $version_str )
    return substr( $src, 0, $version_str_offset );
  else
    return $src;

}
?>
