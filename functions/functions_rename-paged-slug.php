<?php
/**
 * Rename paginated pages slug, like i.e. 'seite'
 */
if ( ! function_exists( 't5_page_to_seite' ) ) {
    register_activation_hook(   __FILE__ , 't5_flush_rewrite_on_init' );
    register_deactivation_hook( __FILE__ , 't5_flush_rewrite_on_init' );
    add_action( 'init', 't5_page_to_seite' );

    function t5_page_to_seite() {

      // Choose desired slug instead of '/page/$'
      $GLOBALS['wp_rewrite']->pagination_base = 'seite';
    }

    function t5_flush_rewrite_on_init() {
      add_action( 'init', 'flush_rewrite_rules', 11 );
    }
}

?>
