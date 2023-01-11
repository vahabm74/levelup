<div id="event-info">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 m-auto">
                    <ul>
						<?php
							$features = get_post_meta(get_the_ID(),'event_features_items',true);
							$title_color = get_post_meta(get_the_ID(),'event_feature_title_color',true);
							$value_color = get_post_meta(get_the_ID(),'event_feature_value_color',true);
							foreach($features as $item):
						?>
                        <li>
                            <img src="<?php echo $item['event_features_items_icon'];?>" alt="<?php echo $item['title'];?>" title="<?php echo $item['title'];?>">
                            <p class="name" <?php if($title_color):?> style="color:<?php echo $title_color;?>" <?php endif;?>><?php echo $item['title'];?></p>
                            <p class="value" <?php if($value_color):?> style="color:<?php echo $value_color;?>" <?php endif;?>><?php echo $item['event_features_items_value'];?></p>
                        </li>
						<?php
							endforeach;
						?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
				<?php
					$video = get_post_meta(get_the_ID(),'event_video_url',true);
					$image = get_post_meta(get_the_ID(),'event_image_url',true);
					
				?>
                <div class="col-lg-6 col-12">
                    
                    <div class="event-video">
                        <?php if($video):?>
                        <video id="event-video" controlslist="nodownload nofullscreen noremoteplayback">
                            <source src="<?php echo $video;?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <span class="start">
                            <i class="icon-play"></i>
                        </span>
                        <?php elseif($image):?>
                            <img src="<?php echo $image;?>" alt="<?php the_title();?>" title="<?php the_title();?>">
                        <?php endif;?>
                    </div>
                    
                </div>
                
				<?php 
					
					$section_title_color = get_post_meta(get_the_ID(),'event_section_title_color',true);
					$section_text_color = get_post_meta(get_the_ID(),'event_section_text_color',true);
					$section_btn1_color = get_post_meta(get_the_ID(),'event_section_btn1_color',true);
					$section_btn2_color = get_post_meta(get_the_ID(),'event_section_btn2_color',true);
				?>
                <div class="col-lg-6 col-12">
                    <div class="event-detail">
                        <h3 class="name" <?php if($section_title_color):?> style="color:<?php echo $section_title_color;?>" <?php endif;?>><?php the_title();?></h3>
                        <div class="desc" <?php if($section_text_color):?> style="color:<?php echo $section_text_color;?>" <?php endif;?>>
                            <?php the_excerpt();?>
                        </div>
                    </div>
                    <div class="cta">
                        <a href="#!" class="more" <?php if($section_btn1_color):?> style="background:<?php echo $section_btn1_color;?>" <?php endif;?>>Read More</a>
                        <a href="#event-book" class="book" <?php if($section_btn2_color):?> style="background:<?php echo $section_btn2_color;?>" <?php endif;?>>Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
</div>