<?php
/**
 * Add sticky option to custom post types.
 */
function ppt_sticky_meta() { ?>
  <input id="ppt-sticky" name="sticky" type="checkbox" value="sticky" <?php checked( is_sticky() ); ?> />
  <label for="make-sticky" class="selectit"><?php _e( 'feature this post on front page' ) ?></label><?php
}

// select post types to show sticky post option
function e8_add_sticky_box() {
    $args = array(
        '_builtin' => false
        );
    $post_types = get_post_types( $args );
    foreach( $post_types as $post_type )
    add_meta_box( 'ppt_sticky_meta', __( 'Featured' ), 'ppt_sticky_meta', $post_type, 'side', 'high' );
}
add_action( 'admin_init', 'e8_add_sticky_box' );
?>
