<?php
/**
 * Template Name: Login Page

 *
 * @package atsu-hr
 */
?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atsu-hr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="login-button">
    <a href="http://hr.atsu.edu/?option=saml_user_login"><img src="<?php echo get_template_directory_uri(); ?>/img/hr-login-button.svg"></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

