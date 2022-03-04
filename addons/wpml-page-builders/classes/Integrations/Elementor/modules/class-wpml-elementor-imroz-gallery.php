<?php

/**
 * Class WPML_Elementor_imroz-gallery
 */
class WPML_Elementor_imroz_gallery extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'gallery';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'filter', 'title' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'filter':
				return esc_html__( 'imroz-gallery: filter', 'imroz' );

			case 'title':
				return esc_html__( 'imroz-gallery: title', 'imroz' );

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
			case 'filter':
				return 'LINE';

			case 'title':
				return 'LINE';

			default:
				return '';
		}
	}

}
