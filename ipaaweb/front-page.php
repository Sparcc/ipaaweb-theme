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
<?php
	//<div id="primary" class="content-area">
		//<main id="main" class="site-main" role="main">
		?>
		<div class="fpage-top-bar">
			<?php
			include("widget_area_1.php");
			?>
		</div>
		
		<div class="fpage-col-1">
			<div id="front-page-container">
			<h2> Appy for membership</h2>
			<FORM class="front-page form" METHOD="LINK" ACTION="http://localhost/wordpress/stub">
			<INPUT class="front-page button" TYPE="submit" VALUE="individual Membership">
			</FORM>
			</br>
			<FORM class="front-page form" METHOD="LINK" ACTION="http://localhost/wordpress/stub">
			<INPUT class="front-page button" TYPE="submit" VALUE="Corporate Membership">
			</FORM>
			</div>
			
			<div id="core-values" >
			<h1>Core Organisation Values</h1>
			<h2>Professionalism</h2>
			<p>The IPAA is professional - by striving for excellence through taking care and pride in our professional lives.</p>
			<h2>Integrity</h2>
			<p>The IPAA acts with integrity - by adhering to well established public sector and community moral and ethical principles.</p>
			<br>
			<a href="http://www.tas.ipaa.org.au/__data/assets/pdf_file/0009/126639/IPAA_Tasmania_Annual_Report_2014-15.pdf" target="_blank"> View the 2014-15 IPAA Tasmania Report</a>
			</div>
		</div>
		
		<div class="fpage-col-2">
			<?php
			include("widget_area_3.php");
			?>
		</div>
		
		<div class="fpage-col-3">
			<?php
			include("widget_area_4.php");
			?>
		</div>
		<?php
		//</main><!-- #main -->
	//</div><!-- #primary -->
	?>
<?php
get_footer();
