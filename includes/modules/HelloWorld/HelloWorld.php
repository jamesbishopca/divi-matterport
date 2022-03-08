<?php

class DIMA_HelloWorld extends ET_Builder_Module {

	public $slug       = 'dima_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://jamesbishop.ca/',
		'author'     => 'James Bishop',
		'author_uri' => 'https://jamesbishop.ca/',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'dima-divi-matterport' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'dima-divi-matterport' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'dima-divi-matterport' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new DIMA_HelloWorld;
