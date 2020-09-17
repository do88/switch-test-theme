<?php

// Add custom button shortcode
function button_shortcode_function( $atts = array(), $content = null ) {
    // set up default parameters
    extract(shortcode_atts(array(
     'link' => '#'
    ), $atts));
    return '<a href="'. $link .'" class="button button--white">' . $content . '</a>';
}
add_shortcode('button', 'button_shortcode_function');