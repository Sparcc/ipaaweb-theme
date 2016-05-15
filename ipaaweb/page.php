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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			//echo "stuff";
			//this includes the html/php code from the php files for the different pages
			//page titles are defined in wp-admin then go to pages)
			if (is_page('Awards')){include("awardspage.php");}
			if (is_page('About Us')){include("aboutus.php");}
			if (is_page('Contact Us')){include("contactus.php");}
			if (is_page('Council')){include("council.php");}
			if (is_page('Events')){include("eventspage.php");}
			if (is_page('Links')){include("linkpage.php");}
			//echo "stuff";
			
			//this stuff is relevant to posts so ignore this
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

<?php

get_footer();
