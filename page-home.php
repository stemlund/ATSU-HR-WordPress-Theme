<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atsu-hr
 */

get_header();
?>
	<main id="primary" class="site-main">


	

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>

			<div class="entry-content">
				<div class="slider-wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/ipe-building-bg.jpg);">
					<div class="slider-inner-wrapper">
						<a href="#" class="slider-button">Now Trending <i class="material-icons">chevron_right</i></a>
						<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe="true" data-cycle-swipe-fx="scrollHorz" data-cycle-timeout="4000" data-cycle-speed="500" data-cycle-slides="> div">
							
							<span class="cycle-pager"></span>
								<div class="slide">
										<h2>COVID-19 Resources</h2>
										<p>Find resources for working from home and precautions we are taking to ensure a safe working environment for all. We update this page weekly with new FAQs.</p>
										<a href="#" class="button">COVID-19 Resources</a>
								</div>
								<div class="slide">
										<h2>Slide 2 COVID-19 Resources</h2>
										<p>Find resources for working from home and precautions we are taking to ensure a safe working environment for all. We update this page weekly with new FAQs.</p>
										<a href="#" class="button">COVID-19 Resources</a>
								</div>
								<div class="slide">
										<h2>Slide 3COVID-19 Resources</h2>
										<p>Find resources for working from home and precautions we are taking to ensure a safe working environment for all. We update this page weekly with new FAQs.</p>
										<a href="#" class="button">COVID-19 Resources</a>
								</div>
						</div> 
					</div>
				</div>

				<div class="resources-grid-wrapper">
					
					<div class="resources-grid-inner-wrapper">
						<h2>Resources <span>at your fingertips</span></h2>
						<div class="resources-grid">
							<a href="#" class="resources-grid-item item-still-healthy">Still Healthy</a>
							<a href="#" class="resources-grid-item item-policies">Policies</a>
							<a href="#" class="resources-grid-item item-handbook">Handbook</a>
							<a href="#" class="resources-grid-item item-youtube">Still Healthy YouTube Videos</a>
							<a href="#" class="resources-grid-item item-forms">Forms</a>
							<a href="#" class="resources-grid-item item-about-hr">About HR</a>
							<a href="#" class="resources-grid-item item-wellness-guides">Wellness Guides</a>
							<a href="#" class="resources-grid-item item-fmla">FMLA</a>
							<a href="#" class="resources-grid-item item-workplace-injury">Workplace Injury</a>
							<a href="#" class="resources-grid-item item-work-study">Work Study</a>
							<a href="#" class="resources-grid-item item-employment">Employment Opportunities</a>
						</div>
					</div>
				</div>

				<div class="home-content-wrapper">
					<div class="home-three-cols-wrapper">
						<div class="home-col">
							<h3>Commonly Used Forms</h3>
							<div class="home-col-inner">
								<a href="#" class="hollow-button">Status Form</a>
								<a href="#" class="hollow-button">Additional Pay Form</a>
								<a href="#" class="hollow-button">Salary Reduction Agreement</a>
							</div>
							<a href="#">See all forms <i class="material-icons">chevron_right</i></a>
						</div>
						<div class="home-col">
							<img src="<?php echo get_template_directory_uri(); ?>/img/treadmills.jpg" alt="">
						</div>
						<div class="home-col">
							<h3>Employee Directory</h3>
							<div class="home-col-inner">
								<p>Employee directory intro text. We would like to have an employee directory option. Employee directory intro text. We would like to have an employee directory option.</p>
							</div>
							<a href="#">See all forms <i class="material-icons">chevron_right</i></a>
						</div>
					</div>

					<div class="home-administration-block-wrapper">
						<div class="home-admin-col-1">
							<h3>ATSU Leadership</h3>
							<p>We would like a box below with a focus on ATSU leadership (We are thinking President's Cabinet and Deans).  We would like a box below with a focus.</p>
							<a href="#">ATSU Leadership <i class="material-icons">chevron_right</i></a>
						</div>

						<div class="home-admin-col-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/administration.jpg" alt="">
						</div>
					</div>
				</div>
			</div><!--end entry-content-->

		</article>

		<?php endwhile; ?>

	</main><!-- #main -->

<?php
get_footer();
