<?php

/**
 * Class WPML_Elementor_imroz-accordion
 */
class WPML_Elementor_imroz_accordion extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'accordions';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'accordion_title' ,'accordion_description');
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'accordion_title':
				return esc_html__( 'imroz-accordion_title', 'imroz' );
            case 'accordion_description':
                return esc_html__( 'imroz-accordion_description', 'imroz' );

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
			case 'accordion_title':
				return 'LINE';

            case 'accordion_description':
                return 'LINE';
			default:
				return '';
		}
	}

}
