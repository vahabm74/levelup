<div id="post-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-section">
                    <?php wp_title('',true,'|');?>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php
                //Wp query archive posts
                if(have_posts()):
                    while(have_posts()):
                        the_post();
            ?>
            <div class="col-lg-4 col-12">
                <div class="post">
                    <div class="img-box">
                        <a href="<?php the_permalink();?>">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
                        </a>
                    </div>
                    <div class="info-box">
                        <p class="category">
                            <?php
                                $cats = get_the_category();
                                echo $cats[0]->name;
                                echo ' |';
                            ?>
                        </p>
                        <h3><?php the_title();?></h3>
                        <div class="excerpt">
                            <?php 
                                $content = get_the_excerpt();
                                echo wp_trim_words( $content , '25' );
                            ?>
                        </div>
                    </div>
                    <div class="cta">
                        <div class="points">
                        <?php
                            $rate = get_comments (
                                array (
                                    'meta_key' => 'comment_rating',
                                    'post_id'  =>  get_the_ID()  
                                )
                            );
                            $rates = 0;
                            $count = count($rate);
							if($rate != '' && !empty($rate)):
                            foreach($rate as $comment) {
                              $rates += get_comment_meta($comment->comment_ID, 'comment_rating', true);
                            }
                            $final_rate =  round($rates / $count);
                            for($i = 0;$i < $final_rate;$i++){
                        ?>
                            <span class="star">&#9733;</span>
                        <?php }?>
							<?php else:?>
							<span class="star" style="color:#636363;">&#9733;</span>
							<?php endif;?>
                        </div>
                        <a href="<?php the_permalink();?>">&#8594;</a>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>