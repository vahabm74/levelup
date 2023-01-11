<div class="main-slider" id="event-slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
							$slider = ot_get_option('event_archive_slider');
							foreach($slider as $slide):
						?>
                        <div class="swiper-slide">
                            <a href="<?php echo $slide['event_archive_slider_link'];?>">
                                <img src="<?php echo $slide['event_archive_slider_image'];?>" class="img-fluid" alt="<?php echo $slide['title'];?>" title="<?php echo $slide['title'];?>">
                            </a>
                        </div>
						<?php endforeach;?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>