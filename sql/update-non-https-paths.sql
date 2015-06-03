/**
 * Update image URLs in wp_posts
 * by replacing http:// with relative URLs
 */
UPDATE wp_posts
SET    post_content = ( Replace (post_content, 'src="http://', 'src="//') )
WHERE  Instr(post_content, 'jpeg') > 0
        OR Instr(post_content, 'jpg') > 0
        OR Instr(post_content, 'gif') > 0
        OR Instr(post_content, 'png') > 0;

/**
 * Update iframe src in postmeta
 * by replacing http:// with relative URLs
 */
UPDATE wp_postmeta
SET meta_value=(REPLACE (meta_value, 'iframe src="http://','iframe src="//'));