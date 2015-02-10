<?php

/**

** teresa helpers
** All files router


*/

/**********************Files & Folders Constants********************************************************************/

define ('CORE_FILES', get_template_directory() . '/core');
define ('IMAGE_PATH',get_bloginfo('template_url'). '/core/layout-files/images/', true );


/****************************REQUIRES*****************************/
require CORE_FILES . '/functions/theme_functions.php';
require CORE_FILES . '/meta-boxes/meta.php';
require CORE_FILES . '/functions/dynamic-classes.php';
require CORE_FILES . '/functions/wp_bootstrap_navwalker.php';
require CORE_FILES . '/custom-posts/custom_posts_require.php';
require CORE_FILES . '/shortcodes/teresa_shortcodes.php';
require_once CORE_FILES . '/widgets/social-widget.php';
require_once CORE_FILES . '/widgets/latestNews-widget.php';
require_once CORE_FILES . '/widgets/photoStream-widget.php';