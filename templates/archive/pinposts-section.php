<div id="pin-posts">
    <div class="container">
		<div class="background"></div>
        <div class="content">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
        				$pin = get_option( 'sticky_posts' );
        				$args = array(
        					'posts_per_page' => -1,
        					'post__in' => $pin,
        					'ignore_sticky_posts' => 1
        				);
        				$sticky = new WP_Query( $args );
        				if($sticky->have_posts()):
        					while($sticky->have_posts()):
        						$sticky->the_post();
        							if ( isset( $pin[0] ) ) :
        			?>
                    <div class="swiper-slide">
                        <div class="pin">
                            <a href="<?php the_permalink();?>" class="link"></a>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="img-box">
                                        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="info-post">
                                        <p class="category">
                                            <?php
                                                $cats = get_the_category();
                                                echo $cats[0]->name;
                                            ?>
                                        </p>
                                        <h2 class="title">
                                            <?php the_title();?>
                                        </h2>
                                        <div class="excerpt">
                                            <?php 
                                                $content = get_the_excerpt();
                                                echo wp_trim_words( $content , '25' );
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
        						endif;
        					endwhile;
        				endif;
        			wp_reset_postdata();
        			?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>