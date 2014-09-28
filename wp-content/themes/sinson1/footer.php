<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option('responsive_theme_options');

$empty = (empty($responsive_options['home_headline']) && empty($responsive_options['home_subheadline']) && empty($responsive_options['home_content_area'])) ? false : true;
$emtpy_cta = (empty($responsive_options['cta_text'])) ? false : true;
?>
<?php responsive_wrapper_bottom();// after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end();// after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end();// after container hook ?>
<div id="footer" class="clearfix">
<?php responsive_footer_top();?>
<div id="footer-wrapper">

<?php get_sidebar('footer');?>
<div class="">
<?php if (get_header_image() != ''):?>

<div id="footer-logo">
	<a href="<?php echo home_url('/');?>"><img src="<?php header_image();?>" width="<?php echo get_custom_header()->width;?>" height="<?php echo get_custom_header()->height;?>" alt="<?php bloginfo('name');?>"/></a>
</div>
<!-- end of #logo -->

<?php endif;// header image was removed ?>

<?php if (!get_header_image()):?>

<div id="footer-logo">
	<span class="site-name"><a href="<?php echo home_url('/');?>" title="<?php echo esc_attr(get_bloginfo('name', 'display'));?>" rel="home"><?php bloginfo('name');
?></a></span>
	<span class="site-description"><?php bloginfo('description');?></span>
</div><!-- end of #logo -->

<?php endif;// header image was removed (again) ?>
<div class="footer-left">

<div class="footer-company-name">
<?php
if (isset($responsive_options['home_company_name'])
	 && $db && $empty) {
	echo $responsive_options['home_company_name'];
} else {

	_e('厦门旭创电子科技有限公司（Xiamen Sinson Electronic Technology Co. LTD）', 'responsive');
}

?>
</div>

<div class="footer-company-address">
<?php
if (isset($responsive_options['home_company_address'])
	 && $db) {
	echo '地址（Address）: ' . $responsive_options['home_company_address'];
} else {

	_e('地址（Address）: 福建省厦门市集美区（Jimei District, Xiamen City, Fujian Province）', 'responsive');
}

?>
</div>

</div>


<div class="footer-right">

<div class="footer-company-tel">
<?php
if (isset($responsive_options['home_company_tel'])
	 && $db) {
	echo '电话（M.T）: ' . $responsive_options['home_company_tel'];
} else {

	_e('电话（M.T）:	0592-5517496', 'responsive');
}

?>
</div>

<div class="footer-company-fax">
<?php
if (isset($responsive_options['home_company_fax'])
	 && $db) {
	echo '传真（Fax）: ' . $responsive_options['home_company_fax'];
} else {

	_e('传真（Fax):	0592-5332448', 'responsive');
}

?>
</div>
</div>




</div><!-- end of col-940 -->
</div><!-- end #footer-wrapper -->

<?php responsive_footer_bottom();?>
</div><!-- end #footer -->
<?php responsive_footer_after();?>

<?php wp_footer();?>
</body>
</html>