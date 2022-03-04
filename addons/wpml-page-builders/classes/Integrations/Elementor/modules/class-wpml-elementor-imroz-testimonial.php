<?php

/**
 * Class WPML_Elementor_imroz-testimonial
 */

class WPML_Elementor_imroz_testimonial extends WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {

		return 'reviews_list';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'reviewer_name','reviewer_title','review_content' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'reviewer_name':
				return esc_html__( 'reviewer_name', 'imroz' );

			case 'reviewer_title':
				return esc_html__( 'reviewer_title', 'imroz' );

            case 'review_content':
                return esc_html__( 'review_content', 'imroz' );

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
			case 'reviewer_name':
				return 'LINE';

            case 'reviewer_title':
                return 'LINE';

			case 'review_content':
				return 'AREA';

			default:
				return '';
		}
	}

}
