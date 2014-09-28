<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Footer Widget Template
 *
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

if (!is_active_sidebar('footer-widget')) {
	return;
}

?>
<?php responsive_widgets_before();// above widgets container hook ?>
<div id="footer_widget" class="grid col-940">
<?php responsive_widgets();// above widgets hook ?>

<?php if (is_active_sidebar('footer-widget')):?>

<?php dynamic_sidebar('footer-widget');?>

<?php endif;//end of colophon-widget ?>

<?php responsive_widgets_end();// after widgets hook ?>
</div><!-- end of #footer-widget -->
<?php responsive_widgets_after();// after widgets container hook ?>