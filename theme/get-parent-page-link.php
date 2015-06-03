<?php
  /**
   * Get the link of the parent page
   */
?>

<?php if ($post->post_parent) :
  $e8_parent_permalink = get_permalink($post->post_parent); ?>
  <a href="<?php echo $e8_parent_permalink; ?>">Link to parent page</a>
<?php endif; ?>