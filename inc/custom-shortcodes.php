<?php 

function hr_iframe_function( $atts = array() ) {
  
  //set up default parameters
  extract(shortcode_atts(array(
   'height' => '',
   'src' => ''
  ), $atts));

  return "<iframe width=\"100%\" height=\"$height\" frameBorder=\"0\" src=\"$src\"></iframe>";

}

add_shortcode('hr_iframe', 'hr_iframe_function');

