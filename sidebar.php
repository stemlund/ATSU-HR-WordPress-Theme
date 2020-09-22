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
		<?php 
		// If on HR Policies page, adjust sidebar heading to read something different so the sidebar heading/nav make sense
		if (is_page(644)) { ?>
			<h2 class="sidebar-head"><a name="toc"></a>ATSU Policies at a glance</h2>
		<?php } else { ?>
			<h2 class="sidebar-head"><a name="toc"></a><?php the_title(); ?> at a glance</h2>
		<?php } ?>
	<div class="widget-area-inner">
		<?php
		/*Policies Manual*/
		if (is_page(19)) {
			dynamic_sidebar( 'policies-sidebar' );
		}
		/*HR Policies Manual*/
		if (is_page(644)) {
			dynamic_sidebar( 'hr-policies-sidebar' );
		}
		/*Benefits*/
		elseif (is_page(20)) {
			dynamic_sidebar( 'benefits-sidebar' );
		}
		/*FMLA*/
		elseif (is_page(278)) {
			dynamic_sidebar( 'fmla-sidebar' );
		}
		/*Forms*/
		elseif (is_page(276)) {
			dynamic_sidebar( 'forms-sidebar' );
		}
		/*Payroll*/
		elseif (is_page(22)) {
			dynamic_sidebar( 'payroll-sidebar' );
		}
		/*Policies & Handbook*/
		elseif (is_page(94)) {
			dynamic_sidebar( 'policies-handbooks-sidebar' );
		}
		/*Professional Development*/
		elseif (is_page(23)) {
			dynamic_sidebar( 'professional-development-sidebar' );
		}
		/*Supervisors*/
		elseif (is_page(24)) {
			dynamic_sidebar( 'supervisors-sidebar' );
		}
		/*UltiPro*/
		elseif (is_page(25)) {
			dynamic_sidebar( 'ultipro-sidebar' );
		}
		/*Workplace Injury*/
		elseif (is_page(351)) {
			dynamic_sidebar( 'workplace-injury-sidebar' );
		}
		else {
			/*Does not match any pages above so show no menus.*/
		}
		?>
			
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->
