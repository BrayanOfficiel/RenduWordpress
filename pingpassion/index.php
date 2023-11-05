<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pingpassion
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="main-index">
		<div class="titre">
			<h1>
				Bienvenue sur le site Ping-Passion
			</h1>
			<p>
				Le site de référence pour les passionnés de tennis de table
			</p>
		</div>
	</section>
	<section class="links-index">
		<a class="link" href="/revetements">Voir nos revêtements</a>
		<a class="link" href="/bois">Voir nos bois</a>
	</section>



</main><!-- #main -->

<?php
get_footer();
