<?php 
get_header('inside');

	//Pin posts templates
    get_template_part('templates/archive/pinposts','section');
        
    //Post list template
	get_template_part('templates/archive/post-list','section');            

get_footer('inside');