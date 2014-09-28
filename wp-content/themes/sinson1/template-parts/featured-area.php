<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

$responsive_options = responsive_get_options();
//test for first install no database
$db = get_option('responsive_theme_options');

//test if all options are empty so we can display default text if they are
$empty = (empty($responsive_options['home_headline']) && empty($responsive_options['home_subheadline']) && empty($responsive_options['home_content_area'])) ? false : true;
$emtpy_cta = (empty($responsive_options['cta_text'])) ? false : true;

?>
<div id="featured" class="grid col-940" style="height:420px;">

	<div id="featured-content" class="grid col-460">

		<h1 class="featured-title test-title">
<?php
if (isset($responsive_options['home_headline']) && $db && $empty) {
	echo $responsive_options['home_headline'];
} else {
	_e('Hello, World!', 'responsive');
}
?>
</h1>

<h2 class="featured-subtitle">
<?php
if (isset($responsive_options['home_subheadline']) && $db && $empty) {
	echo $responsive_options['home_subheadline'];
} else {

	_e('Your H2 subheadline here', 'responsive');
}

?>
</h2>

<h2 class="featured-slogan">
<?php
if (isset($responsive_options['home_slogan']) && $db && $empty) {
	echo $responsive_options['home_slogan'];
} else {

	_e('梦想还是要有的，万一实现了呢', 'responsive');
}

?>
</h2>


</div><!-- end of .col-460 -->



</div><!-- end of #featured -->
</div><!-- end of #wrapper -->
</div><!-- end of #container -->