<?php
    $reviews = get_post_meta(get_the_ID(),'course_comment_items',true);
    if($reviews && count($reviews) != 0):
?>
<section class="comments">
	<?php
		$section_title = ot_get_option('course_review_title');
	?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section"><?php echo ($section_title) ? $section_title : "Comment's Students";?></h3>
            </div>
        </div>
    </div>
    <div class="comment-slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
							<?php
								foreach($reviews as $review):
							?>
                            <div class="swiper-slide">
                                <div class="comment">
                                    <div class="top">
                                        <div class="avatar">
                                            <?php if($review['course_comment_items_avatar']):?>
                                            <img src="<?php echo $review['course_comment_items_avatar'];?>" alt="<?php echo $review['title'];?>" title="<?php echo $review['title'];?>">
                                            <?php else:?>
                                            <img src="https://levelupdans.com/wp-content/themes/levelup/assets/images/course/person-avatar.png" alt="<?php echo $review['title'];?>" title="<?php echo $review['title'];?>">
                                            <?php endif;?>
                                        </div>
                                        <div class="name">
                                            <p class="sender"><?php echo $review['title'];?></p>
                                            <p class="position"><?php
												$review_date = strtotime($review['course_comment_items_date']);
												echo date('d M Y',$review_date);;
												?></p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <?php echo $review['course_comment_items_text'];?>
                                    </div>
                                </div>
                            </div>
							<?php endforeach;?>
						</div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>