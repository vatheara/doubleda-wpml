<?php

/**
 * Class WPML_Elementor_imroz-main-slider
 */

class WPML_Elementor_imroz_main_slider extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {

		return 'main_slider_list';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'rbt_main_slider_title','rbt_main_slider_before_title','rbt_main_slider_desctiption','rbt_main_slider_button_text' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'rbt_main_slider_title':
				return esc_html__( 'slider_title', 'imroz' );

			case 'rbt_main_slider_before_title':
				return esc_html__( 'slider_before_title', 'imroz' );

            case 'rbt_main_slider_desctiption':
                return esc_html__( 'slider_description', 'imroz' );

            case 'rbt_main_slider_button_text':
                return esc_html__( 'slider_button_text', 'imroz' );

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
			case 'rbt_main_slider_title':
				return 'LINE';
            case 'rbt_main_slider_before_title':
                return 'LINE';
            case 'rbt_main_slider_button_text':
                return 'LINE';
			case 'rbt_main_slider_desctiption':
				return 'AREA';

			default:
				return '';
		}
	}

}
