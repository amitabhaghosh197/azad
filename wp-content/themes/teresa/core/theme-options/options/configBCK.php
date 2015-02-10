<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux_Framework_sample_config' ) ) {

        class Redux_Framework_sample_config {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Just for demo purposes. Not needed per say.
                $this->theme = wp_get_theme();

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                // If Redux is running as a plugin, this will remove the demo notice and links
                //add_action( 'redux/loaded', array( $this, 'remove_demo' ) );

                // Function to test the compiler hook and demo CSS output.
                // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
                //add_filter('redux/options/'.$this->args['opt_name'].'/compiler', array( $this, 'compiler_action' ), 10, 3);

                // Change the arguments after they've been declared, but before the panel is created
                //add_filter('redux/options/'.$this->args['opt_name'].'/args', array( $this, 'change_arguments' ) );

                // Change the default value of a field after it's been set, but before it's been useds
                //add_filter('redux/options/'.$this->args['opt_name'].'/defaults', array( $this,'change_defaults' ) );

                // Dynamically add a section. Can be also used to modify sections/fields
                //add_filter('redux/options/' . $this->args['opt_name'] . '/sections', array($this, 'dynamic_section'));

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            /**
             * This is a test function that will let you see when the compiler hook occurs.
             * It only runs if a field    set with compiler=>true is changed.
             * */
            function compiler_action( $options, $css, $changed_values ) {
                echo '<h1>The compiler hook has run!</h1>';
                echo "<pre>";
                print_r( $changed_values ); // Values that have changed since the last save
                echo "</pre>";
                //print_r($options); //Option values
                //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )

                /*
              // Demo of how to use the dynamic CSS and write your own static CSS file
              $filename = dirname(__FILE__) . '/style' . '.css';
              global $wp_filesystem;
              if( empty( $wp_filesystem ) ) {
                require_once( ABSPATH .'/wp-admin/includes/file.php' );
              WP_Filesystem();
              }

              if( $wp_filesystem ) {
                $wp_filesystem->put_contents(
                    $filename,
                    $css,
                    FS_CHMOD_FILE // predefined mode settings for WP files
                );
              }
             */
            }

            /**
             * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
             * Simply include this function in the child themes functions.php file.
             * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
             * so you must use get_template_directory_uri() if you want to use any of the built in icons
             * */
            function dynamic_section( $sections ) {
                //$sections = array();
                $sections[] = array(
                    'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                    'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-paper-clip',
                    // Leave this as a blank section, no options just some intro text set above.
                    'fields' => array()
                );

                return $sections;
            }

            /**
             * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
             * */
            function change_arguments( $args ) {
                //$args['dev_mode'] = true;

                return $args;
            }

            /**
             * Filter hook for filtering the default value of any given field. Very useful in development mode.
             * */
            function change_defaults( $defaults ) {
                $defaults['str_replace'] = 'Testing filter hook!';

                return $defaults;
            }

            // Remove the demo link and the notice of integrated demo from the redux-framework plugin
            function remove_demo() {

                // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
                if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                    remove_filter( 'plugin_row_meta', array(
                        ReduxFrameworkPlugin::instance(),
                        'plugin_metalinks'
                    ), null, 2 );

                    // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                    remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
                }
            }

            public function setSections() {

                /**
                 * Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
                 * */
                // Background Patterns Reader
                $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
                $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
                $sample_patterns      = array();

                if ( is_dir( $sample_patterns_path ) ) :

                    if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
                        $sample_patterns = array();

                        while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                            if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                                $name              = explode( '.', $sample_patterns_file );
                                $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                                $sample_patterns[] = array(
                                    'alt' => $name,
                                    'img' => $sample_patterns_url . $sample_patterns_file
                                );
                            }
                        }
                    endif;
                endif;

                ob_start();

                $ct          = wp_get_theme();
                $this->theme = $ct;
                $item_name   = $this->theme->get( 'Name' );
                $tags        = $this->theme->Tags;
                $screenshot  = $this->theme->get_screenshot();
                $class       = $screenshot ? 'has-screenshot' : '';

                $customize_title = sprintf( __( 'Customize &#8220;%s&#8221;', 'redux-framework-demo' ), $this->theme->display( 'Name' ) );

                ?>
                <div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
                    <?php if ( $screenshot ) : ?>
                        <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                            <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize"
                               title="<?php echo esc_attr( $customize_title ); ?>">
                                <img src="<?php echo esc_url( $screenshot ); ?>"
                                     alt="<?php esc_attr_e( 'Current theme preview', 'redux-framework-demo' ); ?>"/>
                            </a>
                        <?php endif; ?>
                        <img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>"
                             alt="<?php esc_attr_e( 'Current theme preview', 'redux-framework-demo' ); ?>"/>
                    <?php endif; ?>

                    <h4><?php echo $this->theme->display( 'Name' ); ?></h4>

                    <div>
                        <ul class="theme-info">
                            <li><?php printf( __( 'By %s', 'redux-framework-demo' ), $this->theme->display( 'Author' ) ); ?></li>
                            <li><?php printf( __( 'Version %s', 'redux-framework-demo' ), $this->theme->display( 'Version' ) ); ?></li>
                            <li><?php echo '<strong>' . __( 'Tags', 'redux-framework-demo' ) . ':</strong> '; ?><?php printf( $this->theme->display( 'Tags' ) ); ?></li>
                        </ul>
                        <p class="theme-description"><?php echo $this->theme->display( 'Description' ); ?></p>
                        <?php
                            if ( $this->theme->parent() ) {
                                printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'redux-framework-demo' ) . '</p>', __( 'http://codex.wordpress.org/Child_Themes', 'redux-framework-demo' ), $this->theme->parent()->display( 'Name' ) );
                            }
                        ?>

                    </div>
                </div>

                <?php
                $item_info = ob_get_contents();

                ob_end_clean();

                $sampleHTML = '';
                if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
                    Redux_Functions::initWpFilesystem();

                    global $wp_filesystem;

                    $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
                }
          
		       $this->sections[] = array(
                    'type' => 'divide',
                );
				
				$this->sections[] = array(
                    'title'  => __( 'Header Settings', 'redux-framework-demo' ),
                    'desc'   => __( '', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-home',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
					
					
                        array(
                            'id'       => 'opt-media-header-logo',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'HEADER LOGO', 'redux-framework-demo' ),
                            'compiler' => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( '', 'redux-framework-demo' ),
                            'subtitle' => __( 'Upload <strong>Header Logo</strong> using the WordPress native uploader', 'redux-framework-demo' ),
                            'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),
					array(
                            'id'       => 'switch-on-theme-seo',
                            'type'     => 'switch',
                            'title'    => __( 'Switch Off/On Theme SEO', 'redux-framework-demo' ),
                            'subtitle' => __( 'If you install SEO plugin then Switch off This Theme SEO', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
						
					  array(
                            'id'       => 'opt-text-keyword',
                            'type'     => 'textarea',
                            'title'    => __( 'Meta Keyword', 'redux-framework-demo' ),
                            'subtitle' => __( 'First Content Title', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Livelihoods With Dignity For Women',
                        ),
						
						 array(
                            'id'       => 'opt-text-description',
                            'type'     => 'textarea',
                            'title'    => __( 'Meta Keyword', 'redux-framework-demo' ),
                            'subtitle' => __( 'First Content Title', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Livelihoods With Dignity For Women',
                        ),
					
					
					
					array(
                            'id'       => 'switch-on-uber-menu',
                            'type'     => 'switch',
                            'title'    => __( 'Switch Off/On Mega Menu', 'redux-framework-demo' ),
                            'subtitle' => __( 'If you switch off Mega Menu then normal menu will show. Please leave vacant in Automatic Integration Theme Location under Uber Menu Configuration to keep this feature active', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
					),
					
					);
              
			  $this->sections[] = array(
                    'title'  => __( 'Home Page Content Settings', 'redux-framework-demo' ),
                    'desc'   => __( '', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-folder',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
					
					array(
                            'id'    => 'opt-info-warning-one',
                            'type'  => 'info',
                            'style' => 'warning',
                            'title' => __( 'First Content Area', 'redux-framework-demo' ),
                            'desc'  => __( 'Programme impact, Women on wheels and Sories of courage', 'redux-framework-demo' )
                        ),
					
					
					array(
                            'id'       => 'switch-on-content-livelihood',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable 1st Content Section', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> the the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ),  
                       array(
                            'id'       => 'opt-text-content-first-h2',
                            'type'     => 'text',
                            'title'    => __( 'First Content Title', 'redux-framework-demo' ),
                            'subtitle' => __( 'First Content Title', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Livelihoods With Dignity For Women',
                        ),
						 array(
                            'id'   => 'opt-info-one',
                            'type' => 'info',
                            'desc' => __( 'PROGRAMME IMPACT.', 'redux-framework-demo' ),
                        ),
                        
						  array(
                            'id'       => 'opt-text-programe-imapact-heading',
                            'type'     => 'text',
                            'title'    => __( 'PROGRAMME IMPACT FEATURED HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( 'First Content Title', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Livelihoods With Dignity For Women',
                        ),
						
						array(
                            'id'       => 'opt-media-programe-image',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'PROGRAMME IMPACT FEATURED IMAGE', 'redux-framework-demo' ),
                            'compiler' => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            //'desc'     => __( '', 'redux-framework-demo' ),
                            'subtitle' => __( 'Upload <strong>Header Logo</strong> using the WordPress native uploader', 'redux-framework-demo' ),
                            'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),
						
						array(
                            'id'       => 'opt-editor-programme-content',
                            'type'     => 'editor',
                            'title'    => __( 'PROGRAMME IMPACT CONTENT', 'redux-framework-demo' ),
                            'subtitle' => __( 'You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-demo' ),
                            'default'  => 'Powered by Da Miracle.',
                        ),
						
						array(
                            'id'   => 'opt-info-two',
                            'type' => 'info',
                            'desc' => __( 'WOMEN ON WHEELS', 'redux-framework-demo' ),
                        ),
						
						 array(
                            'id'       => 'opt-text-WOW-heading',
                            'type'     => 'text',
                            'title'    => __( 'Women on Wheels FEATURED HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( 'The heading of WOW after the Featured Image', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Women on Wheels',
                        ),
						
						array(
                            'id'       => 'opt-media-WOW-image',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Women on Wheels FEATURED IMAGE', 'redux-framework-demo' ),
                            'compiler' => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            //'desc'     => __( '', 'redux-framework-demo' ),
                            'subtitle' => __( 'Upload <strong>WOW Featured Image</strong>  using the WordPress native uploader', 'redux-framework-demo' ),
                            'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),
						
						array(
                            'id'       => 'opt-editor-WOW-content',
                            'type'     => 'editor',
                            'title'    => __( 'Women on Wheels CONTENT', 'redux-framework-demo' ),
                            'subtitle' => __( 'You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-demo' ),
                            'default'  => 'Powered by Da Miracle.',
                        ),
						
						array(
                            'id'   => 'opt-info-three',
                            'type' => 'info',
                            'desc' => __( 'STORIES OF COURAGE.', 'redux-framework-demo' ),
                        ),
						
						array(
                            'id'       => 'opt-text-COURAGE-heading',
                            'type'     => 'text',
                            'title'    => __( 'Stories of Courages FEATURED HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( 'The heading of Stories of Courages after the Featured Slider', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Women on Wheels',
                        ),
						
						array(
                            'id'       => 'opt-editor-COURAGE-content',
                            'type'     => 'editor',
                            'title'    => __( 'Stories of Courages CONTENT', 'redux-framework-demo' ),
                            'subtitle' => __( 'You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-demo' ),
                            'default'  => 'Powered by Da Miracle.',
                        ),
						
						array(
                            'id'    => 'opt-info-warning-two',
                            'type'  => 'info',
                            'style' => 'warning',
                            'title' => __( 'Switch On / OFF Latest News Section', 'redux-framework-demo' ),
                            'desc'  => __( '', 'redux-framework-demo' )
                        ),
						
						array(
                            'id'       => 'switch-on-section-news',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable Latest News Section', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> then the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ), 
						
						/*************GET INVOLVED***************************/
						array(
                            'id'    => 'opt-info-warning-three',
                            'type'  => 'info',
                            'style' => 'warning',
                            'title' => __( 'GET INVOLVED SECTION', 'redux-framework-demo' ),
                            'desc'  => __( '', 'redux-framework-demo' )
                        ),
						array(
                            'id'       => 'switch-on-section-get-involved',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable Get Involved Section', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> then the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
					
					array(
                            'id'   => 'opt-info-four',
                            'type' => 'info',
                            'desc' => __( 'Left Section.', 'redux-framework-demo' ),
                        ),
					    array(
                            'id'       => 'opt-media-get-involved-bg',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Get Involved Background', 'redux-framework-demo' ),
                            'compiler' => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( '', 'redux-framework-demo' ),
                            'subtitle' => __( 'Upload <strong>Header Logo</strong> using the WordPress native uploader', 'redux-framework-demo' ),
                            'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),
						
						array(
                            'id'       => 'opt-text-get-involved-heading',
                            'type'     => 'text',
                            'title'    => __( 'Get Involved HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( 'The heading of Stories of Courages after the Featured Slider', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Get Involved',
                        ),
						
						array(
                            'id'       => 'opt-editor-get-involved-li',
                            'type'     => 'editor',
                            'title'    => __( 'Get Involved Left Contents', 'redux-framework-demo' ),
                            'subtitle' => __( 'Write in li format. example ', 'redux-framework-demo' ),
                            'default'  => '<li><a class="tlt" href=""> VOLUNTEER</a></li>',
                        ),
						
						array(
                            'id'       => 'opt-text-get-involved-learnmore',
                            'type'     => 'text',
                            'title'    => __( 'Learn More Button Link', 'redux-framework-demo' ),
                            'subtitle' => __( '', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'http://damiracle.com',
                        ),
						
						array(
                            'id'   => 'opt-info-four',
                            'type' => 'info',
                            'desc' => __( 'Right Section.', 'redux-framework-demo' ),
                        ),
						array(
                            'id'       => 'opt-text-get-involved-video',
                            'type'     => 'text',
                            'title'    => __( 'Right Side Video iframe', 'redux-framework-demo' ),
                            'subtitle' => __( 'Just put the Vimeo video sharing url e.g. //player.vimeo.com/video/12239996', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Get Involved',
                        ),
					
					 
					 /*****************           ABOUT US GALLERY FACEBOOK POSTS    ************************/
					 array(
                            'id'    => 'opt-info-warning-four',
                            'type'  => 'info',
                            'style' => 'warning',
                            'title' => __( 'ABOUT US SECTION', 'redux-framework-demo' ),
                            'desc'  => __( 'Facebook, About us, Gallery', 'redux-framework-demo' )
                        ),
					 
					 array(
                            'id'       => 'switch-on-about-fb-gal',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable Facebook Embed Posts, About Us, Gallery  Section', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> then the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
					
					array(
                            'id'   => 'opt-info-five',
                            'type' => 'info',
                            'desc' => __( 'Facebook.', 'redux-framework-demo' ),
                        ),
						
					array(
                            'id'       => 'opt-text-fb-heading',
                            'type'     => 'text',
                            'title'    => __( 'Facebook HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( 'The Facebook Heading', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Facebook',
                        ),
						
					array(
                            'id'       => 'opt-editor-fab-block',
                            'type'     => 'editor',
                            'title'    => __( 'Facebook Contents', 'redux-framework-demo' ),
                            'subtitle' => __( ' ', 'redux-framework-demo' ),
                            'default'  => 'Facebook',
                        ),
					
					array(
                            'id'   => 'opt-info-six',
                            'type' => 'info',
                            'desc' => __( 'About us.', 'redux-framework-demo' ),
                        ),
						
					array(
                            'id'       => 'opt-text-about-us-heading',
                            'type'     => 'text',
                            'title'    => __( 'About Us HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( '', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'About Us',
                        ),
					
					array(
                            'id'       => 'opt-media-about-us-image',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'About Us Image', 'redux-framework-demo' ),
                            'compiler' => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( '', 'redux-framework-demo' ),
                            'subtitle' => __( 'Upload <strong>Header Logo</strong> using the WordPress native uploader', 'redux-framework-demo' ),
                            'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),	
					
					array(
                            'id'       => 'opt-editor-about-us-content',
                            'type'     => 'editor',
                            'title'    => __( 'About Us Content Contents', 'redux-framework-demo' ),
                            'subtitle' => __( ' ', 'redux-framework-demo' ),
                            'default'  => 'About Us Content',
                        ),
					array(
                            'id'   => 'opt-info-seven',
                            'type' => 'info',
                            'desc' => __( 'Gallery', 'redux-framework-demo' ),
                        ),
						
					array(
                            'id'       => 'opt-text-gallery-heading',
                            'type'     => 'text',
                            'title'    => __( 'Gallery HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( '', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Gallery',
							),
							
							
							/*******************************OUR TRUSTEES**************************************************/
							 array(
                            'id'    => 'opt-info-warning-five',
                            'type'  => 'info',
                            'style' => 'warning',
                            'title' => __( 'Our Trustees Section', 'redux-framework-demo' ),
                            'desc'  => __( '', 'redux-framework-demo' )
                        ),
							
							array(
                            'id'       => 'switch-on-our-trustees',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable Our Trustees  Section', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> then the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
						
						array(
                            'id'       => 'opt-text-trustees-heading',
                            'type'     => 'text',
                            'title'    => __( 'Our Trustees HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( '', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Our Trustees',
							),
						
						
                        ),
						
					);

                $this->sections[] = array(
                    'type' => 'divide',
                );

                $this->sections[] = array(
                    'icon'   => 'el-icon-cogs',
                    'title'  => __( 'General Settings', 'redux-framework-demo' ),
                    'fields' => array(
                        
                        array(
                            'id'       => 'opt-textarea',
                            'type'     => 'textarea',
                            'required' => array( 'layout', 'equals', '1' ),
                            'title'    => __( 'Tracking Code', 'redux-framework-demo' ),
                            'subtitle' => __( 'Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', 'redux-framework-demo' ),
                            'validate' => 'js',
                            'desc'     => 'Validate that it\'s javascript!',
                        ),
                        array(
                            'id'       => 'opt-ace-editor-css',
                            'type'     => 'ace_editor',
                            'title'    => __( 'CSS Code', 'redux-framework-demo' ),
                            'subtitle' => __( 'Paste your CSS code here.', 'redux-framework-demo' ),
                            'mode'     => 'css',
                            'theme'    => 'monokai',
                            'desc'     => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                            'default'  => "#header{\nmargin: 0 auto;\n}"
                        ),
                        /*
                    array(
                        'id'        => 'opt-ace-editor-js',
                        'type'      => 'ace_editor',
                        'title'     => __('JS Code', 'redux-framework-demo'),
                        'subtitle'  => __('Paste your JS code here.', 'redux-framework-demo'),
                        'mode'      => 'javascript',
                        'theme'     => 'chrome',
                        'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default'   => "jQuery(document).ready(function(){\n\n});"
                    ),
                    array(
                        'id'        => 'opt-ace-editor-php',
                        'type'      => 'ace_editor',
                        'title'     => __('PHP Code', 'redux-framework-demo'),
                        'subtitle'  => __('Paste your PHP code here.', 'redux-framework-demo'),
                        'mode'      => 'php',
                        'theme'     => 'chrome',
                        'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default'   => '<?php\nisset ( $redux ) ? true : false;\n?>'
                    ),
                    */
                        array(
                            'id'       => 'opt-editor',
                            'type'     => 'editor',
                            'title'    => __( 'Footer Text', 'redux-framework-demo' ),
                            'subtitle' => __( 'You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-demo' ),
                            'default'  => 'Powered by Redux Framework.',
                        ),
                       
                    )
                );

                $this->sections[] = array(
                    'icon'       => 'el-icon-website',
                    'title'      => __( 'Styling Options', 'redux-framework-demo' ),
                    'subsection' => true,
                    'fields'     => array(
                        
                        array(
                            'id'       => 'opt-background',
                            'type'     => 'background',
                            'output'   => array( 'body' ),
                            'title'    => __( 'Body Background', 'redux-framework-demo' ),
                            'subtitle' => __( 'Body background with image, color, etc.', 'redux-framework-demo' ),
                            //'default'   => '#FFFFFF',
                        ),
						
						array(
                            'id'       => 'opt-color-theme-color',
                            'type'     => 'color',
                            'title'    => __( 'Theme Background Color', 'redux-framework-demo' ),
                            'subtitle' => __( 'Pick a background color for the footer (default: #dd9933).', 'redux-framework-demo' ),
                            'default'  => '#61284b',
                            'validate' => 'color',
                        ),
						
                        array(
                            'id'       => 'opt-color-footer',
                            'type'     => 'color',
                            'title'    => __( 'Footer Background Color', 'redux-framework-demo' ),
                            'subtitle' => __( 'Pick a background color for the footer (default: #dd9933).', 'redux-framework-demo' ),
                            'default'  => '#2b2b2b',
                            'validate' => 'color',
                        ),
                        
                        
						array(
                            'id'       => 'opt-typography-h1',
                            'type'     => 'typography',
                            'title'    => __( 'H1 Font', 'redux-framework-demo' ),
                            'subtitle' => __( 'Specify the body font properties.', 'redux-framework-demo' ),
                            'google'   => true,
                            'default'  => array(
                                'color'       => '#595959',
                                'font-size'   => '30px',
                                'font-family' => 'Arial,Helvetica,sans-serif',
                                'font-weight' => 'Normal',
                            ),
                        ),
						
						array(
                            'id'       => 'opt-typography-h2',
                            'type'     => 'typography',
                            'title'    => __( 'H2 Font', 'redux-framework-demo' ),
                            'subtitle' => __( 'Specify the body font properties.', 'redux-framework-demo' ),
                            'google'   => true,
							'text-transform' => 'uppercase',
                            'default'  => array(
                                'color'       => '#595959',
                                'font-size'   => '30px',
                                'font-family' => 'Arial,Helvetica,sans-serif',
                                'font-weight' => 'Normal',
                            ),
                        ),
						
						
                      
                        
                    )
                );
				$shortcodes_info = '<div>';
				
				$shortcodes_info .= '<h3>Full Width Section</h3>';
				$shortcodes_info .= '<code>[teresa_full_width_section background="#61284b" paddingtop="100" paddingbottom="150" paddingright="0" paddingleft="0"]</code>';
				$shortcodes_info .= '<h3>Container Wrapper</h3>';
				$shortcodes_info .= '<code>[teresa_container_wrapper background="#fff"]</code>';
				$shortcodes_info .= '<h3>Full Column</h3>';
				$shortcodes_info .= '<code>[full_col] Full Column[/full_col]</code>';
				$shortcodes_info .= '<h3>One Sixth Column</h3>';
				$shortcodes_info .= '<code>[one_sixth_col] This is one sixth Column[/one_sixth_col]</code>';
				$shortcodes_info .= '<h3>Three Sixth Column</h3>';
				$shortcodes_info .= '<code>[three_sixth_col] This is three sixth column[/three_sixth_col]</code>';
				$shortcodes_info .= '<h3>Four Sixth Column</h3>';
				$shortcodes_info .= '<code>[four_sixth_col] This is four sixth[/four_sixth_col]</code>';
				$shortcodes_info .= '<h3>Five Sixth Column</h3>';
				$shortcodes_info .= '<code>[five_sixth_col]This is five sixth col[/five_sixth_col]</code>';
				$shortcodes_info .= '<h3>One Fourth Column</h3>';
				$shortcodes_info .= '<code>[one_fourth_col] This is One Fourth col[/one_fourth_col]</code>';
				$shortcodes_info .= '<h3>Two Fourth Column</h3>';
				$shortcodes_info .= '<code>[two_fourth_col] This Two Fourth Col[/two_fourth_col]</code>';
				$shortcodes_info .= '<h3>Three Fourth Column</h3>';
				$shortcodes_info .= '<code>[three_fourth_col]This is Three Fourth col[/three_fourth_col]</code>';
				$shortcodes_info .= '<h3>One Third Column</h3>';
				$shortcodes_info .= '<code>[one_third_col]This is One Third Col[/one_third_col]</code>';
				$shortcodes_info .= '<h3>Two Third Column</h3>';
				$shortcodes_info .= '<code>[two_third_col] This is Two Third Col[/two_third_col]</code>';
				$shortcodes_info .= '<h3>One Half Column</h3>';
				$shortcodes_info .= '<code>[one_half_col] This One Half Col[/one_half_col]</code>';
				$shortcodes_info .= '<h3>Animated Button</h3>';
				$shortcodes_info .= '<code>[teresa_damira_buttons link = "http://google.com"] Read More[/teresa_damira_buttons]</code>';
				$shortcodes_info .= '<h3>Vertical Gap</h3>';
				$shortcodes_info .= '<code>[teresa_vertical_gap height="50"][/teresa_vertical_gap]</code>';
				$shortcodes_info .= '</div>';
				
             $this->sections[] = array(
                    'icon'   => 'el-icon-info-sign',
                    'title'  => __( 'Shortcodes', 'redux-framework-demo' ),
                    'desc'   => __( '<p class="description">All available shortcodes. Example : <a href="' . esc_url( home_url( '/?page_id=2' )) .'">See Example</a></p>', 'redux-framework-demo' ),
                    'fields' => array(
                        array(
                            'id'      => 'opt-raw-info-two',
                            'type'    => 'raw',
                            'content' => $shortcodes_info,
                        )
                    ),
                );
			 /********************************************FOOTER*******************************************************************/
			 
			  $this->sections[] = array(
                    'type' => 'divide',
                );

                $this->sections[] = array(
                    'icon'   => 'el-icon-cog',
                    'title'  => __( 'Footer Settings', 'redux-framework-demo' ),
					'desc' => __('If This is not filled then Widget Sidebar Area','redux-framework-demo'),
                    'fields' => array(
					
					array(
                            'id'       => 'switch-on-footer-left',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable<strong> Footer Left Section</strong>', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> then the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
						
						array(
                            'id'       => 'opt-text-footer-left-heading',
                            'type'     => 'text',
                            'title'    => __( 'Footer Left HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( '', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Sakha Consulting Wings',
							),
						
						array(
                            'id'       => 'opt-textarea-html-footer-left',
                            'type'     => 'textarea',
                            'title'    => __( 'Footer Left Content - HTML Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'HTML Allowed ', 'redux-framework-demo' ),
                            'desc'     => __( '', 'redux-framework-demo' ),
                            'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                            'default'  => 'HTML is allowed in here.'
                        ),
					  
					   array(
                            'id'       => 'opt-media-footer-logo',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __( 'Footer Logo', 'redux-framework-demo' ),
                            'compiler' => 'true',
                            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc'     => __( '', 'redux-framework-demo' ),
                            'subtitle' => __( 'Upload <strong>Footer Logo</strong> using the WordPress native uploader', 'redux-framework-demo' ),
                            'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                            //'hint'      => array(
                            //    'title'     => 'Hint Title',
                            //    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
                            //)
                        ),
						
						                              /*************FOOTER CENTER**************/
													  
						array(
                            'id'       => 'switch-on-footer-center',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable <strong>Footer Center  Section <strong>', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> then the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
						
						array(
                            'id'       => 'opt-text-footer-center-heading',
                            'type'     => 'text',
                            'title'    => __( 'Footer Center HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( '', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'News Letter',
							),							  
					
					    array(
                            'id'       => 'opt-textarea-html-footer-center',
                            'type'     => 'textarea',
                            'title'    => __( 'Footer Center Content - HTML Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'HTML Allowed ', 'redux-framework-demo' ),
                            'desc'     => __( '', 'redux-framework-demo' ),
                            'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                            'default'  => 'HTML is allowed in here.'
                        ),
					
				 
				    array(
                            'id'       => 'switch-on-footer-right',
                            'type'     => 'switch',
                            'title'    => __( 'Switch On/Off to Enable/ Disable <strong>Footer Right  Section <strong>', 'redux-framework-demo' ),
                            'subtitle' => __( 'If it is <strong>Off</strong> then the Page Content will show in front end', 'redux-framework-demo' ),
                            'default'  => true,
                        ),
						
					array(
                            'id'       => 'opt-text-footer-right-heading',
                            'type'     => 'text',
                            'title'    => __( 'Footer Center HEADING', 'redux-framework-demo' ),
                            'subtitle' => __( '', 'redux-framework-demo' ),
                            //'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'default'  => 'Find us on',
							),
					
					array(
                            'id'       => 'opt-text-url-contact',
                            'type'     => 'text',
                            'title'    => __( 'Conatct  Url - URL Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'validate' => 'url',
                            'default'  => 'https://www.facebook.com/magicwithlogic',
                                                  // 'text_hint' => array(
                                                       // 'title'     => 'Facebook',
                                                       // 'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
                                                   //)
                        ),
						
					array(
                            'id'       => 'opt-textarea-html-footer-copyright',
                            'type'     => 'textarea',
                            'title'    => __( 'Footer Copyright Text - HTML Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'HTML Allowed ', 'redux-framework-demo' ),
                            'desc'     => __( '', 'redux-framework-demo' ),
                            'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                            'default'  => 'HTML is allowed in here.'
                        ),
					
						
					),
				);
				
				$this->sections[] = array(
                    'icon'   => 'el-icon-bullhorn',
                    'title'  => __( 'Social &amp; Contact Infos', 'redux-framework-demo' ),
					'desc' => __('Your Social and Contact Informations','redux-framework-demo'),
                    'fields' => array(
					
					     array(
                            'id'       => 'opt-text-url-facebook',
                            'type'     => 'text',
                            'title'    => __( 'Facebook Url - URL Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'validate' => 'url',
                            'default'  => 'https://www.facebook.com/magicwithlogic',
                                                  // 'text_hint' => array(
                                                       // 'title'     => 'Facebook',
                                                       // 'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
                                                   //)
                        ),
						
					array(
                            'id'       => 'opt-text-url-twitter',
                            'type'     => 'text',
                            'title'    => __( 'Twitter Url - URL Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'validate' => 'url',
                            'default'  => 'https://twitter.com/MagicwithLogic',
                                                   //'text_hint' => array(
                                                       // 'title'     => 'Twitter',
                                                       // 'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
                                                  // )
                        ),
						
					
					array(
                            'id'       => 'opt-text-url-google',
                            'type'     => 'text',
                            'title'    => __( 'Google Plus - URL Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'validate' => 'url',
                            'default'  => 'https://plus.google.com/u/0/117536214741546800522/posts',
                                                   //'text_hint' => array(
                                                       // 'title'     => 'Google Plus',
                                                       // 'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
                                                  // )
                        ),
					
					array(
                            'id'       => 'opt-text-url-pinterest',
                            'type'     => 'text',
                            'title'    => __( 'Pinterest - URL Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'validate' => 'url',
                            'default'  => 'http://pinterest.com/magicwithlogic',
                                                   //'text_hint' => array(
                                                       // 'title'     => 'Google Plus',
                                                       // 'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
                                                  // )
                        ),
					
					array(
                            'id'       => 'opt-text-url-linkedin',
                            'type'     => 'text',
                            'title'    => __( 'Linkedin - URL Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'validate' => 'url',
                            'default'  => 'https://www.linkedin.com/',
                                                   //'text_hint' => array(
                                                       // 'title'     => 'Google Plus',
                                                       // 'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
                                                  // )
                        ),
					
					array(
                            'id'       => 'opt-text-url-vimeo',
                            'type'     => 'text',
                            'title'    => __( 'Linkedin - URL Validated', 'redux-framework-demo' ),
                            'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                            'validate' => 'url',
                            'default'  => 'https://vimeo.com/',
                                                   //'text_hint' => array(
                                                       // 'title'     => 'Google Plus',
                                                       // 'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
                                                  // )
                        ),
						
					
						
					),
					
				);
				
               
                $theme_info = '<div class="redux-framework-section-desc">';
                $theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . __( '<strong>Theme URL:</strong> ', 'redux-framework-demo' ) . '<a href="' . $this->theme->get( 'ThemeURI' ) . '" target="_blank">' . $this->theme->get( 'ThemeURI' ) . '</a></p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-author">' . __( '<strong>Author:</strong> ', 'redux-framework-demo' ) . $this->theme->get( 'Author' ) . '</p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-version">' . __( '<strong>Version:</strong> ', 'redux-framework-demo' ) . $this->theme->get( 'Version' ) . '</p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get( 'Description' ) . '</p>';
                $tabs = $this->theme->get( 'Tags' );
                if ( ! empty( $tabs ) ) {
                    $theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . __( '<strong>Tags:</strong> ', 'redux-framework-demo' ) . implode( ', ', $tabs ) . '</p>';
                }
                $theme_info .= '</div>';

                if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
                    $this->sections['theme_docs'] = array(
                        'icon'   => 'el-icon-list-alt',
                        'title'  => __( 'Documentation', 'redux-framework-demo' ),
                        'fields' => array(
                            array(
                                'id'       => '17',
                                'type'     => 'raw',
                                'markdown' => true,
                                'content'  => file_get_contents( dirname( __FILE__ ) . '/../README.md' )
                            ),
                        ),
                    );
                }

                // You can append a new section at any time.
               
                $this->sections[] = array(
                    'icon'            => 'el-icon-list-alt',
                    'title'           => __( 'Customizer Only', 'redux-framework-demo' ),
                    'desc'            => __( '<p class="description">This Section should be visible only in Customizer</p>', 'redux-framework-demo' ),
                    'customizer_only' => true,
                    'fields'          => array(
                        array(
                            'id'              => 'opt-customizer-only',
                            'type'            => 'select',
                            'title'           => __( 'Customizer Only Option', 'redux-framework-demo' ),
                            'subtitle'        => __( 'The subtitle is NOT visible in customizer', 'redux-framework-demo' ),
                            'desc'            => __( 'The field desc is NOT visible in customizer.', 'redux-framework-demo' ),
                            'customizer_only' => true,
                            //Must provide key => value pairs for select options
                            'options'         => array(
                                '1' => 'Opt 1',
                                '2' => 'Opt 2',
                                '3' => 'Opt 3'
                            ),
                            'default'         => '2'
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Import / Export', 'redux-framework-demo' ),
                    'desc'   => __( 'Import and Export your Redux Framework settings from file, text or URL.', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-refresh',
                    'fields' => array(
                        array(
                            'id'         => 'opt-import-export',
                            'type'       => 'import_export',
                            'title'      => 'Import Export',
                            'subtitle'   => 'Save and restore your Redux options',
                            'full_width' => false,
                        ),
                    ),
                );

                $this->sections[] = array(
                    'type' => 'divide',
                );

                $this->sections[] = array(
                    'icon'   => 'el-icon-info-sign',
                    'title'  => __( 'Theme Information', 'redux-framework-demo' ),
                    'desc'   => __( '<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo' ),
                    'fields' => array(
                        array(
                            'id'      => 'opt-raw-info',
                            'type'    => 'raw',
                            'content' => $item_info,
                        )
                    ),
                );

                if ( file_exists( trailingslashit( dirname( __FILE__ ) ) . 'README.html' ) ) {
                    $tabs['docs'] = array(
                        'icon'    => 'el-icon-book',
                        'title'   => __( 'Documentation', 'redux-framework-demo' ),
                        'content' => nl2br( file_get_contents( trailingslashit( dirname( __FILE__ ) ) . 'README.html' ) )
                    );
                }
            }

            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'             => 'redux_demo',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'         => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'      => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'            => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'       => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'           => __( 'Teresa Theme Options', 'redux-framework-demo' ),
                    'page_title'           => __( 'Teresa Theme Options', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'       => '',
                    // Set it you want google fonts to update weekly. A google_api_key value is required.
                    'google_update_weekly' => false,
                    // Must be defined to add google fonts to the typography module
                    'async_typography'     => true,
                    // Use a asynchronous font on the front end or font string
                    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                    'admin_bar'            => true,
                    // Show the panel pages on the admin bar
                    'admin_bar_icon'     => 'dashicons-portfolio',
                    // Choose an icon for the admin bar menu
                    'admin_bar_priority' => 50,
                    // Choose an priority for the admin bar menu
                    'global_variable'      => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'             => false,
                    // Show the time the page took to load, etc
                    'update_notice'        => true,
                    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
                    'customizer'           => true,
                    // Enable basic customizer support
                    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

                    // OPTIONAL -> Give you extra features
                    'page_priority'        => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'          => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'     => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'            => '',
                    // Specify a custom URL to an icon
                    'last_tab'             => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'            => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'            => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'        => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'         => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'         => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export'   => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'       => 60 * MINUTE_IN_SECONDS,
                    'output'               => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'           => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'             => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'          => false,
                    // REMOVE

                    // HINTS
                    'hints'                => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );

                // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
                $this->args['admin_bar_links'][] = array(
                    'id'    => 'redux-docs',
                    'href'   => 'http://docs.reduxframework.com/',
                    'title' => __( 'Documentation', 'redux-framework-demo' ),
                );

                $this->args['admin_bar_links'][] = array(
                    //'id'    => 'redux-support',
                    'href'   => 'https://github.com/ReduxFramework/redux-framework/issues',
                    'title' => __( 'Support', 'redux-framework-demo' ),
                );

                $this->args['admin_bar_links'][] = array(
                    'id'    => 'redux-extensions',
                    'href'   => 'reduxframework.com/extensions',
                    'title' => __( 'Extensions', 'redux-framework-demo' ),
                );

                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
                $this->args['share_icons'][] = array(
                    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                    'title' => 'Visit us on GitHub',
                    'icon'  => 'el-icon-github'
                    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el-icon-facebook'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://twitter.com/reduxframework',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el-icon-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://www.linkedin.com/company/redux-framework',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el-icon-linkedin'
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );
            }

            public function validate_callback_function( $field, $value, $existing_value ) {
                $error = true;
                $value = 'just testing';

                /*
              do your validation

              if(something) {
                $value = $value;
              } elseif(something else) {
                $error = true;
                $value = $existing_value;
                
              }
             */

                $return['value'] = $value;
                $field['msg']    = 'your custom error message';
                if ( $error == true ) {
                    $return['error'] = $field;
                }

                return $return;
            }

            public function class_field_callback( $field, $value ) {
                print_r( $field );
                echo '<br/>CLASS CALLBACK';
                print_r( $value );
            }

        }

        global $reduxConfig;
        $reduxConfig = new Redux_Framework_sample_config();
    } else {
        echo "The class named Redux_Framework_sample_config has already been called. <strong>Developers, you need to prefix this class with your company name or you'll run into problems!</strong>";
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ):
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    endif;

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ):
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error = true;
            $value = 'just testing';

            /*
          do your validation

          if(something) {
            $value = $value;
          } elseif(something else) {
            $error = true;
            $value = $existing_value;
            
          }
         */

            $return['value'] = $value;
            $field['msg']    = 'your custom error message';
            if ( $error == true ) {
                $return['error'] = $field;
            }

            return $return;
        }
    endif;
