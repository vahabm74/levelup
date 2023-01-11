<?php
/*
Template Name:Menu Coffee
*/
?>
<?php
get_header('inside');

	//Title section template
	get_template_part('templates/cafemenu/title','section');

	//Order list section template
	get_template_part('templates/cafemenu/order-list','section');

get_footer('inside');?>