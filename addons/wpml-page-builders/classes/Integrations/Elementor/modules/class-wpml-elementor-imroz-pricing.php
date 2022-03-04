<?php

/**
 * Class WPML_Elementor_imroz-pricing
 */

class WPML_Elementor_imroz_pricing extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {

		return 'pricing_table';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'pricing_title', 'pricing_sub_title' ,'pricing_features_list','rbt_pricing_button_text');
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'pricing_title':
				return esc_html__( 'pricing_title', 'imroz' );

			case 'pricing_sub_title':
				return esc_html__( 'pricing_sub_title', 'imroz' );

            case 'pricing_features_list':
                return esc_html__( 'pricing_features_list', 'imroz' );

            case 'rbt_pricing_button_text':
                return esc_html__( 'pricing_button_text', 'imroz' );

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
			case 'pricing_title':
				return 'LINE';
            case 'pricing_sub_title':
                return 'LINE';
            case 'rbt_pricing_button_text':
                return 'LINE';
			case 'pricing_features_list':
				return 'VISUAL';

			default:
				return '';
		}
	}

}
