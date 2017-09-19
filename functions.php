<?php

require_once('modules/styles.php');
require_once('modules/utilities.php');
require_once('modules/menus.php');
require_once('modules/nav_walker.php');

// add_settings_field(
// 	'myprefix_setting-id',
// 	'This is the setting title',
// 	'myprefix_setting_callback_function',
// 	'general',
// 	'myprefix_settings-section-name',
// 	array( 'label_for' => 'myprefix_setting-id' )
// );
//
// $new_general_setting = new new_general_setting();
//
// class new_general_setting {
//     function new_general_setting( ) {
//         add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
//     }
//     function register_fields() {
//         register_setting( 'general', 'favorite_color', 'esc_attr' );
//         add_settings_field('fav_color', '<label for="favorite_color">'.__('Favorite Color?' , 'favorite_color' ).'</label>' , array(&$this, 'fields_html') , 'general' );
//     }
//     function fields_html() {
//         $value = get_option( 'favorite_color', '' );
//         echo '<input type="text" id="favorite_color" name="favorite_color" value="' . $value . '" />';
//     }
// }

?>
