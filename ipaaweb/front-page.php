<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ipaaweb
 */

get_header(); ?>
GREETINGS FROM front-page.php
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="events-section">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
		events section goes here
		</div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
GOODBYE FROM THE front-page.php
<?php
get_sidebar();
get_footer();
