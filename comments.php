<?php
            $commenter = wp_get_current_commenter();
            $aria_req = ( $req ? " aria-required='true'" : '' );
            $arg = array(
                'fields'=> array(
                    'author'    =>'<p class="comment-form-author">'  .
                      '<input id="author" class="blog-form-input" placeholder="Name *" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                      '" size="30" '.$aria_req.' required/></p>',
                    'email'     =>'<p class="comment-form-email">'.
                      '<input id="email" class="blog-form-input" placeholder="Email *" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                      '" size="30" '.$aria_req.' required/></p>',
                ),
                'comment_field'     =>'<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="Your comment" rows="6" required></textarea></p>',
                'logged_in_as'      =>'',
                'comment_notes_before'      =>'',
                'label_submit'               =>'Send',
                'title_reply'               =>'',
                'format'                    =>'html5',
				'class_form'				=> 'form-comment'
                
            );
            ?>
            <?php comment_form($arg); ?>