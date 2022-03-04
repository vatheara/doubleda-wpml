<?php

/**
 * Class WPML_Elementor_imroz-main-demo-banner
 */
class WPML_Elementor_imroz_main_demo_banner extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'service_list';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'service_title', 'service_description' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'service_title':
				return esc_html__( 'imroz-service_title', 'imroz' );

			case 'service_description':
				return esc_html__( 'imroz-service_description', 'imroz' );

			default:
				return '';
		}
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_editor_type( $field ) {
		switch( $field ) {
			case 'service_title':
				return 'LINE';

			case 'service_description':
				return 'LINE';

			default:
				return '';
		}
	}

}
