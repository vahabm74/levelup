<?php get_header('event');
		$title = ot_get_option('event_title_show');
		$museum = ot_get_option('event_museum_show');
		$details = ot_get_option('event_details_show');
		$teacher = ot_get_option('event_teacher_show');
		$faq = ot_get_option('event_faq_show');
		if(have_posts()):
			while(have_posts()):
				the_post();

				//Header section
				echo get_template_part('templates/event/section','header');

				// Title & DownTimer section 
				if($title == 'on'):
					echo get_template_part('templates/event/section','title');
				endif;

				//Museum event section
				if($museum == 'on'):
					echo get_template_part('templates/event/section','museum');
				endif;

				//Info event section
				if($details == 'on'):
					echo get_template_part('templates/event/section','info');
				endif;
				
				//Teacher event section
				if($teacher == 'on'):
					echo get_template_part('templates/event/section','teacher');
				endif;

				//FAQ event section
				if($faq == 'on'):
					echo get_template_part('templates/event/section','faq');
				endif;

				//Book Now event section
				echo get_template_part('templates/event/section','book');

			endwhile;
		endif;
	wp_reset_postdata();
get_footer('event');
?>