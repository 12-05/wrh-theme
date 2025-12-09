<?php

require get_template_directory() . '/whr/whr-function.php';
require get_template_directory() . '/whr/whr-anfrage.php';
require get_template_directory() . '/whr/fields.php';
require get_template_directory() . '/whr/signatur.php';
require get_template_directory() . '/whr/event.class.php';


add_filter( 'weglot_add_trailing_slash', function($url) {
	return false;
});
