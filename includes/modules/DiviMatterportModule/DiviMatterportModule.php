<?php

class DIMA_DiviMatterportModule extends ET_Builder_Module {

	public $slug       = 'dima_divi_matterport';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://jamesbishop.ca/',
		'author'     => 'James Bishop',
		'author_uri' => 'https://jamesbishop.ca/',
	);

	public function init() {
		$this->name = esc_html__( 'Matterport', 'dima-divi-matterport' );
	}

	public function get_fields() {
    return array(
      'matterport_link' => array(
        'label' => esc_html__('Matterport Link', 'dima-divi-matterport'),
        'type' => 'text',
        'option_category' => 'basic_option',
        'description' => esc_html__('Enter the link to your Matterport virtual tour here.', 'dima-divi-matterport'),
        'toggle_slug' => 'main_content',
      )
    );
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<iframe src="%1$s" frameborder="0" allowfullscreen="allowfullscreen"></iframe>', esc_html($this->props['matterport_link']) );
	}
}

new DIMA_DiviMatterportModule;
