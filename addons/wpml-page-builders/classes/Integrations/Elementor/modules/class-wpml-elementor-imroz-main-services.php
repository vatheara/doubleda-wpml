<?php

/**
 * Class WPML_Elementor_imroz-main-services
 */

class WPML_Elementor_imroz_main_services extends WPML_Elementor_Module_With_Items  {

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
		return array( 'service_title','service_description' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'service_title':
				return esc_html__( 'service_title', 'imroz' );

			case 'service_description':
				return esc_html__( 'service_description', 'imroz' );

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
				return 'AREA';

			default:
				return '';
		}
	}

}
