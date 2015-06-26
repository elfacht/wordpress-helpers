<?php
/**
 * Remove trailing slashes from categories list
 */
$catstr = get_category_parents($cat, TRUE, ' / ');
echo substr($catstr, 0, strlen($catstr) -3 );
?>
