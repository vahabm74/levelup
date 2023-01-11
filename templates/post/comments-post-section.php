<div id="comments-post">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <h2 class="title-section">
                        All Comments
                    </h2>
                </div>
            </div>
            <div class="comment-list">
            <?php
                $args = array(
                	'callback' => 'levelup_comments_callback',
                	'reverse_top_level' => true,
                	'style' => 'ol'
                ); 
            ?>
            <?php  
                if(have_comments()){
                    wp_list_comments($args);
                }
                ?>
            </div>
        </div>
    </div>
</div>