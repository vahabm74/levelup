<div id="slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
                $orderby = ot_get_option('slider_index_orderby');
                $count = ot_get_option('slider_index_count');
                $args = array(
                    'post_type'         => 'courses',
                    'order'             => 'desc',
                    'orderby'           => ($orderby) ? $orderby : 'date',
                    'posts_per_page'    => ($count) ? $count : 10
                );
                $courses_slider = new WP_Query($args);
                if($courses_slider->have_posts()):
                    while($courses_slider->have_posts()):
                        $courses_slider->the_post();
            ?>
            <div class="swiper-slide">
                <div class="slide">
                    <figure style="background-image:url('<?php the_post_thumbnail_url();?>');"></figure>
                        <div class="caption">
                            <h2>
                                <?php the_title();?>
                            </h2>
                            <p>
                                <?php 
                                    $content = get_the_excerpt();
                                    echo wp_trim_words( $content , '10' ); 
                                ?>
                            </p>
                        </div>
                    <a href="<?php the_permalink();?>" class="detail">Details</a>
                </div>
            </div>
            <?php 
                    endwhile;
                endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
	<div class="cta">
        <?php if(ot_get_option('btn_1_index_title')):?>
            <a href="<?php echo ot_get_option('btn_1_index_link');?>" class="book"><?php echo ot_get_option('btn_1_index_title');?></a>
        <?php endif;?>
        <?php if(ot_get_option('btn_2_index_title')):?>
            <a href="<?php echo ot_get_option('btn_2_index_link');?>" class="mission"><?php echo ot_get_option('btn_2_index_title');?></a>
        <?php endif;?>
    </div>
</div>