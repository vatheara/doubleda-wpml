<?php

/**
 * Class WPML_Elementor_imroz-tabs
 */

class WPML_Elementor_imroz_tabs extends WPML_Elementor_Module_With_Items  {

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
		return array( 'tab_title', 'tab_description' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'tab_title':
				return esc_html__( 'imroz-tabs: Title', 'imroz' );

			case 'tab_description':
				return esc_html__( 'imroz-tabs: Content', 'imroz' );

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

			case 'tab_description':
				return 'VISUAL';

			default:
				return '';
		}
	}

}
