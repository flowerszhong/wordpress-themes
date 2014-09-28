<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * About Template
 *
Template Name:  About
 *
 * @file           about-template.php
 * @package        Responsive
 * @author         matthew.zhong
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/sinson/about-template.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header();?>
<div id="content-half" class="grid col-940">
<?php if (have_posts()):?>

<?php while (have_posts()):the_post();?>

	<?php responsive_entry_before();?>
					<div id="post-<?php the_ID();?>" <?php post_class();
	?>>
	<?php responsive_entry_top();?>

					<h1 class="post-title"><?php the_title();?></h1>

					<div class="post-entry">
	<?php the_content(__('Read more &#8250;', 'responsive'));
	?>
					<?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>'));?>
	</div><!-- end of .post-entry -->

	<?php get_template_part('post-data');?>

	<?php responsive_entry_bottom();?>
					</div><!-- end of #post-<?php the_ID();?>-->
	<?php responsive_entry_after();?>

	<?php
endwhile;

get_template_part('loop-nav');

else:

	get_template_part('loop-no-posts');

endif;
?>
</div>

<?php responsive_widgets_before();// above widgets container hook ?>
<?php responsive_widgets();// above widgets hook ?>
<div id="about-widget-1">
<?php if (!dynamic_sidebar('home-widget-3')):?>
<div class="widget-wrapper" id="about-widget-map">

<div class="widget-title-about"><h3><?php _e('地图', 'responsive');?></h3></div>
<div
class="textwidget"><?php _e('This is your first home widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area 6 called Home Widget 1. Title is also manageable from widgets as well.', 'responsive');?></div>

</div><!-- end of .widget-wrapper -->
<?php endif;//end of home-widget-1 ?>

<?php responsive_widgets_end();// responsive after widgets hook ?>
</div>

<div id="about-widget-brands">
<?php responsive_widgets();
// responsive above widgets hook ?>

<?php if (!dynamic_sidebar('home-widget-brands')):?>
<div class="widget-wrapper">

<div class="widget-title-home"><h3><?php _e('品牌轮播', 'responsive');?></h3></div>
<div
class="textwidget"><?php _e('This is your second home widget box. To edit please go to Appearance > Widgets and choose 7th widget from the top in area 7 called Home Widget 2. Title is also manageable from widgets as well.', 'responsive');?></div>

</div><!-- end of .widget-wrapper -->
<?php endif;//end of home-widget-2 ?>

<?php responsive_widgets_end();// after widgets hook ?>
</div><!-- end of .col-300 -->



<?php
// get_sidebar('about');
get_footer();

?>
