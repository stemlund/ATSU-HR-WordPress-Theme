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
				<ul>
					<li><a href="#">Policies & Handbooks</a></li>
					<li><a href="#">Payroll</a></li>
					<li><a href="#">Benefits</a></li>
					<li><a href="#">UltiPro</a></li>
					<li><a href="#">Supervisors</a></li>
					<li><a href="#">Professional Development</a></li>
					<li><a href="#">Nondiscrimination Policy</a></li>
				</ul>
			</div>
			<div class="footer-col footer-col-links">
				<ul>
					<li><a href="https://www.giving.atsu.edu/s/1883/bp19/home.aspx?gid=2&pgid=61" target="_blank">Partners</a></li>
					<li><a href="https://www.atsu.edu/security-and-emergencies" target="_blank">Security & Emergencies</a></li>
					<li><a href="https://www.atsu.edu/heerf-grant-cares-act" target="_blank">HEERF Grant/CARES Act</a></li>
					<li><a href="https://www.atsu.edu/policies/fcoi.htm" target="_blank">Financial Conflict of Interest in Research Policy</a></li>
					<li><a href="https://www.atsu.edu/student-consumer-information" target="_blank">Student Consumer Information</a></li>
				</ul>

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
