<?php
/**
 * Template Name: About HR
 *
 * @package atsu-hr
 */

get_header();
?>
<?php get_template_part('template-parts/sub', 'heading'); ?>
<div class="main-and-widgets-wrapper">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
            the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>

                <div class="entry-content">
                    <div class="intro-content"><?php the_content(); ?></div>
                    <div id="staff">
                        <?php if (have_rows('staff')):
                            while (have_rows('staff')): the_row(); ?>
                        <div class="staff-person">
                            <div class="staff-photo">
                                <?php 
                                $image = get_sub_field('photo');
                                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size ); } ?>
                            </div>

                            <h2><?php the_sub_field('name');?></h2>
                            <h3><?php the_sub_field('title');?></h3>
                            <div class="staff-contact">
                                <p class="email"><a href="mailto:<?php the_sub_field('email');?>"><i class="material-icons">email</i><?php the_sub_field('email');?></a></p>
                                <p class="phone"><a href="tel:<?php the_sub_field('phone');?>"><i class="material-icons">phone</i><?php the_sub_field('phone');?></a></p>
                                <p class="location"><i class="material-icons">location_on</i><?php the_sub_field('office_location');?></p>
                            </div>
                            <div class="biography"><?php the_sub_field('biography');?></div>
                        </div>
                        <?php endwhile;
                        else :
                        endif; ?>
                    </div>
                    
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
</div><!-- .main-and-widget-wrapper -->
<?php
get_footer();
