<?php namespace moxie;

class Meta_Fields{

	private $options = array();

	public function __construct(){
		$this->set_options();
		add_action( 'add_meta_boxes', array( $this, 'register' ) );
	}

	public function register(){
		extract( $this->get_options() );
		add_meta_box( $id, $title, $callback, $screen, $context, $priority );
	}

	public function set_options(){
		$this->options = array(
			'id' => 'moxie-wiki-meta-fields',
			'title' => 'Link Data',
			'callback' => array( $this, 'render_meta_fields' ),
			'screen' => LINKS_POST_TYPE,
			'context' => 'normal',
			'priority' => 'high',
		);
	}

	public function get_options(){
		return $this->options;
	}

	public function render_meta_fields(){
		wp_nonce_field( 'links_meta_fields', 'links_meta_fields_validate');
?>
		<label for="link_url">URL of the Link: </label>
		<input type="text" name="link_url" id="link_url" placeholder="http://getmoxied.net" />
<?php
	}
}

$meta_fields = new Meta_Fields();
