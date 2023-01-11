<div id="comment-post">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <h2 class="title-section">
                        What do you think about this article?
                    </h2>
                </div>
            </div>
            <div class="comment-form">
                <div class="left">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/post/5.svg';?>" alt="<?php the_title();?>|Comments" title="<?php the_title();?>|Comments">
                    <div class="points">
                        <span class="star" data-point="1" data-image="<?php echo get_template_directory_uri().'/assets/images/post/1.svg';?>">&#9733;</span>
                        <span class="star" data-point="2" data-image="<?php echo get_template_directory_uri().'/assets/images/post/2.svg';?>">&#9733;</span>
                        <span class="star" data-point="3" data-image="<?php echo get_template_directory_uri().'/assets/images/post/3.svg';?>">&#9733;</span>
                        <span class="star" data-point="4" data-image="<?php echo get_template_directory_uri().'/assets/images/post/4.svg';?>">&#9733;</span>
                        <span class="star" data-point="5" data-image="<?php echo get_template_directory_uri().'/assets/images/post/5.svg';?>">&#9733;</span>
                    </div>
                </div>
                <div class="right">
                    <?php comments_template();?>
                </div>
            </div>
        </div>
    </div>
</div>