<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atsu-hr
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>

	<?php atsu_hr_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atsu-hr' ),
				'after'  => '</div>',
			)
		);
		?>
		<button class="accordion-head">Test content accordion</button>
		<div class="accordion-content">
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quas, deleniti corrupti neque adipisci assumenda cum quis ut ab sit aspernatur odio veniam aperiam excepturi velit eum dolor? Quia, dolor?</div>
		
		<button class="accordion-head">Another Test content accordion</button>
		<div class="accordion-content">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis unde deserunt voluptatum. Voluptatibus ea repellat debitis quod placeat, corporis non! Facilis labore deleniti commodi eligendi qui eveniet ratione, beatae vero.
		
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quas, deleniti corrupti neque adipisci assumenda cum quis ut ab sit aspernatur odio veniam aperiam excepturi velit eum dolor? Quia, dolor?</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'atsu-hr' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
