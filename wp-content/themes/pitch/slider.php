<?php

$slides = get_posts(array(
	'numberposts' => $GLOBALS['pitch_theme_settings']['slider_max_slides'],
	'post_type' => 'slide',
	'orderby' => 'menu_order',
	'order' => 'ASC'
));

if(!empty($slides)){
	?>
	<div id="slider">
		<div class="container">
			<div class="slides nivoSlider" style="height:<?php print esc_attr(intval($GLOBALS['pitch_theme_settings']['slider_height'])) ?>px">
				<?php foreach($slides as $slide) : if(has_post_thumbnail($slide->ID)) : ?>
				
				
					<?php if(get_post_meta($slide->ID, 'slide_destination', true)) : $destination = get_post_meta($slide->ID, 'slide_destination', true) ?>
						<?php print '<a href="'.esc_attr(get_permalink($destination)).'" title="'.esc_attr(get_the_title($destination)).'">' ?>
					<?php elseif(get_post_meta($slide->ID, 'slide_destination_url', true)) : $destination = get_post_meta($slide->ID, 'slide_destination_url', true) ?>
						<?php print '<a href="'.esc_attr($destination).'">' ?>
					<?php endif; ?>
					<?php print get_the_post_thumbnail($slide->ID, 'slide') ?>
					<?php if(!empty($destination)) print '</a>' ?>
				<?php endif; endforeach; ?>
			</div>
			<div class="indicators-wrapper">
				<ul class="indicators">
					<?php foreach($slides as $i => $slide) : if(has_post_thumbnail($slide->ID)) : ?>
					<li class="indicator <?php if($i == 0) print 'active' ?> indicator-group-<?php print intval(count($slides)) ?>">
						<div class="indicator-container">
							<div class="pointer"></div>
							<h4><?php print $slide->post_title ?></h4>
							<p><?php print $slide->post_excerpt ?></p>
						</div>
					</li>
					<?php endif; endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php
}
else{
	get_template_part('demo/slider');
}