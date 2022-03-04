<?php

/**
 * Class WPML_Elementor_imroz-about-with-experience
 */
class WPML_Elementor_imroz_about_with_experience extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'tabs';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'tab_title', 'tab_description','tab_description_sup' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'tab_title':
				return esc_html__( 'tap_title', 'imroz' );

			case 'tab_description':
				return esc_html__( 'tap_description', 'imroz' );


			case 'tab_description_sup':
				return esc_html__( 'tap_description_sup', 'imroz' );

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
			case 'tab_title':
				return 'LINE';

			case 'tab_description_sup':
				return 'LINE';
            
            case 'tab_description':
                return 'LINE';

			default:
				return '';
		}
	}

}
