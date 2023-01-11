<?php 

get_header('inside');

	if(have_posts()):
		while(have_posts()):
			the_post();

			//Post title and thumbnail and info template
			get_template_part('templates/post/title-post','section');
			
			//Post content template
			get_template_part('templates/post/content-post','section');
			
			//Post comment template
			get_template_part('templates/post/comment-post','section');			

			//Post comment list template
			get_template_part('templates/post/comments-post','section');	

			endwhile;
		endif;
	wp_reset_postdata();

get_footer('inside');

?>