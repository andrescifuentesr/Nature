<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package NaturesIntent
 */


//-------------------------------------------------  
//function control Excerpt
//-------------------------------------------------

//Remove [...] string using Filters
function new_excerpt_more( $more ) {
	return '[...]<div class="read-more"><a href="'. get_permalink( get_the_ID() ) . '">Read More</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Control Excerpt Length using Filters
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//-------------------------------------------------  
//function for adding current classe to principal menu
//-------------------------------------------------
/*
add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2 );
function current_type_nav_class($classes, $item) {
    $post_type = get_post_type();
    if ($item->attr_title != '' && $item->attr_title == $post_type) {
        array_push($classes, 'current-menu-item');
    };
    return $classes;
}
*/