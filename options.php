<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	//echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  '/assets/img/';

	$options = array();

$options[] = array(
		'name' => __('12SM Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Google Analytics ID [format: UA-XXXXX-Y]', 'options_check'),
		'desc' => __('Enter the tracking profile ID for the site', 'options_check'),
		'id' => 'ga_id',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Favicon Uploader', 'options_check'),
		'desc' => __('Upload your theme Favicon. Please name "favicon.ico" and be in the .ico format.', 'options_check'),
		'id' => 'favicon_upload',
		'type' => 'upload');

$options[] = array(
		'name' => __('Social Settings', 'options_check'),
		'type' => 'heading');
		
		$options[] = array(
		'name' => __('Use Theme Social Links', 'options_check'),
		'desc' => __('If deselected, you may create a "Social" Menu and enter links / order under Menus, then select it for the Social Naviation.', 'options_check'),
		'id' => 'show_links',
		'std' => 1,
		'type' => 'checkbox');
		

	$options[] = array(
		'name' => __('Facebook', 'options_check'),
		'desc' => __('Link to Facebook Profile', 'options_check'),
		'id' => 'facebook_url',
		'std' => 'http://facebook.com/USER',
		'class' => 'hidden',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Twitter', 'options_check'),
		'desc' => __('Link to Twitter Profile', 'options_check'),
		'id' => 'twitter_url',
		'std' => 'http://twitter.com/USER',
		'class' => 'hidden',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Youtube', 'options_check'),
		'desc' => __('Link to Youtube Profile', 'options_check'),
		'id' => 'youtube_url',
		'std' => 'http://youtube.com/USER',
		'class' => 'hidden',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Other', 'options_check'),
		'desc' => __('Link to Other Profile', 'options_check'),
		'id' => 'other_url',
		'std' => 'http://other.com/USER',
		'class' => 'hidden',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Other Network Name', 'options_check'),
		'desc' => __('Name of Other Social Network', 'options_check'),
		'id' => 'other_network_name',
		'std' => 'Tumblr',
		'class' => 'hidden',
		'type' => 'text');
	
	
	return $options;
}