<?php
/**
 * Hide email from Spam Bots using a shortcode
 *
 * Usage: [email]foo@bar.com[/email]
 *
 * Source: https://codex.wordpress.org/Function_Reference/antispambot
 *
 * @param array  $atts    Shortcode attributes. Not used.
 * @param string $content The shortcode content. Should be an email address.
 *
 * @return string The obfuscated email address.
 */

function wpcodex_hide_email_shortcode($atts , $content = null) {
  if ( ! is_email( $content ) ) {
    return;
  }

  return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
}

add_shortcode( 'email', 'wpcodex_hide_email_shortcode' );
?>

