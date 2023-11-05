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
<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post();
		?>
		<?php

		get_template_part('template-parts/content', get_post_type());

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'pingpassion') . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'pingpassion') . '</span> <span class="nav-title">%title</span>',
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()):
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
