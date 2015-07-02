# WordPress Helpers
## A collection of useful WordPress functions, configs and helpers

### Configs
* [.htaccess](config/.htaccess) – Misc. .htaccess configurations
* [wp-config_disallow-file-edit.php](config/wp-config_disallow-file-edit.php) – Disable the Plugin and Theme Editor
* [wp-config_disallow-file-mods.php](config/wp-config_disallow-file-mods.php) – Disable Plugin and Theme Update and Installation
* [wp-config_enable-local-ftp.php](config/wp-config_enable-local-ftp.php) – Enable local FTP when working with localhost and using plugin installation and updates in WP admin
* [wp-config_force-ssl-login.php](config/wp-config_force-ssl-login.php) – Force SSL for login and wp-admin
* [wp-config_set-urls.php](config/wp-config_set-urls.php) – Set URLs in wp-config.php to disable this option in WordPress settings

### CSS
* [style-author-comments.css](css/style-author-comments.css) – Style comment item by post author

### Functions
* [functions_add-author-to-cutsom-post-type.php](functions/functions_add-author-to-cutsom-post-type.php) – Adds custom post types to author page
* [functions_add-custom-post-type-to-rss.php](functions/functions_add-custom-post-type-to-rss.php) – Add custom post type to RSS feed
* [functions_add-custom-taxonomy.php](functions/functions_add-custom-taxonomy.php) – Add custom taxonomy
* [functions_add-sticky-to-custom-post-types.php](functions/functions_add-sticky-to-custom-post-types.php) – Add sticky option to custom post types
* [functions_allow-html-categories-description.php](functions/functions_allow-html-categories-description.php) – Allow HTML in categories description
* [functions_disable-gallery-styles.php](functions/functions_disable-gallery-styles.php) – Disable automated gallery styling to use own CSS
* [functions_disable-plugin-deactivation.php](functions/functions_disable-plugin-deactivation.php) – Disbale plugin deactivation, removes the deactivation link
* [functions_disbale-IP-comments.php](functions/functions_disbale-IP-comments.php) – Disable IP address in comments for more privacy
* [functions_encode-email-shortcode.php](functions/functions_encode-email-shortcode.php) – Hide email from Spam Bots using a shortcode
* [functions_hide-plugin-from-list.php](functions/functions_hide-plugin-from-list.php) – Hide a specific plugin from the plugin directory list
* [functions_remove-excerpt-paragraphs.php](functions/functions_remove-excerpt-paragraphs.php) – Remove paragraphs in excerpt
* [functions_remove-featured-image.php](functions/functions_remove-featured-image.php) – Remove featured image on static pages
* [functions_remove-generator-tag.php](functions/functions_remove-generator-tag.php) – Remove WordPress generator tag from the head
* [functions_remove-jetpack-css.php](functions/functions_remove-jetpack-css.php) – Remove all unwanted Jetpack CSS components from the head
* [functions_remove-version-number-from-scripts.php](functions/functions_remove-version-number-from-scripts.php) – Remove version number from JavaScript and CSS files
* [functions_remove-widgets.php](functions/functions_remove-widgets.php) – Remove widgets from WordPress
* [functions_rename-paged-slug.php](functions/functions_rename-paged-slug.php) – Rename paginated pages slug, like i.e. 'seite'

### SQL
* [update-non-https-paths.sql](sql/update-non-https-paths.sql) – Update file URLs in wp_posts by replacing http:// with relative URLs

### Theme
* [excerpt-in-meta-description.php](theme/excerpt-in-meta-description.php) – Display the post excerpt in the meta description with standard text fallback
* [get-parent-page-link.php](theme/get-parent-page-link.php) – Get the link of the parent page
* [human-time-comments.php](theme/human-time-comments.php) – Display time of submitted comment in human time
* [remove-trailing-slashes.php](theme/remove-trailing-slashes.php) – Remove trailing slashes from categories list


