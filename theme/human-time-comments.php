<?php
  /**
   * Display time of submitted comment in human time.
   *
   * Replace first parameter with time of submitted comment.
   * Replace second parameter with current time.
   */
?>

<?php $diff = human_time_diff('2012-05-05 12:05:00', '2012-05-05 12:10:00'); ?>

This comment was submitted <?php echo $diff; ?> ago