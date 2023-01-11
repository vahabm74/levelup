<section class="video-context">
    <div class="container">
        <div class="row">
            <?php
				$video_url = get_post_meta(get_the_ID(),'course_video_url',true);
			    $image_url = get_post_meta(get_the_ID(),'course_image_url',true);
    				if($video_url || $image_url):
    		    	?>
            <div class="col-lg-6 col-12">
                <div class="video">
                    <?php if($video_url):?>
                    <video id="course-video" controlsList="nodownload nofullscreen noremoteplayback">
                        <source src="<?php echo $video_url;?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <span class="start">
                        <i class="icon-play"></i>
                    </span>
                    <?php elseif($image_url):?>
                    <img src="<?php echo $image_url;?>" alt="<?php the_title();?>" title="<?php the_title();?>">
                    <?php endif;?>
                </div>
            </div>
            <?php endif;?>
            <div class="col-lg-6 col-12">
                <div class="context">
                    <h2 class="course-title">
                        <?php the_title();?>
                    </h2>
                    <div class="text">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>