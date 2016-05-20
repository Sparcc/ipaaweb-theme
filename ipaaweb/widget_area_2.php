<?php

/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ipaaweb
 */

if ( ! is_active_sidebar( 'widget_area_2' ) ) {
	return;
}
?>

<div id="secondary2" class="widget-area" role="complementary">
THIS IS widget area 2
	<?php dynamic_sidebar( 'widget_area_2' ); ?>
</div><!-- #secondary -->

