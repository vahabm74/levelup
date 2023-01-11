<?php

//Rate comment custom field
add_action( 'add_meta_boxes_comment', 'rate_comment_meta_box' );
function rate_comment_meta_box( $comment ) { // WP_Comment object

	add_meta_box( 
		'rate_comment', 
		'Rate', 
		'rate_comment_meta_box_cb', 
		'comment', // instead of a post type parameter
		'normal'
	);
	
}

function rate_comment_meta_box_cb($comment) {
	$comment_rating = get_comment_meta( $comment->comment_ID, 'comment_rating', true );

	wp_nonce_field( 'rate_comment_update', 'comment_nonce' );
	?>
		<table class="form-table">
			<tr>
				<th><label for="comment_rating">Rating</label></th>
				<td>
					<select id="comment_rating" name="comment_rating">
						<option value="">Please choose…</option>
						<?php
							for( $i = 1; $i <=5; $i++ ) {
								echo "<option value=\"$i\"" . selected( $i, $comment_rating, true ) . ">$i</option>";
							}
						?>
					</select>
				</td>
			</tr>
		</table>
	<?php
}

add_action( 'edit_comment', 'rate_save_comment' );
function rate_save_comment( $comment_id ) {

	if( ! isset( $_POST[ 'comment_nonce' ] ) || ! wp_verify_nonce( $_POST[ 'comment_nonce' ], 'rate_comment_update' ) ) {
		return;
	}

	update_comment_meta( 
		$comment_id, 
		'comment_rating', 
		absint( $_POST[ 'comment_rating' ] ) 
	);

}


//Input hidden to get and save rate in comment form
function add_review_rate_field_on_comment_form() {
        echo '<input type="hidden" name="comment_rate" id="comment_rate"/>';
    }
add_action( 'comment_form_logged_in_after', 'add_review_rate_field_on_comment_form' );
add_action( 'comment_form_after_fields', 'add_review_rate_field_on_comment_form' );


add_action( 'comment_post', 'save_comment_review_rate_field' );
    function save_comment_review_rate_field( $comment_id ){
        if( isset( $_POST['comment_rate'] ) )
          update_comment_meta( $comment_id, 'comment_rating', esc_attr( $_POST['comment_rate'] ) );
    }

    function print_review_rate( $id ) {
        $val = get_comment_meta( $id, "comment_rating", true );
        $title = $val ? '<strong class="review-rate">' . $val . '</strong>' : '';
        return $title;
    }


//Add instractor role in users
add_role('instractor', __(
   'Instractor'),
   array(
       'read'            => true, // Allows a user to read
       'create_posts'      => true, // Allows user to create new posts
       'edit_posts'        => true, // Allows user to edit their own posts
       'edit_others_posts' => true, // Allows user to edit others posts too
       'publish_posts' => true, // Allows the user to publish posts
       'manage_categories' => true, // Allows user to manage post categories
       )
);

//Add custom field to Instractor user
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <table class="form-table">
	<tr>
        <th><label for="role_i"><?php _e("Role"); ?></label></th>
        <td>
            <input type="text" name="role_i" id="role_i" value="<?php echo esc_attr( get_the_author_meta( 'role_i', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Role."); ?></span>
        </td>
    </tr>
	<tr>
        <th><label for="experience"><?php _e("Work experience (time)"); ?></label></th>
        <td>
            <input type="text" name="experience" id="experience" value="<?php echo esc_attr( get_the_author_meta( 'experience', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Work experience - time."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="birth"><?php _e("Place of birth"); ?></label></th>
        <td>
            <input type="text" name="birth" id="birth" value="<?php echo esc_attr( get_the_author_meta( 'birth', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Place of birth."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="date"><?php _e("Date of birth"); ?></label></th>
        <td>
            <input type="date" name="date" id="date" value="<?php echo esc_attr( get_the_author_meta( 'date', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Date of birth."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="rate"><?php _e("Rate"); ?></label></th>
        <td>
            <input type="number" min="0" max="5" step="0.1" name="rate" id="rate" value="<?php echo esc_attr( get_the_author_meta( 'rate', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Rate."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="linkedin"><?php _e("Linkedin url"); ?></label></th>
        <td>
            <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Linkedin url."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="facebook"><?php _e("Facebook url"); ?></label></th>
        <td>
            <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Facebook url."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="twitter"><?php _e("Twitter url"); ?></label></th>
        <td>
            <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Twitter url."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="instagram"><?php _e("Instagram url"); ?></label></th>
        <td>
            <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Instagram url."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="youtube"><?php _e("Youtube url"); ?></label></th>
        <td>
            <input type="text" name="youtube" id="youtube" value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter Youtube url."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="tiktok"><?php _e("TikTok url"); ?></label></th>
        <td>
            <input type="text" name="tiktok" id="tiktok" value="<?php echo esc_attr( get_the_author_meta( 'tiktok', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter TikTok url."); ?></span>
        </td>
    </tr>
    </table>
    </div>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
        return;
    }
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
	update_user_meta( $user_id, 'role_i', $_POST['role_i'] );
	update_user_meta( $user_id, 'experience', $_POST['experience'] );
    update_user_meta( $user_id, 'birth', $_POST['birth'] );
    update_user_meta( $user_id, 'date', $_POST['date'] );
    update_user_meta( $user_id, 'rate', $_POST['rate'] );
    update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
    update_user_meta( $user_id, 'youtube', $_POST['youtube'] );
    update_user_meta( $user_id, 'tiktok', $_POST['tiktok'] );
}


add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'cafe'; // change to your post type
	$taxonomy  = 'cafe-cat'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'cafe'; // change to your post type
	$taxonomy  = 'cafe-cat'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}