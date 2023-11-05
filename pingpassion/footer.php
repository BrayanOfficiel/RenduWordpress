<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pingpassion
 */

?>

<footer id="colophon" class="site-footer">
	<?php
	
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id' => 'primary-menu',
		)
	);
	?>
	</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>

	</html>