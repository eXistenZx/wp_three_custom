<?php
/**
 * Class to create a custom reset control
 *
 * @package Abacus
 * @since Abacus 1.0.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The reset control class
 */
class Abacus_Reset_Control extends WP_Customize_Control {
	/**
	 * The settings var
	 *
	 * @var string $settings the blog name.
	 */
	public $settings 	= 'blogname';

	/**
	 * The description var
	 *
	 * @var string $description the control description.
	 */
	public $description = '';

	/**
	 * Renter the control
	 *
	 * @return void
	 */

	public function render_content() {
		echo '<p class="customizer-section-intro">' . $this->description . '</p>';

		echo '<button type="button" class="button" id="abc-reset-theme-options">' . __( 'Reset', 'abacus' ) . '</button>';
	}
}