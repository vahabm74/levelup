<div id="event-museum">
	<?php
		$section_title = ot_get_option('event_museum_title');
	?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-section">
                   <?php echo ($section_title) ? $section_title : 'Museum';?>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="event-slider">
                <div class="left">
					<?php 
						$museums = get_post_meta(get_the_ID(),'event_museum_items',true);
						$switch = 0; 
						$class = 'active';
						foreach($museums as $key=>$m):
							$title = $m['title'];
							$image = $m['event_museum_items_image'];
							$date = $m['event_museum_items_date'];
							$desc = $m['event_museum_items_desc'];
					?>
                    <div class="slide <?php echo $class;?>" data-id="<?php echo $key;?>">
						<img src="<?php echo $image;?>">
						<div class="desc">
							<p class="title">
								<?php echo $title;?>
							</p>
							<p class="content">
								<?php echo $desc;?>
							</p>
						</div>
					</div>
					<?php
						if ($key == $switch) $class = 'hidden';
					?>
					<?php endforeach;?>
                </div>
                <div class="right">
                    <ul>
						<?php 
							$class_l = 'active';
							$switch_l = 0;
							foreach($museums as $keys=>$l):
								$title_l = $l['title'];
								$image_l = $l['event_museum_items_image'];
								$date_l = $l['event_museum_items_date'];
						?>
                        <li data-id="<?php echo $keys;?>" class="<?php echo $class_l;?>">
                            <img src="<?php echo $image_l;?>" alt="<?php echo $title_l;?>" title="<?php echo $title_l;?>">
                            <div class="desc">
                                <p class="title">
                                    <?php echo $title_l;?>
                                </p>
                                <p class="date">
                                   	<?php echo $date_l;?>
                                </p>
                            </div>
                        </li>
						<?php
							if ($keys == $switch_l) $class_l = 'hidden';
						?>
						<?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>