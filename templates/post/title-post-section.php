<div id="title-post">
    <div class="container">
        <div class="title-content">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="img-post">
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
                        <h2><?php the_title();?></h2>
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
                        <div class="time-tags">
                            <div class="time">
                                <?php 
                                    $words = str_word_count(get_the_content());
                                    $time = $words / 300;
                                ?>
                                &#128342; <?php echo round($time);?> minutes
                            </div>
                            <div class="tags">
                                <?php
                                    $tags = get_the_tags();
                                    foreach($tags as $tag):
                                ?>
                                    <a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) );?>">#<?php echo $tag->name;?></a>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>