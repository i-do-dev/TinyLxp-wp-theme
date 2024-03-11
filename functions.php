<?php
/**
 * Bootstrap Basic theme
 * 
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
    $content_width = 1170;
}


/**
 * The Bootstrap Basic main class.
 */
require_once get_template_directory() . '/inc/BootstrapBasic.php';


/**
 * Register commonly use scripts and styles.
 */
$BootstrapBasic = new \BootstrapBasic();
unset($BootstrapBasic);


if (!function_exists('bootstrapBasicSetup')) {
    /**
     * Setup theme and register support wp features.
     */
    function bootstrapBasicSetup() 
    {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         * 
         * copy from underscores theme
         */
        load_theme_textdomain('bootstrap-basic', get_template_directory() . '/languages');

        // add theme support title-tag
        add_theme_support('title-tag');

        // add theme support post and comment automatic feed links
        add_theme_support('automatic-feed-links');

        // enable support for post thumbnail or feature image on posts and pages
        add_theme_support('post-thumbnails');

        // allow the use of html5 markup
        // @link https://codex.wordpress.org/Theme_Markup
        add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

        // add support menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'bootstrap-basic'),
        ));

        // add post formats support
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        // add support custom background
        add_theme_support(
            'custom-background', 
            apply_filters(
                'bootstrap_basic_custom_background_args', 
                array(
                    'default-color' => 'ffffff', 
                    'default-image' => ''
                )
            )
        );

        // @since 1.1 or WordPress 5.0+
        // make gutenberg support. --------------------------------------------------------------------------------------
        // @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/ reference.
        // add wide alignment ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment )
        add_theme_support('align-wide');
        // support default block styles for front-end ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#default-block-styles )
        add_theme_support('wp-block-styles');
        // support editor styles ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#editor-styles )
        // this one make appearance in editor more close to Bootstrap 3.
        add_theme_support('editor-styles');
        // support responsive embeds for front-end ( https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content )
        add_theme_support('responsive-embeds');
        // end make gutenberg support. ---------------------------------------------------------------------------------
    }// bootstrapBasicSetup
}
add_action('after_setup_theme', 'bootstrapBasicSetup');


if (!function_exists('bootstrapBasicWidgetsInit')) {
    /**
     * Register widget areas
     */
    function bootstrapBasicWidgetsInit() 
    {
        register_sidebar(array(
            'name' => __('Sidebar right', 'bootstrap-basic'),
            'id' => 'sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Sidebar left', 'bootstrap-basic'),
            'id' => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Header right', 'bootstrap-basic'),
            'id' => 'header-right',
            'description' => __('Header widget area on the right side next to site title.', 'bootstrap-basic'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Navigation bar right', 'bootstrap-basic'),
            'id' => 'navbar-right',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));

        register_sidebar(array(
            'name' => __('Footer left', 'bootstrap-basic'),
            'id' => 'footer-left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Footer right', 'bootstrap-basic'),
            'id' => 'footer-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));
    }// bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


if (!function_exists('bootstrapBasicEnqueueScripts')) {
    /**
     * Enqueue scripts & styles
     * 
     * @global \WP_Scripts $wp_scripts
     */
    function bootstrapBasicEnqueueScripts() 
    {
        global $wp_scripts;
        $Theme = wp_get_theme();
        $themeVersion = $Theme->get('Version');
        unset($Theme);

        wp_enqueue_style('bootstrap-style');
        wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.4.1');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css', array(), $themeVersion);

        // check if there are any calendar widget block.
        if (bootstrapBasicHasWidgetBlock('calendar') === true) {
            // if theme using widget blocks.
            // enqueue css to fix calendar widget block to render as non widget block.
            // if you would like it to be render as new widget block, please dequeue this handle.
            wp_enqueue_style('bootstrapbasic-widgetblocks-calendar', get_template_directory_uri() . '/css/widget-blocks/calendar.css', array(), $themeVersion);
        }

        // js that is useful for development.
        wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js', array(), '3.6.0-20190314', true);
        // js that is useful for old browsers.
        wp_register_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js', array(), '1.4.2', true);
        $wp_scripts->add_data('respond-script', 'conditional', 'lt IE 9');
        wp_enqueue_script('respond-script');
        wp_register_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.min.js', array(), '3.7.3', true);
        $wp_scripts->add_data('html5-shiv-script', 'conditional', 'lte IE 9');
        wp_enqueue_script('html5-shiv-script');
        
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        wp_enqueue_script('bootstrap-script');
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), $themeVersion, true);
        wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri(), array(), $themeVersion);

        // move jquery to bottom ( https://wordpress.stackexchange.com/a/225936/41315 )
        $wp_scripts->add_data('jquery', 'group', 1);
        $wp_scripts->add_data('jquery-core', 'group', 1);
        $wp_scripts->add_data('jquery-migrate', 'group', 1);
    }// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');


/**
 * admin page displaying help.
 */
if (is_admin()) {
    require get_template_directory() . '/inc/BootstrapBasicAdminHelp.php';
    $bbsc_adminhelp = new BootstrapBasicAdminHelp();
    add_action('admin_menu', array($bbsc_adminhelp, 'themeHelpMenu'));
    unset($bbsc_adminhelp);
}

/**
 * displaying some dummy pages.
 */
