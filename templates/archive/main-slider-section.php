<div class="main-slider" id="course-slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
						<?php
							$slider = ot_get_option('course_archive_slider');
							foreach($slider as $slide):
						?>
                        <div class="swiper-slide">
                            <a href="<?php echo $slide['course_archive_slider_link'];?>">
                                <img src="<?php echo $slide['course_archive_slider_image'];?>" class="img-fluid" alt="<?php echo $slide['title'];?>" title="<?php echo $slide['title'];?>">
                            </a>
                            <div class="info">
                                <h2 class="title"><?php echo $slide['title'];?></h2>
                            </div>
                        </div>
						<?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>