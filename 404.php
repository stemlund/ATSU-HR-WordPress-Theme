<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package atsu-hr
 */

get_header();
?>
<?php get_template_part('template-parts/sub', 'heading'); ?>
<div class="main-and-widgets-wrapper">
	<main id="primary" class="site-main error-404 not-found">

		<div class="entry-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'atsu-hr' ); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</main><!-- #main -->
</div>
<?php
get_footer();