// Function to create pages
function create_custom_pages_on_theme_activation() {
    // Check if the pages already exist to avoid duplication
    $pagesArray = array(
    	['title' => 'Assignment','content' =>''],
    	['title' => 'Assignments','content' =>''],
		['title' => 'Calendar','content' =>''],
        ['title' => 'Classes','content' =>''],
		['title' => 'Courses','content' =>''],
		['title' => 'Dashboard','content' =>''],
		['title' => 'Districts','content' =>''],
		['title' => 'Grade Assignment','content' =>''],
		['title' => 'Grade Summary','content' =>''],
		['title' => 'Grades','content' =>''],
		['title' => 'Groups','content' =>''],
        ['title' => 'Lessons','content' =>''],
		['title' => 'Login','content' =>''],
		['title' => 'Sample Page','content' =>''],
		['title' => 'Schools','content' =>''],
		['title' => 'Search','content' =>''],
		['title' => 'Students','content' =>''],
		['title' => 'Teachers','content' =>'']
	);
    global $wpdb;

    foreach ($pagesArray as $newPage) {
        $pageExist = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->posts WHERE post_title = %s AND post_type = 'page' AND post_status = 'publish' ", $newPage['title']));

        if (!$pageExist) {
            // Page does not exist, create it
            $page = array(
                'post_title'    => $newPage['title'],
                'post_content'  => $newPage['content'],
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            wp_insert_post($page);
        }
    }
    // Embaded tiny-lxp plugin into theme
    // plugins_url().'/tiny-lxp/tiny-lxp-platform.php';
    function run_activate_plugin( $plugin ) {
        $plugin = trim( $plugin );
        $current = get_option( 'active_plugins' );
        $plugin = plugin_basename( $plugin );

        if ( !in_array( $plugin, $current ) ) {
            $current[] = $plugin;
            sort( $current );
            do_action( 'activate_plugin', $plugin );
            update_option( 'active_plugins', $current );
            do_action( 'activate_' . $plugin );
            do_action( 'activated_plugin', $plugin );
        }

        return null;
    }
    run_activate_plugin( 'TinyLxp-wp-plugin/tiny-lxp-platform.php' );
    function refresh_wp_admin_page() {
        echo '<script type="text/javascript">window.location.reload(true);</script>';
    }
    add_action('admin_enqueue_scripts', 'refresh_wp_admin_page');
}

// Hook into the after_switch_theme action
add_action('after_switch_theme', 'create_custom_pages_on_theme_activation');

// This function will change the pages created by tiny-lxp theme.
function my_theme_activation_function() {
//     $pagesArray = array(
//         ['title' => 'Assignment'],
//         ['title' => 'Assignments'],
//         ['title' => 'Calendar'],
//         ['title' => 'Courses'],
//         ['title' => 'Dashboard'],
//         ['title' => 'Districts'],
//         ['title' => 'Grade Assignment'],
//         ['title' => 'Grade Summary'],
//         ['title' => 'Grades'],
//         ['title' => 'Groups'],
//         ['title' => 'Login'],
//         ['title' => 'Sample Page'],
//         ['title' => 'Schools'],
//         ['title' => 'Search'],
//         ['title' => 'Students'],
//         ['title' => 'Teachers']
//     );
//     global $wpdb;
//     foreach ($pagesArray as $newPage) {
//         $pageExist = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->posts WHERE post_title = %s AND post_type = 'page' AND post_status = 'publish' ", $newPage['title']));
//         if ($pageExist) { 
//             wp_delete_post($pageExist->ID); // The second parameter is set to true to force delete
//         }
//     }
    // Deactivate a plugin
    // deactivate_plugins('tiny-lxp');
    // UPDATE wp_options SET option_value = 'a:0:{}' WHERE option_name = 'active_plugins';
    // Replace 'plugin-folder/plugin-file.php' with the relative path to your plugin
    
    // $plugin_to_deactivate = 'tiny-lxp/tiny-lxp-platform.php';

    // // Check if the plugin is active before deactivating
    // if (is_plugin_active($plugin_to_deactivate)) {
    //     deactivate_plugins($plugin_to_deactivate);
    // }

    $plugin_to_deactivate = 'TinyLxp-wp-plugin/tiny-lxp-platform.php';

    // Get the list of active plugins
    $active_plugins = get_option('active_plugins');

    // Find and remove the plugin from the active plugins array
    $plugin_key = array_search($plugin_to_deactivate, $active_plugins);
    if ($plugin_key !== false) {
        unset($active_plugins[$plugin_key]);
    }
    // Update the active plugins option
    update_option('active_plugins', $active_plugins);

}
add_action('switch_theme', 'my_theme_activation_function');

/**
 * Make WordPress 5 (Gutenberg) editor support Bootstrap CSS.
 */
require_once get_template_directory() . '/inc/BootstrapBasicWp5.php';
$BbWp5 = new BootstrapBasicWp5();
unset($BbWp5);


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicAutoRegisterWidgets.php';
$BootstrapBasicAutoRegisterWidgets = new BootstrapBasicAutoRegisterWidgets();
$BootstrapBasicAutoRegisterWidgets->registerAll();
unset($BootstrapBasicAutoRegisterWidgets);
require get_template_directory() . '/inc/template-widgets-hook.php';

