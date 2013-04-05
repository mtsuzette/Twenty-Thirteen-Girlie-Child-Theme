<?php
/**
 * Twenty Thirteen Child Theme functions and definitions.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/* Define functions below */

function twentythirteen_widgets_init_2() {
	register_sidebar( array(
		'name'          => __( 'Header Widget Area', 'twentythirteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the header section of the site', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'twentythirteen_widgets_init_2' );


// Add bottom navigation menu.
	register_nav_menu( 'bottom', 'Bottom Site Links' );



?>