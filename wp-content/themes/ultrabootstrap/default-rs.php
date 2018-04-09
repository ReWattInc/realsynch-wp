<?php
/**
 * home.php for our theme.
 * Template Name: Default Realsynch
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */

get_header('rs'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<?php
				if (have_posts()):
					while (have_posts()) : the_post();
						the_content();
					endwhile;
				else:
					echo '<p>Sorry, no posts matched your criteria.</p>';
				endif;
			?>
		</div>
	</main><!-- #main -->

<?php get_footer('rs'); ?>
