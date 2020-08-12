<?php
/**
 * Template Name: Content blocks

 *
 * @package atsu-hr
 */

get_header();
?>
<div class="main-and-widgets-wrapper">
    <?php get_template_part('template-parts/sub', 'heading'); ?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
            the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>
                
                <?php get_template_part('template-parts/subpage', 'toc'); ?>
                <div class="entry-content masonry-wrapper">
                    
                    <?php if (have_rows('content-blocks')):
                        while (have_rows('content-blocks')): the_row(); ?>
                        <div class="card">
                            <h2 id="<?php the_sub_field('hash');?>" class="card-head"><?php the_sub_field('heading');?></h2>
                            <div class="card-inner"><?php the_sub_field('content');?></div>
                        </div>
                    <?php endwhile;
                    else :
                    endif; ?>
                
                    
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

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<?php get_sidebar(); ?>
</div><!-- .main-and-widget-wrapper -->
<?php
get_footer();
