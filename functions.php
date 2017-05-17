<?php

/** Add excerpt to portfolio grid module :
	* Add this code to your child theme function.php file
	* Add the folder custom-modules and cfwpm.php file to you child theme folder
 */

function divi_child_theme_setup() {
    if ( ! class_exists('ET_Builder_Module') ) {
        return;
    }

    get_template_part( 'custom-modules/cfwpm' );

    $cfwpm = new Custom_ET_Builder_Module_Portfolio();

    remove_shortcode( 'et_pb_portfolio' );

    add_shortcode( 'et_pb_portfolio', array($cfwpm, '_shortcode_callback') );

}

add_action( 'wp', 'divi_child_theme_setup', 9999 );