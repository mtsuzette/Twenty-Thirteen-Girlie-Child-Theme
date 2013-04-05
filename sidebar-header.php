<?php
/**
 * The sidebar containing the header widget area. 
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="socialmedia" class="socialmedia-container" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .widget-area -->
	</div><!-- #socialmedia -->
<?php endif; ?>