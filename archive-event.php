<?php get_header('event');?>
<div id="archive-course">
    
    <!-- Header section -->
	<?php get_template_part('templates/event/section','header');?>
	
    <!-- Main Slider Archive page-->
    <?php 
		$slider = ot_get_option('event_archive_slider_show');
		if($slider == 'on'):
			get_template_part('templates/archive/event-main-slider','section');
		endif;
	?>
    
	<!--Category list Archive page-->
	<?php get_template_part('templates/archive/category-list','section');?>
</div>
<?php get_footer('event');?>