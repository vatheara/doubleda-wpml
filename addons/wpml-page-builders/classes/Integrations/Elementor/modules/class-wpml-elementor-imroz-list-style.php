<?php

/**
 * Class WPML_Elementor_imroz-list-style
 */
class WPML_Elementor_imroz_list_style extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'lists';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'list_title' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'list_title':
				return esc_html__( 'imroz-list-title', 'imroz' );

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
			case 'list_title':
				return 'LINE';

			default:
				return '';
		}
	}

}
