<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package atsu-hr
 */

get_header();
?>
<?php get_template_part('template-parts/sub', 'heading'); ?>
<div class="main-and-widgets-wrapper">
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile; 
			
			// the_posts_navigation();
			the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( 'Previous', 'textdomain' ),
				'next_text' => __( 'Next', 'textdomain' ),
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
	<?php get_sidebar(); ?>
</div>
<?php
get_footer();
