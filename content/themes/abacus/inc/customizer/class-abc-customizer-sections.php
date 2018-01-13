<?php
/**
 * Class to create a custom upgrade section
 *
 * @package Abacus
 * @since Abacus 1.0.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The upgrade section class
 */
class Abacus_Customize_Section_Pro extends WP_Customize_Section {
	/**
	 * The type of customize section being rendered.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'premium-upgrade';

	/**
	 * Custom button text to output.
	 *
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();
		$json['pro_url']  = esc_url( $this->pro_url );
		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand premium-upgrade">

			<h3 class="accordion-section-title">
				<a href="{{ data.pro_url }}" target="_blank">{{ data.title }}

				<span class="dashicons dashicons-arrow-right-alt"></span></a>
			</h3>
		</li>
	<?php 
	}
}