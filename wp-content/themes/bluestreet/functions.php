<?php
function bluestreet_enqueue_scripts()
{	
	$wallstreet_pro_options=bluestreet_theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
	$webriti_stylesheet = $current_options['webriti_stylesheet'];
	
	if($current_options['webriti_stylesheet']=='default.css')
	{
	  $webriti_stylesheet = 'default.css';
	}
	elseif($current_options['webriti_stylesheet']=='light.css')
	{
	$webriti_stylesheet = 'light.css';
	}
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('wallstreet-default', get_stylesheet_directory_uri() . '/css/'.$webriti_stylesheet);
	wp_dequeue_style('bluestreet-default',get_template_directory_uri() .'/css/default.css');
}
add_action('wp_enqueue_scripts', 'bluestreet_enqueue_scripts');


require( get_stylesheet_directory() . '/customizer/customizer_theme_style.php' );

add_action( 'after_setup_theme', 'bluestreet_theme_setup' );
function bluestreet_theme_setup() {
	require_once( get_stylesheet_directory() . '/theme_setup_data.php' );
	load_child_theme_textdomain( 'bluestreet', get_stylesheet_directory() . '/languages' );
}

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'bluestreet_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function bluestreet_register_required_plugins() {
 
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
 
    // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Custom FaceBook Feed',
            'slug'      => 'facebook-feed',
            'required'  => false,
        ),
 
    );
 
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    // Load class strings.
    $config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		'strings' => array(
				'menu_title'                      => __( 'Install Plugins', 'bluestreet' ),
				'installing'                      => __( 'Installing Plugin: %s', 'bluestreet' ),
			    'oops'                            => __( 'Something went wrong with the plugin API.', 'bluestreet' ),
				'notice_can_install_required'     => _n_noop(
					'This theme requires the following plugin: %1$s.', 
					'This theme requires the following plugins: %1$s.',
					'bluestreet'
				),
			    'notice_can_install_recommended' => _n_noop( 
			            'This theme recommends the following plugin: %1$s.', 
			            'This theme recommends the following plugins: %1$s.',
			            'bluestreet' 
			    ),
				'notice_cannot_install'          => _n_noop( 
				    'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 
				    'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.',
				    'bluestreet' 
				),
				'notice_ask_to_update'           => _n_noop( 
				    'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 
				    'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				    'bluestreet' 
			    ),
                'notice_cannot_update'           => _n_noop( 
                    'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 
                    'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.',
                    'bluestreet' 
                ),
				'notice_ask_to_update_maybe'      => _n_noop(
					'There is an update available for: %1$s.',
					'There are updates available for the following plugins: %1$s.',
					'bluestreet'
				),
				'notice_can_activate_required'   => _n_noop( 
				    'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.',
				    'bluestreet' 
				),
                'notice_can_activate_recommended'=> _n_noop( 
                    'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.',
                    'bluestreet' 
                ),
			    'notice_cannot_activate'         => _n_noop( 
			        'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 
			        'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.',
			        'bluestreet' 
			    ),
				'install_link'                   => _n_noop( 
				    'Begin installing plugin', 
				    'Begin installing plugins',
				    'bluestreet' 
				),
                'activate_link'                  => _n_noop( 
                    'Begin activating plugin', 
                    'Begin activating plugins',
                    'bluestreet'
                ),
				'update_link'                     => _n_noop(
					'Begin updating plugin',
					'Begin updating plugins',
					'bluestreet'
				),
			    'return'                         => __( 'Return to Required Plugins Installer', 'bluestreet' ),
                'dashboard'                      => __( 'Return to the dashboard', 'bluestreet' ),
                'plugin_activated'               => __( 'Plugin activated successfully.', 'bluestreet' ),
                'activated_successfully'         => __( 'The following plugin was activated successfully:', 'bluestreet' ),
                'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'bluestreet' ),
				'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'bluestreet' ),
				'complete'                       => __( 'All plugins installed and activated successfully. %1$s', 'bluestreet' ),
                'dismiss'                        => __( 'Dismiss this notice', 'bluestreet' ),
                'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'bluestreet' ),
			));
 
    tgmpa( $plugins, $config );
 
}


function bluestreet_custmizer_style()
 {
		wp_enqueue_style('bluestreet-customizer-css',get_stylesheet_directory_uri() .'/css/cust-style.css');
}
add_action('customize_controls_print_styles','bluestreet_custmizer_style');

?>