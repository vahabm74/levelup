<?php get_header('inside');?>
<div id="main-course">
    <!--Main loop single course start-->
    <?php
		$features = ot_get_option('course_features_show');
		$teacher = ot_get_option('course_teacher_show');
		$reviews = ot_get_option('course_review_show');
		$gallery = ot_get_option('course_gallery_show');
        if(have_posts()):
            while(have_posts()):
                the_post();
                
                //Course Video and context section
                get_template_part('templates/course/course-video','section');
                
                //Course features section
                if($features == 'on'):
    	            get_template_part('templates/course/course-features','section');
                endif;
	
                //Teacher details section
                if($teacher == 'on'):
                	get_template_part('templates/course/course-teacher','section');
    			endif;            
	
                //comment slider section
                if($reviews == 'on'):
                	get_template_part('templates/course/course-comment','section');
				endif;
	
				//Gallery slider section
				if($gallery == 'on'):
                	get_template_part('templates/course/course-gallery','section');
				endif;
				
				//Booking slider section
                get_template_part('templates/course/course-booking','section');
            endwhile;
        endif;
    wp_reset_postdata();
    ?>
    <!--Main loop single course End-->
</div>
<?php get_footer('inside');?>