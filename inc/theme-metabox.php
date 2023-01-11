<?php
add_action( 'admin_init', 'custom_meta_boxes' );

function custom_meta_boxes() {
    $course_video = array(
        'id'        => 'course_video',
        'title'     => 'Video/Image',
        'desc'      => 'Just choose video or Image not both of them!',
        'pages'     => array( 'courses' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id'        => 'course_video_url',
                'label'     => 'Choose video course',
                'type'      =>'upload',
                'desc'      =>''
            ),
			array(
                'id'        => 'course_image_url',
                'label'     => 'Choose Image course',
                'type'      =>'upload',
                'desc'      =>''
            ),
        )
    );
    $course_features = array(
        'id'        => 'course_features',
        'title'     => ot_get_option('course_features_title'),
        'desc'      => '',
        'pages'     => array( 'courses' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id' => 'course_features_items',
                'type' => 'list-item',
                'label'=> 'Course included Items',
                'std' => '', 
                'settings'=>array(
                    array(
                        'id'    =>'course_features_items_value',
                        'type'  =>'text',
                        'label' =>'Item value' ,
                    ), 
                    array(
                        'id'    =>'course_features_items_icon',
                        'type'  =>'upload',
                        'label' =>'Item icon' ,
                    ), 
                )
            )  
        )
    );
	$course_comment = array(
        'id'        => 'course_comment',
        'title'     => ot_get_option('course_review_title'),
        'desc'      => '',
        'pages'     => array( 'courses' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id' => 'course_comment_items',
                'type' => 'list-item',
                'label'=> 'Add Review',
                'std' => '', 
                'settings'=>array(
                    array(
                        'id'    =>'course_comment_items_avatar',
                        'type'  =>'upload',
                        'label' =>'Avatar' ,
                    ), 
					array(
                        'id'    =>'course_comment_items_date',
                        'type'  =>'date-picker',
                        'label' =>'Date of review' ,
                    ), 
                    array(
                        'id'    =>'course_comment_items_text',
                        'type'  =>'textarea',
                        'label' =>'Review' ,
                    ), 
                )
            )
        )
    );
    $course_gallery = array(
        'id'        => 'course_gallery',
        'title'     => ot_get_option('course_gallery_title'),
        'desc'      => '',
        'pages'     => array( 'courses' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id' => 'course_gallery_items',
                'type' => 'list-item',
                'label'=> 'Add Images',
                'std' => '', 
                'settings'=>array(
                    array(
                        'id'    =>'course_gallery_items_image',
                        'type'  =>'upload',
                        'label' =>'Image' ,
                    ), 
                )
            )
        )
    );
    $event_info = array(
        'id'        => 'event_title',
        'title'     => 'Event info',
        'desc'      => '',
        'pages'     => array( 'event' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id' => 'event_title_background',
                'type' => 'upload',
                'label'=> 'Event Background',
                'std' => '', 
            ),
            array(
                'id' => 'event_title_date',
                'type' => 'date-time-picker',
                'label'=> 'Event Date',
                'std' => '', 
                'desc'  =>'If the field is empty, the Timer will not be displayed'
            ),
            array(
                'id'    => 'event_title_btn',
                'type'  => 'text',
                'label' => 'Event Book Now link',
                'std'   => '',
                'desc'  => 'If the field is empty, the button will not be displayed'
            ),
            array(
                'id' => 'event_title_color',
                'type' => 'colorpicker',
                'label'=> 'Title Event color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_date_number_color',
                'type' => 'colorpicker',
                'label'=> 'Number date color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_date_text_color',
                'type' => 'colorpicker',
                'label'=> 'Text date color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_btn_background_color',
                'type' => 'colorpicker',
                'label'=> 'Background Book Now button',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_btn_text_color',
                'type' => 'colorpicker',
                'label'=> 'Color Book Now button',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_btn_hover_color',
                'type' => 'colorpicker',
                'label'=> 'Backround Hover Book Now button',
                'std' => '', 
                'class' =>'color-list'
            ),
        )        
    );
    $event_museum = array(
        'id'        => 'event_museum',
        'title'     => ot_get_option('event_museum_title'),
        'desc'      => '',
        'pages'     => array( 'event' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id' => 'event_museum_items',
                'type' => 'list-item',
                'label'=>  ot_get_option('event_museum_title').' Items',
                'std' => '', 
                'settings'=>array(
                    array(
                        'id'    =>'event_museum_items_image',
                        'type'  =>'upload',
                        'label' =>'Image' ,
                    ), 
                    array(
                        'id'    =>'event_museum_items_date',
                        'type'  =>'date-picker',
                        'label' =>'Date' ,
                    ), 
                    array(
                        'id'    =>'event_museum_items_desc',
                        'type'  =>'textarea',
                        'label' =>'Description' ,
                    ), 
                )
            ),
        )
    );
    $event_features = array(
        'id'        => 'event_features',
        'title'     => 'Event Details',
        'desc'      => '',
        'pages'     => array( 'event' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id' => 'event_features_items',
                'type' => 'list-item',
                'label'=> 'Event included Items',
                'std' => '', 
                'settings'=>array(
                    array(
                        'id'    =>'event_features_items_value',
                        'type'  =>'text',
                        'label' =>'Item value' ,
                    ), 
                    array(
                        'id'    =>'event_features_items_icon',
                        'type'  =>'upload',
                        'label' =>'Item icon' ,
                    ), 
                )
            ),
            array(
                'id'        => 'event_video_url',
                'label'     => 'Choose video event',
                'type'      =>'upload',
                'desc'      =>'Just choose video or image not both of them!'
            ),
			array(
                'id'        => 'event_image_url',
                'label'     => 'Choose Image event',
                'type'      =>'upload',
                'desc'      =>''
            ),
            array(
                'id' => 'event_feature_title_color',
                'type' => 'colorpicker',
                'label'=> 'Item title color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_feature_value_color',
                'type' => 'colorpicker',
                'label'=> 'Item value color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_section_title_color',
                'type' => 'colorpicker',
                'label'=> 'Section title color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_section_text_color',
                'type' => 'colorpicker',
                'label'=> 'Section text color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_section_btn1_color',
                'type' => 'colorpicker',
                'label'=> 'Section button1 background',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_section_btn2_color',
                'type' => 'colorpicker',
                'label'=> 'Section button2 background',
                'std' => '', 
                'class' =>'color-list'
            ),
        )
    );
    $event_faq = array(
        'id'        => 'event_faq',
        'title'     => ot_get_option('event_faq_title'),
        'desc'      => '',
        'pages'     => array( 'event' ),
        'context'   => 'normal',
        'priority'  => 'low',
        'fields'      => array(
            array(
                'id' => 'event_faq_items',
                'type' => 'list-item',
                'label'=> 'Add question',
                'std' => '', 
                'settings'=>array(
                    array(
                        'id'    =>'event_faq_items_answer',
                        'type'  =>'textarea',
                        'label' =>'Answer' ,
                    )
                )
            ),
            array(
                'id' => 'event_faq_title_color',
                'type' => 'colorpicker',
                'label'=> 'Section title color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_faq_qtitle_color',
                'type' => 'colorpicker',
                'label'=> 'questions title color',
                'std' => '', 
                'class' =>'color-list'
            ),
            array(
                'id' => 'event_faq_answer_color',
                'type' => 'colorpicker',
                'label'=> 'Answers color',
                'std' => '', 
                'class' =>'color-list'
            ),
        )
    );
	$cafe_price = array(
		'id'        => 'cafe_price',
        'title'     => 'Price',
        'desc'      => '',
        'pages'     => array( 'cafe' ),
        'context'   => 'normal',
        'priority'  => 'high',
        'fields'      => array(
            array(
                'id' => 'cafe_item_price',
                'type' => 'text',
                'label'=> 'Item Price',
                'std' => '', 
                'class' =>''
            ),
        )
	);
    if ( function_exists( 'ot_register_meta_box' ) )
        ot_register_meta_box( $course_video );
        ot_register_meta_box( $course_features );
        ot_register_meta_box( $course_comment );
        ot_register_meta_box( $course_gallery );
        ot_register_meta_box( $event_info );
        ot_register_meta_box( $event_museum );
        ot_register_meta_box( $event_features );
        ot_register_meta_box( $event_faq );
		ot_register_meta_box( $cafe_price );
}