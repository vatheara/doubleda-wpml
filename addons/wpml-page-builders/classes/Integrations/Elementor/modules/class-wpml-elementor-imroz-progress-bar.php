<?php

/**
 * Class WPML_Elementor_imroz-progress-bar
 */

class WPML_Elementor_imroz_progress_bar extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {

		return 'skills';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'name' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'name':
				return esc_html__( 'skill name', 'imroz' );
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
			case 'name':
				return 'LINE';

			default:
				return '';
		}
	}

}
