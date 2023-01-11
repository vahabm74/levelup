<?php get_header('inside');?>
<div id="archive-course">
    <!-- Main Slider Archive page-->
    <?php 
		$slider = ot_get_option('course_archive_slider_show');
		if($slider == 'on'):
			get_template_part('templates/archive/main-slider','section');
		endif;
	?>
    
    <!-- Special offer Archive page-->
    <?php
		$offer = ot_get_option('course_special_offer_show');
		if($offer == 'on'):
			get_template_part('templates/archive/special-offer','section');
		endif;
	?>
	
	<!--Category list Archive page-->
	<?php get_template_part('templates/archive/category-list','section');?>
</div>
<?php get_footer('inside');?>