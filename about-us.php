<?php
/*
Template Name:About us
*/
get_header('inside');
?>
<div id="about-us">
	<!--Main Banner section-->
	<?php echo get_template_part('templates/about/main-banner','section');?>
	<!--Main Text section-->
	<?php echo get_template_part('templates/about/main-text','section');?>
	<!--Main Achievment section-->
	<?php echo get_template_part('templates/about/main-achievement','section');?>
	<!--Our Team section-->
	<?php echo get_template_part('templates/about/our-team','section');?>
	<!--Main Faq section-->
	<?php echo get_template_part('templates/about/main-faq','section');?>
</div>
<?php get_footer('inside');?>