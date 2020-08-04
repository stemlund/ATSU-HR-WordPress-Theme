<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atsu-hr
 */

?>
</div><!-- #page -->
	<footer id="colophon" class="site-footer">
		<div class="footer-cols">
			<div class="footer-col footer-col-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/atsu-logo.svg" alt="">
			</div>
			<div class="footer-col footer-col-contact">
				<h4>Contact Human Resource</h4>
				<address>
					<h5>800 West Jefferson St.</h5>
					<span>Kirksville, MO 63501</span>
					<span>660-626-2790</span>

					<h5>5850 E. Still Circle</h5>
					<span>Mesa AZ 85206</span>
					<span>480-219-6129</span>
					<span><a href="mailto:hr@atsu.edu">hr@atsu.edu</a></span>
				</address>


				
			</div>
			<div class="footer-col footer-col-links">
			<?php
			wp_nav_menu(
				array(
					'menu'        => '5',
				)
			);
				?>
			</div>
			<div class="footer-col footer-col-links">
			<?php
			wp_nav_menu(
				array(
					'menu'        => '6',
				)
			);
				?>

			</div>
		</div>
		<div class="footer-copyright-policies">
			<div class="footer-copyright">
				&copy; 1892-<?php echo date("Y"); ?> A.T. Still University | All Rights Reserved
			</div>

			<div class="footer-policies">
			<a href="https://www.atsu.edu/privacy-policy">Privacy Policy</a>
			</div>

		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
