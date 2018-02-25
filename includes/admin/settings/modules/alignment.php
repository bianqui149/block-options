<?php
/**
 * Links Settings Module
 * Settings > Block Options :: Aligment
 *
 * @copyright   Copyright (c) 2018, Jeffrey Carandang
 * @since       1.0
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Create Card Module for Custom Links Options
 *
 * @since 1.0
 * @return void
 */
if( !function_exists( 'blockopts_settings_alignment' ) ):
	function blockopts_settings_alignment(){ ?>
		<li class="blockopts-module-card blockopts-module-type-pro" data-module-id="links">
			<div class="blockopts-module-card-content">
				<a href="https://block-options.com/" target="_blank" class="blockopts-pro-upsell"></a>
				<h2><?php _e( 'Aligment per Devices', 'block-options' );?></h2>
				<div class="blockopts-pro-label"><span class="dashicons dashicons-lock"></span></div>
				<p class="blockopts-module-desc">
					<?php _e( 'Assign different custom alignment on each blocks per devices.', 'block-options' );?>
				</p>
			</div>
		</li>
	    <?php
	}
	add_action( 'blockopts_module_cards', 'blockopts_settings_alignment', 210 );
endif;
?>
