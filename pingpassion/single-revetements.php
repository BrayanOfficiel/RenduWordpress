<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pingpassion
 */

get_header();
?>
<main id="primary" class="site-main">

	<?php
	function mytheme_custom_excerpt_length($length)
	{
		return 999;
	}
	add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

	if (have_posts()):
		while (have_posts()): ?>
			<?php the_post(); ?>

			<article class="single-card">
				<div class="single-img">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="single-card__content">
					<h2>
						<?php the_title(); ?>
					</h2>
					<?php the_excerpt(); ?>
					<?php
					if (get_field('rapidite') || get_field('controle') || get_field('adherence') || get_field('epaisseur')) {
						?>
						<div>
							<h3>Spécifications</h3>
						<?php }
					if (get_field('rapidite')) {
						echo '<p class="spec">Rapidité : ' . get_field('rapidite') . '</p>';
					}
					if (get_field('controle')) {
						echo '<p class="spec">Contrôle : ' . get_field('controle') . '</p>';
					}
					if (get_field('adherence')) {
						echo '<p class="spec">Adhérence : ' . get_field('adherence') . '</p>';
					}
					if (get_field('epaisseur')) {
						echo '<p class="spec">Épaisseur : ' . get_field('epaisseur') . '</p>';
					}
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-title">◀</span>',
							'next_text' => '<span class="nav-title">▶︎</span>',
						)
					);
					?>
					</div>
				</div>
			</article>

			<?php
		endwhile; // End of the loop.
	
		// the_post_navigation(
		// 	array(
		// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'salad') . '</span> <span class="nav-title">%title</span>',
		// 		'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'salad') . '</span> <span class="nav-title">%title</span>',
		// 	)
		// );
	
		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()):
			comments_template();
		endif;
	else:
		get_template_part('template-parts/content', 'none');
	endif;
	?>

</main><!-- #main -->

<?php
get_footer();
