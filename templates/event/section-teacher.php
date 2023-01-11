<div id="event-teacher" class="ajax-box">
	<?php
		$section_title = ot_get_option('event_teacher_title');
	?>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title"><?php echo ($section_title) ? $section_title : 'Instractors';?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <?php
                    $instractors = get_coauthors();
                    foreach($instractors as $ins):
                        // var_dump($ins);
                        $id = $ins->ID;
                        $name = $ins->display_name;
                        $point = get_user_meta($id,'rate',true);
                        $point_width = ($point * 100) / 5;
                        $linkedin = get_user_meta($id,'linkedin',true);
                        $facebook = get_user_meta($id,'facebook',true);
                        $twitter = get_user_meta($id,'twitter',true);
                        $instagram = get_user_meta($id,'instagram',true);
                        $youtube = get_user_meta($id,'youtube',true);
                        $tiktok = get_user_meta($id,'tiktok',true);
                ?>
                <div class="col-lg-3 col-12">
                    <div class="avatar" data-id="<?php echo $id;?>">
                        <?php
							$avatar =  get_user_meta($id,'basic_user_avatar','full');
						if($avatar):
						?>
                        <img src="<?php echo $avatar['full'];?>" alt="<?php echo $name;?>" title="<?php echo $name;?>">
						<?php else:?>
						<img src="<?php echo get_template_directory_uri().'/assets/images/course/person-avatar.png';?>" alt="<?php echo $name;?>" title="<?php echo $name;?>">
						<?php endif;?>
                    </div>
                    <div class="points" style="width:<?php echo $point_width;?>px;" title="<?php echo $point;?>/5">
                    <?php
            		$points = (int)$point;
            		for($i = 0;$i < 5;$i++){
            		?>
                        <span class="star">&#9733;</span>
            		<?php
            			}	
            	    ?>
                   </div>
                   <div class="teacher-detail">
                        <div class="info">
                            <div class="left">
                                <p class="fullname"><?php echo $name;?></p>
                            </div>
                            <div class="right">
                                <?php if($linkedin):?>
                                <a href="<?php echo $linkedin;?>" target="_blank" title="Linkedin">
                                    <i class="icon-linkedin"></i>
                                </a>
                                <?php endif;?>
                                <?php if($facebook):?>
                                <a href="<?php echo $facebook;?>" target="_blank" title="Facebook">
                                    <i class="icon-facebook"></i>
                                </a>
                                <?php endif;?>
                                <?php if($twitter):?>
                                <a href="<?php echo $twitter;?>" target="_blank" title="Twitter">
                                    <i class="icon-twitter"></i>
                                </a>
                                <?php endif;?>
                                <?php if($instagram):?>
                                <a href="<?php echo $instagram;?>" target="_blank" title="Instagram">
                                    <i class="icon-instagram"></i>
                                </a>
                                <?php endif;?>
                                <?php if($youtube):?>
                                <a href="<?php echo $youtube;?>" target="_blank" title="Youtube">
                                    <i class="icon-youtube"></i>
                                </a>
                                <?php endif;?>
								<?php if($tiktok):?>
                                <a href="<?php echo $tiktok;?>" target="_blank" title="TikTok">
                                    <i class="icon-tiktok"></i>
                                </a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <div class="col-12">
                    <div class="about">
                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>