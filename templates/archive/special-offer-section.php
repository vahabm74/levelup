<div class="special-offer">
	<?php $title_section = ot_get_option('course_special_offer_title');?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-section"><?php echo ($title_section) ? $title_section : 'Special Offer';?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="info-box">
					<div class="left">
						<ul>
							<?php
							$id = ot_get_option('course_special_post_select');
							$details = get_post_meta($id,'course_features_items',true);
							$image =  wp_get_attachment_url( get_post_thumbnail_id($id), 'thumbnail' );
							foreach($details as $d):
							?>
							<li>
								<img src="<?php echo $d['course_features_items_icon'];?>" alt="<?php echo $d['title'];?>" title="<?php echo $d['title'];?>">
								<span><?php echo $d['course_features_items_value'];?></span>
							</li>
							<?php endforeach;?>
						</ul>
					</div>
					<div class="right" style="background:url('<?php echo $image;?>');background-size: cover;    background-repeat: no-repeat;background-position: center center;">
						
					</div>
				</div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="date-offer" data-time="<?php echo ot_get_option('course_special_date');?>">
					<ul>
						<li>
							<span class="number">7</span>
							<span class="title">DAYS</span>
						</li>
						<li>
							<span class="number">11</span>
							<span class="title">HOURS</span>
						</li>
						<li>
							<span class="number">23</span>
							<span class="title">MINUTES</span>
						</li>
						<li>
							<span class="number">44</span>
							<span class="title">SECONDS</span>
						</li>
					</ul>
					<h3 class="title-offer">
						<?php echo get_the_title($id);?>
					</h3>
					<div class="desc-offer">
						<?php echo get_the_excerpt($id);?>
					</div>
					<div class="act-offer">
						<a href="<?php echo get_the_permalink($id);?>" class="more">Read More</a>
						<a href="<?php echo get_the_permalink($id);?>/#course_book_form" class="book">Book Now</a>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>