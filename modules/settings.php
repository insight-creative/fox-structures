<?php

/*

Creates custom settings in the Wordpress admin

*/

class Setting {
  public $name;
  public $id;

  function __construct($name, $id) {
		$this->name = $name;
		$this->id = $id;
	}
}


$fields = array(
  new Setting('Phone number 1', 'phone_1'),
  new Setting('Phone number 2', 'phone_2'),
  new Setting('Fax', 'fax_number'),
  new Setting('Street Address', 'street'),
  new Setting('City', 'city'),
  new Setting('State', 'state'),
  new Setting('ZIP', 'zip')
);

function register_fields() {
  global $fields;
  foreach ($fields as $field) {
    register_setting( 'general', $field->id, 'esc_attr' );
    add_settings_field($field->id, '<label for="'. $field->id . '">'.__($field->name, $field->id).'</label>' , 'fields_html' , 'general', 'default', array($field));
  }

}

function fields_html(array $args) {
  $field = $args[0];
  $value = get_option( $field->id, '' );
  echo '<input type="text" id="' . $field->id . '" name="' . $field->id . '" value="' . $value . '" />';
}

add_filter('admin_init', 'register_fields');

?>
