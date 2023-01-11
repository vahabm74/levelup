<div id="event-title" style="background-image:url('<?php echo get_post_meta(get_the_ID(),"event_title_background",true);?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12 m-auto">
				<?php
					$color = get_post_meta(get_the_ID(),'event_title_color',true);
					$date = get_post_meta(get_the_ID(),'event_title_date',true);
				?>
				<h2 class="title" style="color:<?php echo ($color) ? $color : '#ffffff';?>">
					<?php the_title();?>
				</h2>
				<div class="timer" data-time="<?php echo $date;?>">
					<?php 
					$number_color = get_post_meta(get_the_ID(),'event_date_number_color',true);
					$text_color = get_post_meta(get_the_ID(),'event_date_text_color',true);
					$btn_bg = get_post_meta(get_the_ID(),'event_btn_background_color',true);
					$btn_color = get_post_meta(get_the_ID(),'event_btn_text_color',true);
					$hover_bg = get_post_meta(get_the_ID(),'event_btn_hover_color',true);
					$c = '';
					$t = '';
					if($number_color){
						$c = 'style="color:'.$number_color.';"'; 
					}
					if($text_color){
						$t = 'style="color:'.$text_color.';"'; 
					}
					if($hover_bg):?>
						<style>.event-btn:hover{background:<?php echo $hover_bg;?> !important;}</style>
					<?php endif;?>
					<?php if(get_post_meta(get_the_ID(),'event_title_date',true)):
							if(time() < strtotime($date)):
					?>
					<ul>
						<li>
							<span class="value" <?php echo $c;?>>7</span>
							<span class="name" <?php echo $t;?>>DAYS</span>
						</li>
						<li>
							<span class="value" <?php echo $c;?>>15</span>
							<span class="name" <?php echo $t;?>>HOURS</span>
						</li>
						<li>
							<span class="value" <?php echo $c;?>>49</span>
							<span class="name" <?php echo $t;?>>MINUTES</span>
						</li>
						<li>
							<span class="value" <?php echo $c;?>>28</span>
							<span class="name" <?php echo $t;?>>SECONDS</span>
						</li>
					</ul>
					<?php 
						endif;
					endif;?>
					<?php if(get_post_meta(get_the_ID(),'event_title_btn',true)):?>
						<?php
							
							if(time() < strtotime($date)):
								
						?>
						<a href="<?php echo get_post_meta(get_the_ID(),'event_title_btn',true);?>" <?php if($btn_bg || $btn_color):?> style="background:<?php echo $btn_bg;?>;color:<?php echo $btn_color;?>" <?php endif;?> class="event-btn">Book Now</a>
						<?php endif;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</div>