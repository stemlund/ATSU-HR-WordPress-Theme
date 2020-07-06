<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atsu-hr
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<h2 class="sidebar-head"><?php the_title(); ?> at a Glance</h2>
	<div class="widget-area-inner">
		<ul>
			<li>Link 0</li>
			<li>Link 1</li>
			<li>Link 2</li>
			<li>Link 3</li>
			<li>Link 4</li>
			<li>Link 5</li>
		</ul>	
		
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->
