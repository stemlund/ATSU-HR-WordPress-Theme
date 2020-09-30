<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atsu-hr
 */

?>
<a href="<?php the_permalink(); ?>" rel="bookmark" class="search-result-entry-link">
<article id="post-<?php the_ID(); ?>" <?php post_class('main-content'); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<div class="search-url"><?php the_permalink(); ?></div>
</article><!-- #post-<?php the_ID(); ?> -->
</a>