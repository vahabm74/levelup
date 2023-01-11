<?php
    $images = get_post_meta(get_the_ID(),'course_gallery_items',true);
    if($images && count($images) != 0):
?>
<section class="gallery">
	<?php
		$section_title = ot_get_option('course_gallery_title');
	?>
	<div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section"><?php echo ($section_title) ? $section_title : 'Gallery';?></h3>
            </div>
        </div>
    </div>
    <div class="gallery-image">
    	<div class="container">
        	<div class="row">
            	<div class="col-12">
                	<div class="swiper-container">
                    	<div class="swiper-wrapper">
							<?php
								foreach($images as $image):
							?>
                        	<div class="swiper-slide">
                            	<div class="image" style="background-image:url('<?php echo $image['course_gallery_items_image'];?>');" data-image="<?php echo $image['course_gallery_items_image'];?>"></div>
                            </div>
							<?php endforeach;?>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="box">
            <span class="close">Close</span>
        </div>
    </div>
</section>
<?php endif;?>