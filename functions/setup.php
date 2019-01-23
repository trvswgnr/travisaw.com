<?php
if( !is_admin() ) {
	// add Font Awesome Icons
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', 'all');

	// add Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,900,900i|Raleway:300,400,700', false, '1', 'all');

	// add main stylesheet with dynamic versioning based on modified date
	$css_version = filemtime(get_template_directory() . '/dist/style.css');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/style.css?ver=' . $css_version, false, "$css_version", 'all');

	$js_version = filemtime(get_template_directory() . '/dist/main.js');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/main.js?ver=' . $js_version, false, array() , $js_version, true);
}

// ACF - Add Options page-header
// Usage within template file: the_field('header_title', 'option');
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
?>
