<?php

// Show Posts Plugin activation
// ============================== Recommended Plugins =========================
/**
 * Add plugin automation file
 */

require_once( dirname( __FILE__ ) . '/class-tgm-plugin-activation.php' );

function atw_slider_install_tgm_plugins() {

	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme
		array(
			'name'     => 'Weaver Show Posts', // The plugin name
			'slug'     => 'show-posts', // The plugin slug (typically the folder name)
			'required' => true
		)
	);


	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */

	$config = array(
		'default_path'     => '', // Default absolute path to pre-packaged plugins
		'menu'             => 'install-atw-slider-addon', // Menu slug
		'has_notices'      => true, // Show admin notices or not
		'is_automatic'     => true, // Automatically activate plugins after installation or not
		'message'          => '<p>The following plugin is REQUIRED for Weaver Show Sliders to work. Weaver Show Posts provides the admin interface to select posts to display using the Slider.</p>', // Message to output right before the plugins table
		'strings'          => array(
		'page_title'                      => esc_html__( 'Weaver Show Slider Required Plugin', 'show_sliders' ),
		'menu_title'                      => esc_html__( 'Show Slider Plugin', 'show_sliders' ),
		'installing'                      => esc_html__( 'Installing Plugin: %s', 'show_sliders' ), // %1$s = plugin name
		'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'show_sliders' ),
		'notice_can_install_required'     => esc_html(_n_noop( 'Weaver Show Sliders <em>requires</em> the following plugin: %1$s.', 'Weaver Show Sliders <em>requires</em> the following plugins: %1$s.' )),    // %1$s = plugin name(s)
		'notice_can_install_recommended'  => esc_html(_n_noop( 'Weaver Show Sliders recommends this plugin, %1$s.', 'Weaver Show Sliders recommends these plugins, %1$s.' )), // %1$s = plugin name(s)
		'notice_cannot_install'           => esc_html(_n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' )), // %1$s = plugin name(s)
		'notice_can_activate_required'    => esc_html(_n_noop( 'The following plugin <em>required</em> by Weaver Show Sliders is currently inactive: %1$s.', 'The following plugins <em>required</em> by Weaver Show Sliders are currently inactive: %1$s.' )), // %1$s = plugin name(s)

		'notice_can_activate_recommended' => esc_html(_n_noop( 'Please activate this recommended plugin, %1$s.', 'Please activate these recommended plugins, %1$s.' )), // %1$s = plugin name(s)

		'notice_cannot_activate'          => esc_html(_n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' )), // %1$s = plugin name(s)
		'notice_ask_to_update'            => esc_html(_n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with Weaver: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' )), // %1$s = plugin name(s)
		'notice_cannot_update'            => esc_html(_n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' )), // %1$s = plugin name(s)
		'install_link'                    => esc_html(_n_noop( 'Begin installing plugin', 'Begin installing plugins' )),
		'activate_link'                   => esc_html(_n_noop( 'Open Plugins Admin Page to Activate', 'Open Plugins Admin Page to Activate' )),
		'return'                          => esc_html__( 'Return to Required Plugins Installer', 'show_sliders' ),
		'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'show_sliders' ),
		'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'show_sliders' ) // %1$s = dashboard link
		)
	);

	tgmpa( $plugins, $config );

}


add_action( 'tgmpa_register', 'atw_slider_install_tgm_plugins' );

