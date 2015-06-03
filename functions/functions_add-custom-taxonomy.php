/**
 * Add custom taxonomy
 */
add_action('init', 'create_tracks_compilations');
function create_tracks_compilations() {
  register_taxonomy('compilations', 'tracks',
    array(
      'hierarchical' => true,
      'labels' => array(
        'name' => 'Compilations',
        'add_new_item' => 'Add new compilation'
      ),
      'show_ui' => true,
      'public' => true,
      'query_var' => 'compilations'
    )
  );
}