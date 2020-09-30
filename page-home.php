<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atsu-hr
 */

get_header();
?>
<div class="main-wrapper">
	<main id="primary" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>

			<div class="entry-content">
				<div class="slider-wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/ipe-building-bg.jpg);">
					<div class="slider-inner-wrapper">
						<a href="/now-trending/" class="slider-button">Now Trending<i class="material-icons md-chevron">chevron_right</i></a>
						<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe="true" data-cycle-swipe-fx="scrollHorz" data-cycle-timeout="6000" data-cycle-speed="500" data-cycle-slides="> div">
							<span class="cycle-pager"></span>

							<?php
							if( have_rows('slider') ):
								while ( have_rows('slider') ) : the_row(); ?>
									
									<div class="slide">
										<h2><?php the_sub_field('heading');?></h2>
										<p><?php the_sub_field('content');?></p>
										<a href="<?php the_sub_field('button_link');?>" class="primary-button"><?php the_sub_field('button_text');?></a>
									</div>
								<?php endwhile;
							else :
								// no rows found
							endif; ?>
						</div> 
					</div>
				</div>

				<div class="resources-grid-wrapper">
					
					<div class="resources-grid-inner-wrapper">
						<!-- <h2><?php the_field('resources_heading_line_1');?> <span><?php the_field('resources_heading_line_2');?></span></h2> -->
						<ul class="resources-grid">
							<li class="resources-grid-item"><h2><?php the_field('resources_heading_line_1');?> <span><?php the_field('resources_heading_line_2');?></span></h2></li>
							<li class="resources-grid-item"><a href="/benefits/#stillhealthyresources" class="item-still-healthy">Still Healthy</a></li>
							<li class="resources-grid-item"><a href="/atsu-policies-manual/" class="item-policies">Policies</a></li>
							<li class="resources-grid-item"><a href="/policies-handbooks/#handbooks" class="item-handbook">Handbook</a></li>
							<li class="resources-grid-item"><a href="/forms/" class="item-forms">Forms</a></li>
							<li class="resources-grid-item "><a href="/about-hr/" class="item-about-hr">About HR</a></li>
							<li class="resources-grid-item"><a href="/benefits/#stillhealthyresources" class="item-wellness-guides">Wellness Guides</a></li>
							<li class="resources-grid-item"><a href="/fmla/" class="item-fmla">FMLA</a></li>
							<li class="resources-grid-item"><a href="/workplace-injury/" class="item-workplace-injury">Workplace Injury</a></li>
							<li class="resources-grid-item"><a href="/policies-handbooks/#handbooks" class="item-work-study">Work-Study</a></li>
							<li class="resources-grid-item"><a href="https://recruiting2.ultipro.com/ATS1000ATSU/JobBoard/3cecd56d-0475-4bd9-8534-c2eb468057dd/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" target="_blank" class="item-employment">Employment <span>Opportunities</span></a></li>
						
						</ul>
					</div>
				</div>

				<div class="home-content-wrapper">
					<div class="home-three-cols-wrapper">
						<div class="home-col">
							<h3><?php the_field('card_one_heading');?></h3>
							<div class="home-col-inner">
								<?php the_field('card_one_content');?>
							</div>
							<a href="<?php the_field('card_one_link');?>" class="cta-link"><?php the_field('card_one_link_text');?><i class="material-icons md-chevron">chevron_right</i></a>
						</div>
						<div class="home-col">
						<h3><?php the_field('card_two_heading');?></h3>
							<?php the_field('card_two_youtube_embed_url');?>
							<a href="<?php the_field('card_two_link');?>" class="cta-link"><?php the_field('card_two_link_text');?><i class="material-icons md-chevron">chevron_right</i></a>
						</div>
						<div class="home-col">
							<h3><?php the_field('card_three_heading');?></h3>
							<div class="home-col-inner">
								<?php the_field('card_three_text');?>
							</div>
							<a href="<?php the_field('card_three_link');?>" class="cta-link"><?php the_field('card_three_link_text');?><i class="material-icons md-chevron">chevron_right</i></a>
						</div>
					</div>

					<div class="home-administration-block-wrapper">
						
						<div class="admin-col-photo"><img src="<?php the_field('administration_photo');?>" alt=""></div>

						<div class="admin-col-text">
							<h3><?php the_field('administration_heading');?></h3>
							<?php the_field('administration_content');?>
							<a href="<?php the_field('administration_link');?>" class="cta-link"><?php the_field('administration_link_text');?><i class="material-icons md-chevron">chevron_right</i></a>
						</div>
					</div>
				</div>
			</div><!--end entry-content-->

		</article>

		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- main-wrapper-->
<?php
get_footer();
