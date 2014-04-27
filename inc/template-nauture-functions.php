<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package NaturesIntent
 */

//-------------------------------------------------  
//function for adding current classe Ricettes menu
//-------------------------------------------------

// add_filter( 'getarchives_where' , 'ucc_getarchives_where_filter' , 10 , 2 );
// function ucc_getarchives_where_filter( $where , $r ) {
//     $args = array( 'public' => true , '_builtin' => false );
//     $output = 'names';
//     $operator = 'and';
//     $post_types = get_post_types( $args , $output , $operator );
//     $post_types = array_merge( $post_types , array( 'post' ) );
//     $post_types = "'" . implode( "' , '" , $post_types ) . "'";
//     return str_replace( "post_type = 'post'" , "post_type IN ( $post_types )" , $where );
// }

// if ( ! function_exists( 'ucc_request_filter' ) ) {
// function ucc_request_filter( $query ) {
//     // Preview does not like having post_type set; feed is my personal preference.
//     if ( empty( $query['preview'] ) && empty( $query['feed'] ) ) {
//         $my_post_type = $query['post_type'];
//         if ( empty( $my_post_type ) ) {
//             $query['post_type'] = 'any';
//         }
//     }
//     return $query;
// } }
// add_filter( 'request' , 'ucc_request_filter' );



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