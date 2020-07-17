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
						<a href="#" class="slider-button">Now Trending<i class="material-icons md-chevron">chevron_right</i></a>
						<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe="true" data-cycle-swipe-fx="scrollHorz" data-cycle-timeout="6000" data-cycle-speed="500" data-cycle-slides="> div">
							
							<span class="cycle-pager"></span>
								<div class="slide">
										<h2>COVID-19 Resources</h2>
										<p>Find resources for working from home and precautions we are taking to ensure a safe working environment for all. We update this page weekly with new FAQs.</p>
										<a href="#" class="primary-button">COVID-19 Resources</a>
								</div>
								<div class="slide">
										<h2>Slide 2 COVID-19 Resources</h2>
										<p>Find resources for working from home and precautions we are taking to ensure a safe working environment for all. We update this page weekly with new FAQs.</p>
										<a href="#" class="primary-button">COVID-19 Resources</a>
								</div>
								<div class="slide">
										<h2>Slide 3COVID-19 Resources</h2>
										<p>Find resources for working from home and precautions we are taking to ensure a safe working environment for all. We update this page weekly with new FAQs.</p>
										<a href="#" class="primary-button">COVID-19 Resources</a>
								</div>
						</div> 
					</div>
				</div>

				<div class="resources-grid-wrapper">
					
					<div class="resources-grid-inner-wrapper">
						<h2>Resources <span>at your fingertips</span></h2>
						<ul class="resources-grid">
							<li class="resources-grid-item"><a href="#" class="item-still-healthy">Still Healthy</a></li>
							<li class="resources-grid-item"><a href="#" class="item-policies">Policies</a></li>
							<li class="resources-grid-item"><a href="#" class="item-handbook">Handbook</a></li>
							<li class="resources-grid-item"><a href="#" class="item-youtube">Still Healthy <span>YouTube Videos</span></a></li>
							<li class="resources-grid-item"><a href="#" class="item-forms">Forms</a></li>
							<li class="resources-grid-item "><a href="#" class="item-about-hr">About HR</a></li>
							<li class="resources-grid-item"><a href="#" class="item-wellness-guides">Wellness Guides</a></li>
							<li class="resources-grid-item"><a href="#" class="item-fmla">FMLA</a></li>
							<li class="resources-grid-item"><a href="#" class="item-workplace-injury">Workplace Injury</a></li>
							<li class="resources-grid-item"><a href="#" class="item-work-study">Work Study</a></li>
							<li class="resources-grid-item"><a href="#" class="item-employment">Employment <span>Opportunities</span></a></li>
						
						</ul>
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
							<a href="#" class="cta-link">See all forms<i class="material-icons md-chevron">chevron_right</i></a>
						</div>
						<div class="home-col">
						<h3>Still Healthy Videos</h3>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/hI6o-e7ao8k?&autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<a href="https://www.youtube.com/playlist?list=PLP3UDRKqVJV_qm5bFtjMsYpl5A6LIyTbW" class="cta-link">See all Still Healthy videos<i class="material-icons md-chevron">chevron_right</i></a>
						</div>
						<div class="home-col">
							<h3>Employee Directory</h3>
							<div class="home-col-inner">
								<p>Employee directory intro text. We would like to have an employee directory option. Employee directory intro text. We would like to have an employee directory option.</p>
							</div>
							<a href="https://www.atsu.edu/directory/public/default.aspx" class="cta-link">Search Employee Directory <i class="material-icons md-chevron">chevron_right</i></a>
						</div>
					</div>

					<div class="home-administration-block-wrapper">
						
						<div class="admin-col-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/administration.jpg" alt=""></div>

						<div class="admin-col-text">
							<h3>ATSU Leadership</h3>
							<p>We would like a box below with a focus on ATSU leadership (We are thinking President's Cabinet and Deans).  We would like a box below with a focus.</p>
							<a href="#" class="cta-link">ATSU Leadership<i class="material-icons md-chevron">chevron_right</i></a>
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
