<?php
	$section_title = ot_get_option('course_features_title');
	$items = get_post_meta(get_the_ID(),'course_features_items',true);
	if($items && count($items) != 0) :
?>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section"><?php echo ($section_title) ? $section_title : 'Course Features';?></h3>
            </div>
        </div>
    </div>
    <div class="features-list">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
					<?php
						foreach($items as $item):
					?>
                    <li>
                       <img src="<?php echo $item['course_features_items_icon'];?>" alt="<?php echo $item['title'];?>" title="<?php echo $item['title'];?>">
                       <p class="name"><?php echo $item['title'];?></p>
                       <p class="value"><?php echo $item['course_features_items_value'];?></p>
                    </li>
					<?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
<?php endif;?>