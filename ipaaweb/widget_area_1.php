<?php

/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ipaaweb
 */

if ( ! is_active_sidebar( 'widget_area_1' ) ) {
	return;
}
?>
<div id="secondary1" class="widget-area" role="complementary">
<?php //echo do_shortcode("[huge_it_gallery id='2']"); ?>
	<?php dynamic_sidebar( 'widget_area_1' ); ?>
</div><!-- #secondary -->

