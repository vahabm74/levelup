<?php

/*
 - Main style and script file enqueue
 - You can add your custom file in levelup_style_script function
 */

@ini_set( 'upload_max_size' , '1024M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );
remove_role( 'contributor' );

function levelup_style_script(){
     
    //Remove global default style wordpress
    wp_dequeue_style( 'global-styles' );
    
    //Bootstrap style and script import
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap-grid.min.css',array(),'','all');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'',true );
    
    //swiper slider style and script import
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/assets/css/swiper.min.css',array(),'','all');
    wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/js/swiper.min.js',array('jquery'),'',true );
    
    //Main style on root directory
    wp_enqueue_style( 'style', get_stylesheet_uri(),array(),'1.0.0','all');
    
    //Custom style on /assets/css/main-style.css
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/main-style.css',array(),filemtime(get_template_directory().'/assets/css/main-style.css'),'all');
    
	//Responsive style on /assets/css/responsive.css
	 wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css',array(),filemtime(get_template_directory().'/assets/css/responsive.css'),'all');
	
    //Import font icon levelup
    wp_enqueue_style( 'levelup', get_template_directory_uri().'/assets/css/levelup.css',array(),'','all');
    
    //Custom js file on /assets/js/main.js
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js',array('jquery'),filemtime(get_template_directory().'/assets/js/main.js'),true );
    
    //All Ajax functions file on /assets/js/ajax.js
    wp_enqueue_script( 'ajax', get_template_directory_uri().'/assets/js/ajax.js',array('jquery'),filemtime(get_template_directory().'/assets/js/ajax.js'),true );
 }
 add_action('wp_enqueue_scripts','levelup_style_script');
 
/*
- Register all menus function
*/
 
if ( ! function_exists( 'levelup_register_nav_menu' ) ) {

    function levelup_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
		) );
	}
    add_action( 'after_setup_theme', 'levelup_register_nav_menu', 0 );
}


/*
- Support Theme 
*/
/** post thumbnail **/
add_theme_support( 'post-thumbnails' );

/** HTML5 support **/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


/*
- Change Email Info
*/
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Levelupdans';
}
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );
// Function to change email address
function wpb_sender_email( $original_email_address ) {
    return 'info@levelupdans.com';
}
add_filter( 'wp_mail_from', 'wpb_sender_email' );


/*
- Comment functions
*/
//comment callback
function levelup_comments_callback( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <div <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <div class="top">
            <div class="right">
                <span class="profile">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/course/person-avatar.png';?>"  class="img-fluid" alt="<?php comment_author();?>" title="<?php comment_author();?>">
                </span>
                <span class="name">
                   <?php comment_author();?>
                </span>
                <?php 
                    $rate =  get_comment_meta($comment->comment_ID,'comment_rating',true);
                    $rates = (int)$rate;    
                ?>
                <div class="points">
                    <?php
                        for($i = 0;$i < $rates;$i++):
                    ?>
                    <span class="star">&#9733;</span>
                    <?php endfor;?>
                </div>
            </div>
            <div class="left">
                <p>
                    <?php comment_date('d M y'); ?>
                    -
                    <?php comment_time('H:i');?>
                </p>
            </div>
        </div>
        <div class="bottom">
            <?php comment_text(); ?>
        </div>
    </div>
    <?php

}

add_filter( 'comment_form_default_fields', 'tu_comment_form_hide_cookies_consent' );
function tu_comment_form_hide_cookies_consent( $fields ) {
	unset($fields['url']);
	return $fields;
}
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    unset( $fields['cookies'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

add_action( 'set_comment_cookies', function( $comment, $user ) {
    setcookie( 'ta_comment_wait_approval', '1', 0, '/' );
}, 10, 2 );

add_action( 'init', function() {
    if( isset( $_COOKIE['ta_comment_wait_approval'] ) && $_COOKIE['ta_comment_wait_approval'] === '1' ) {
        setcookie( 'ta_comment_wait_approval', '0', 0, '/' );
        add_action( 'comment_form_before', function() {
            echo "<p id='wait_approval' style='color:#fff;'><strong>Your comment has been sent successfully.</strong></p>";
        });
    }
});

add_filter( 'comment_post_redirect', function( $location, $comment ) {
    $location = get_permalink( $comment->comment_post_ID ) . '#wait_approval';
    return $location;
}, 10, 2 );