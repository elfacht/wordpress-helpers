<?php
  /**
   * Display the post excerpt in the meta description with standard text fallback
   */
?>
<meta name="description" content="<?php if (have_posts() && is_single()): while(have_posts()): the_post(); the_excerpt(); endwhile; else: ?>Standard description<?php endif; ?>" />