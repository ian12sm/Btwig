<?php
/**
 * Custom functions
 */

// Show less info to users on failed login for security. (Won't let a valid username be known)
function show_less_login_info()
{ 
	return "<strong>ERROR</strong>: What's wrong, don't remember? Try again...";
}

// Don't generate and display WordPress version
function no_generator() 
{ 
	return ''; 
}

add_filter( 'the_generator', 'no_generator' );	
add_filter( 'login_errors', 'show_less_login_info' );


if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#show_links').click(function() {
  		jQuery('.hidden').fadeToggle(400);
	});
	
	if (jQuery('#show_links:checked').val() !== undefined) {
		jQuery('.hidden').show();
	}
	
});
</script>
 
<?php
}


function short_book_func($atts) {
   extract( shortcode_atts( array(
      'length' => '40',
      'after' => '...'
      ), $atts ) ); 
     
    $mybook = do_shortcode('[types field="book-about" id="$book"][/types]');
    if ( strlen($mybook) > $length ) {
    preg_match('/^.{1,'.$length.'}\b/s', $mybook, $matches); // \b to break at word boundary 
    //$mybook = substr($mybook,0,$length);
    $mybook = $matches[0];
    return $mybook . $after;
    } else {
    return $mybook;
    }
}
add_shortcode('short_book','short_book_func');



function short_author_func($atts) {
   extract( shortcode_atts( array(
      'length' => '40',
      'after' => '...'
      ), $atts ) ); 
     
    $myauthor = do_shortcode('[types field="author-bio"][/types]');
    if ( strlen($myauthor) > $length ) {
    preg_match('/^.{1,'.$length.'}\b/s', $myauthor, $matches); // \b to break at word boundary 
    //$myauthor = substr($myauthor,0,$length);
    $myauthor = $matches[0];
    return $myauthor . $after;
    } else {
    return $myauthor;
    }
}
add_shortcode('short_author','short_author_func');

?>