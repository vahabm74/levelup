<?php

add_action( 'admin_init', 'custom_theme_options', 1 );

function custom_theme_options() {
    $saved_settings = get_option( 'option_tree_settings', array() );
    
    $custom_settings = array(
        'contextual_help' => array(
            'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
        ),
        'sections'        => array(
            array(
                'id'          => 'general',
                'title'       => 'General Settings'
            ),
            array(
                'id'          => 'language',
                'title'       => 'language Settings'
            ),
            array(
                'id'          => 'index',
                'title'       => 'Index Settings'
            ),
			array(
                'id'          => 'course',
                'title'       => 'Courses Settings'
            ),
            array(
                'id'          => 'course_archive',
                'title'       => 'Course Archive'
            ),
            array(
                'id'          => 'event',
                'title'       => 'Events Settings'
            ),
            array(
                'id'          => 'event_archive',
                'title'       => 'Event Archive'
            ),
            array(
                'id'          => 'cafe_menu',
                'title'       => 'Cafe'
            ),
			array(
                'id'          => 'contact_us',
                'title'       => 'Contact Settings'
            ),
			array(
                'id'          => 'about_us',
                'title'       => 'About Settings'
            ),
        ),
        'settings'        => array(
// General
                array(
                    'id'          => 'logo_site',
                    'label'       => 'Logo',
                    'desc'        => 'Logo on header inside pages',
                    'std'         => 'https://levelupdans.com/wp-content/themes/levelup/assets/images/logo.png',
                    'type'        => 'upload',
                    'section'     => 'general'
                ),
                array(
                    'id'          => 'account_link',
                    'label'       => 'Account link',
                    'desc'        => 'If is empty account link icon on header does not show.',
                    'std'         => '',
                    'type'        => 'text',
                    'section'     => 'general'
                ),
                array(
                    'id'          => 'general_textblock',
                    'label'       => __( 'Footer Settings', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'textblock-titled',
                    'section'     => 'general',
                    'rows'        => '',
                    'post_type'   => '',
                    'taxonomy'    => '',
                    'min_max_step'=> '',
                    'class'       => 'title_step',
                    'condition'   => '',
                    'operator'    => 'and'
                ),
                array(
                    'id'          => 'logo_footer',
                    'label'       => 'Logo on footer section',
                    'desc'        => '',
                    'std'         => 'https://levelupdans.com/wp-content/themes/levelup/assets/images/logo.png',
                    'type'        => 'upload',
                    'section'     => 'general'
                ),
                array(
                    'id'          => 'copyright_footer',
                    'label'       => 'Copyright footer text',
                    'desc'        => '',
                    'std'         => 'Copyright © 2022 Level Up Dans , All rights reserved.',
                    'type'        => 'text',
                    'section'     => 'general'
                ),
//Language
                array(
					'id'          => 'general_textblock_lang',
				    'label'       => __( 'All Languages', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'language',
					'class'       => 'title_step',
					'operator'    => 'and'
				),
                array(
                    'id'          => 'language_item',
                    'label'       => __( 'Languages', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'list-item',
                    'section'     => 'language',
                    'settings'    => array( 
                        array(
                            'id'          => 'language_item_url',
                            'label'       => __( 'Url', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
                        array(
                            'id'          => 'language_item_flag',
                            'label'       => __( 'Flag', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'upload',
                        ),
                    )
                ),
                
// Index
                array(
                    'id'          => 'title_index',
                    'label'       => 'Title index',
                    'desc'        => '',
                    'std'         => "Let's join us",
                    'type'        => 'text',
                    'section'     => 'index'
                ),
                array(
                    'id'          => 'subtitle_index',
                    'label'       => 'Subtitle index',
                    'desc'        => '',
                    'std'         => 'Get the best dance lessons anywhere , anytime',
                    'type'        => 'text',
                    'section'     => 'index'
                ),
                array(
                    'id'          => 'cta_textblock',
                    'label'       => __( 'Call To Action btns Settings', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'textblock-titled',
                    'section'     => 'index',
                    'rows'        => '',
                    'post_type'   => '',
                    'taxonomy'    => '',
                    'min_max_step'=> '',
                    'class'       => 'title_step',
                    'condition'   => '',
                    'operator'    => 'and'
                ),
                array(
                    'id'          => 'btn_1_index_title',
                    'label'       => 'Button 1 title',
                    'desc'        => '',
                    'std'         => 'Book Now',
                    'type'        => 'text',
                    'section'     => 'index'
                ),
                array(
                    'id'          => 'btn_1_index_link',
                    'label'       => 'Button 1 link',
                    'desc'        => '',
                    'std'         => '#!',
                    'type'        => 'text',
                    'section'     => 'index'
                ),
                array(
                    'id'          => 'btn_2_index_title',
                    'label'       => 'Button 2 title',
                    'desc'        => '',
                    'std'         => 'Our Mission',
                    'type'        => 'text',
                    'section'     => 'index'
                ),
                array(
                    'id'          => 'btn_2_index_link',
                    'label'       => 'Button 2 link',
                    'desc'        => '',
                    'std'         => '#!',
                    'type'        => 'text',
                    'section'     => 'index'
                ),
                array(
                    'id'          => 'slider_index_textblock',
                    'label'       => __( 'Slider Index Settings', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'textblock-titled',
                    'section'     => 'index',
                    'rows'        => '',
                    'post_type'   => '',
                    'taxonomy'    => '',
                    'min_max_step'=> '',
                    'class'       => 'title_step',
                    'condition'   => '',
                    'operator'    => 'and'
                ),
                array(
                    'id'          => 'slider_index_orderby',
                    'label'       => __( 'Select Course orderby', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'select',
                    'section'     => 'index',
                    'rows'        => '',
                    'taxonomy'    => '',
                    'min_max_step'=> '',
                    'class'       => '',
                    'condition'   => '',
                    'operator'    => 'and',
                    'choices'     => array( 
                            array(
                                'value'       => 'date',
                                'label'       => __( 'Date', 'theme-text-domain' ),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'name',
                                'label'       => __( 'Name', 'theme-text-domain' ),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'rand',
                                'label'       => __( 'Random', 'theme-text-domain' ),
                                'src'         => ''
                            ),
                            array(
                                'value'       => 'modified',
                                'label'       => __( 'Modified', 'theme-text-domain' ),
                                'src'         => ''
                            ),
                        )
                    ),
                array(
                        'id'          => 'slider_index_count',
                        'label'       => __( 'Select Course Count', 'theme-text-domain' ),
                        'desc'        => __( 'To show all Courses set on  -1', 'theme-text-domain' ),
                        'std'         => '',
                        'type'        => 'numeric-slider',
                        'section'     => 'index',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '-1,101,6',
                        'class'       => '',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                array(
                        'id'          => 'video_textblock',
                        'label'       => __( 'Video background index', 'theme-text-domain' ),
                        'desc'        => '',
                        'std'         => '',
                        'type'        => 'textblock-titled',
                        'section'     => 'index',
                        'rows'        => '',
                        'post_type'   => '',
                        'taxonomy'    => '',
                        'min_max_step'=> '',
                        'class'       => 'title_step',
                        'condition'   => '',
                        'operator'    => 'and'
                    ),
                array(
                        'id'          => 'video_index',
                        'label'       => 'Video File Index page',
                        'desc'        => '',
                        'std'         => 'https://levelupdans.com/wp-content/themes/levelup/assets/images/bg-video.mp4',
                        'type'        => 'upload',
                        'section'     => 'index'
                    ),
//Courses
				array(
						'id'          => 'general_textblock_course',
						'label'       => __( 'Course Features', 'theme-text-domain' ),
						'type'        => 'textblock-titled',
						'section'     => 'course',
						'class'       => 'title_step',
						'condition'   => '',
						'operator'    => 'and'
					),
				array(
						'id'          => 'course_features_show',
						'label'       => 'Course Features Show',
						'desc'        => '',
						'std'         => 'on',
						'type'        => 'on-off',
						'section'     => 'course'
					),
				array(
						'id'          => 'course_features_title',
						'label'       => 'Course Features Title',
						'desc'        => 'The title of this section changes both on the courses page and in the course editing section. Default : Course Features',
						'std'         => 'Course Features',
						'type'        => 'text',
						'section'     => 'course'
					),
				array(
						'id'          => 'general_textblock_course2',
						'label'       => __( 'Teacher Information', 'theme-text-domain' ),
						'type'        => 'textblock-titled',
						'section'     => 'course',
						'class'       => 'title_step',
						'operator'    => 'and'
					),
				array(
						'id'          => 'course_teacher_show',
						'label'       => 'Teacher Information Show',
						'desc'        => '',
						'std'         => 'on',
						'type'        => 'on-off',
						'section'     => 'course'
					),
				array(
						'id'          => 'course_teacher_title',
						'label'       => 'Teacher Information Title',
						'desc'        => 'The title of this section changes both on the courses page and in the course editing section. Default : Teacher Information',
						'std'         => 'Teacher Information',
						'type'        => 'text',
						'section'     => 'course'
					),
				array(
                        'id'          => 'course_teacher_background',
                        'label'       => 'Teacher Information Background',
                        'desc'        => '',
                        'std'         => 'https://levelupdans.com/wp-content/themes/levelup/assets/images/course/teacher-top.webp',
                        'type'        => 'upload',
                        'section'     => 'course'
                    ),
				array(
						'id'          => 'general_textblock_course3',
						'label'       => __( 'Reviews Slider', 'theme-text-domain' ),
						'type'        => 'textblock-titled',
						'section'     => 'course',
						'class'       => 'title_step',
						'operator'    => 'and'
					),
				array(
						'id'          => 'course_review_show',
						'label'       => 'Review Slider Show',
						'desc'        => '',
						'std'         => 'on',
						'type'        => 'on-off',
						'section'     => 'course'
					),
				array(
						'id'          => 'course_review_title',
						'label'       => 'Course Reviews Title',
						'desc'        => "The title of this section changes both on the courses page and in the course editing section. Default : Comment's Students",
						'std'         => "Comment's Students",
						'type'        => 'text',
						'section'     => 'course'
					),
				array(
					'id'          => 'general_textblock_course4',
				    'label'       => __( 'Gallery Slider', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'course',
					'class'       => 'title_step',
					'operator'    => 'and'
				),
				array(
						'id'          => 'course_gallery_show',
						'label'       => 'Gallery Slider Show',
						'desc'        => '',
						'std'         => 'on',
						'type'        => 'on-off',
						'section'     => 'course'
					),
				array(
					'id'          => 'course_gallery_title',
					'label'       => 'Course Gallery Title',
					'desc'        => "The title of this section changes both on the courses page and in the course editing section. Default : Gallery",
					'std'         => "Gallery",
					'type'        => 'text',
					'section'     => 'course'
				),
//Courses Archive
                array(
				    'id'          => 'course_archive_slider_show',
					'label'       => 'Course Archive Slider Show',
					'desc'        => '',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'course_archive'
				),
                array(
                    'id'          => 'course_archive_slider',
                    'label'       => __( 'Archive Slider', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'list-item',
                    'section'     => 'course_archive',
                    'settings'    => array( 
                        array(
                            'id'          => 'course_archive_slider_image',
                            'label'       => __( 'Image', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'upload',
                        ),
                        array(
                            'id'          => 'course_archive_slider_link',
                            'label'       => __( 'Link', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
                    )
                ),
                array(
					'id'          => 'general_textblock_archive_course',
				    'label'       => __( 'Special Offer', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'course_archive',
					'class'       => 'title_step',
					'operator'    => 'and'
				),
				array(
				    'id'          => 'course_special_offer_show',
					'label'       => 'Special Offer Show',
					'desc'        => '',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'course_archive'
				),
				array(
					'id'          => 'course_special_offer_title',
					'label'       => 'Special Offer Title',
					'desc'        => '',
					'std'         => 'Special Offer',
					'type'        => 'text',
					'section'     => 'course_archive'
				),
				array(
                    'id'          => 'course_special_post_select',
                    'label'       => __( 'Select Course', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'post-select',
                    'section'     => 'course_archive',
                    'rows'        => '',
                    'post_type'   => array('courses'),
                    'operator'    => 'and'
                ),
                array(
                    'id'          => 'course_special_date',
                    'label'       => __( 'Select Date', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'date-time-picker',
                    'section'     => 'course_archive',
                    'operator'    => 'and'
                ),
//Events
                array(
					'id'          => 'general_textblock_event',
					'label'       => __( 'Event Title', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'event',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
				    'id'          => 'event_title_show',
					'label'       => 'Event Title Show',
					'desc'        => 'Title and date event',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'event'
				),
				array(
					'id'          => 'general_textblock_event20',
					'label'       => __( 'Event Museum', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'event',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
				    'id'          => 'event_museum_show',
					'label'       => 'Event Museum Show',
					'desc'        => '',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'event'
				),
				array(
					'id'          => 'event_museum_title',
					'label'       => 'Event Museum Title',
					'desc'        => 'The title of this section changes both on the events page and in the event editing section. Default : Museum',
					'std'         => 'Museum',
					'type'        => 'text',
					'section'     => 'event'
				),
				array(
					'id'          => 'general_textblock_event1',
					'label'       => __( 'Event Details', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'event',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
				    'id'          => 'event_details_show',
					'label'       => 'Event Details Show',
					'desc'        => 'Details (example : price and etc) and video and description of event',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'event'
				),
				array(
					'id'          => 'general_textblock_event2',
					'label'       => __( 'Event Teacher', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'event',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
				    'id'          => 'event_teacher_show',
					'label'       => 'Event Teacher Show',
					'desc'        => '',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'event'
				),
				array(
					'id'          => 'event_teacher_title',
					'label'       => 'Event Instractors Title',
					'desc'        => 'The title of this section changes both on the events page and in the event editing section. Default : Instracturs',
					'std'         => 'Instructors',
					'type'        => 'text',
					'section'     => 'event'
				),
				array(
					'id'          => 'general_textblock_event3',
					'label'       => __( 'Event FAQ', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'event',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
				    'id'          => 'event_faq_show',
					'label'       => 'Event FAQ Show',
					'desc'        => '',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'event'
				),
				array(
					'id'          => 'event_faq_title',
					'label'       => 'Event FAQ Title',
					'desc'        => 'The title of this section changes both on the events page and in the event editing section. Default : FAQ',
					'std'         => 'FAQ',
					'type'        => 'text',
					'section'     => 'event'
				),
//Event Archive
                array(
				    'id'          => 'event_archive_slider_show',
					'label'       => 'Event Archive Slider Show',
					'desc'        => '',
					'std'         => 'on',
					'type'        => 'on-off',
					'section'     => 'event_archive'
				),
                array(
                    'id'          => 'event_archive_slider',
                    'label'       => __( 'Archive Slider', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'list-item',
                    'section'     => 'event_archive',
                    'settings'    => array( 
                        array(
                            'id'          => 'event_archive_slider_image',
                            'label'       => __( 'Image', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'upload',
                        ),
                        array(
                            'id'          => 'event_archive_slider_link',
                            'label'       => __( 'Link', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
                    )
                ),
//Cafe Menu
                array(
					'id'          => 'general_textblock_cafe1',
					'label'       => __( 'Cafe page settings', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'cafe_menu',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
					'id'          => 'cafe_title',
					'label'       => 'Cafe Title',
					'desc'        => '',
					'std'         => 'Enjoy your meal',
					'type'        => 'text',
					'section'     => 'cafe_menu'
				),
				array(
					'id'          => 'cafe_slogan',
					'label'       => 'Cafe Slogan',
					'desc'        => '',
					'std'         => 'An advertising slogan',
					'type'        => 'text',
					'section'     => 'cafe_menu'
				),
				array(
					'id'          => 'cafe_bg',
					'label'       => 'Cafe Background Image',
					'desc'        => '',
					'std'         => 'https://levelupdans.com/wp-content/uploads/2022/12/coffeebg.jpg',
					'type'        => 'upload',
					'section'     => 'cafe_menu'
				),
				array(
					'id'          => 'cafe_menu_title',
					'label'       => 'Cafe Menu Title',
					'desc'        => '',
					'std'         => 'Our Menu',
					'type'        => 'text',
					'section'     => 'cafe_menu'
				),
//contact us 
				array(
					'id'          => 'contact_banner',
					'label'       => 'Banner',
					'desc'        => '',
					'std'         => 'https://levelupdans.com/wp-content/themes/levelup/assets/images/contact-banner.jpg',
					'type'        => 'upload',
					'section'     => 'contact_us'
				),
				array(
					'id'          => 'general_textblock_contact1',
					'label'       => __( 'Communications', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'contact_us',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
					'id'          => 'contact_email',
					'label'       => 'Email',
					'desc'        => '',
					'std'         => 'info@levelupdans.com',
					'type'        => 'text',
					'section'     => 'contact_us'
				),
				array(
					'id'          => 'contact_phone',
					'label'       => 'Phone',
					'desc'        => '',
					'std'         => '+12-2548878 | +12-2548888',
					'type'        => 'text',
					'section'     => 'contact_us'
				),
				array(
					'id'          => 'contact_address',
					'label'       => 'Address',
					'desc'        => '',
					'std'         => 'Turkey - Istanbul - No27',
					'type'        => 'text',
					'section'     => 'contact_us'
				),
				array(
					'id'          => 'general_textblock_contact2',
					'label'       => __( 'Location', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'contact_us',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
					'id'          => 'contact_location',
					'label'       => 'Map url',
					'desc'        => '',
					'std'         => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28622.357092665803!2d28.972199045239933!3d41.05686645433652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2sTurkey!5e0!3m2!1sen!2s!4v1670088110867!5m2!1sen!2s',
					'type'        => 'text',
					'section'     => 'contact_us'
				),
				array(
					'id'          => 'general_textblock_contact3',
					'label'       => __( 'Socials', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'contact_us',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
                    'id'          => 'contact_social',
                    'label'       => __( 'Social pages', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'list-item',
                    'section'     => 'contact_us',
                    'settings'    => array( 
                        array(
                            'id'          => 'contact_social_image',
                            'label'       => __( 'Image', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'upload',
                        ),
                        array(
                            'id'          => 'contact_social_url',
                            'label'       => __( 'Url', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
                    )
                ),
//About us
				array(
					'id'          => 'about_banner',
					'label'       => 'Banner',
					'desc'        => '',
					'std'         => 'https://levelupdans.com/wp-content/themes/levelup/assets/images/about/about-us.jpg',
					'type'        => 'upload',
					'section'     => 'about_us'
				),
				array(
					'id'          => 'general_textblock_about1',
					'label'       => __( 'About us', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'about_us',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
					'id'          => 'about_content',
					'label'       => 'Content',
					'desc'        => '',
					'std'         => '',
					'rows'		  => '15',
					'type'        => 'textarea',
					'section'     => 'about_us'
				),
				array(
					'id'          => 'general_textblock_about2',
					'label'       => __( 'Achievements', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'about_us',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
					'id'          => 'about_achive_title',
					'label'       => 'Section title',
					'desc'        => '',
					'std'         => 'Achievements',
					'type'        => 'text',
					'section'     => 'about_us'
				),
				array(
					'id'          => 'about_achive_image',
					'label'       => 'Section Image',
					'desc'        => '',
					'std'         => 'https://levelupdans.com/wp-content/themes/levelup/assets/images/about/ach.jpg',
					'type'        => 'upload',
					'section'     => 'about_us'
				),
				array(
                    'id'          => 'about_achive_list',
                    'label'       => __( 'Achievement Items', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'list-item',
                    'section'     => 'about_us',
                    'settings'    => array( 
                        array(
                            'id'          => 'about_achive_list_date',
                            'label'       => __( 'Date', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'date-picker',
                        ),
                    )
                ),
				array(
					'id'          => 'general_textblock_about3',
					'label'       => __( 'Our team', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'about_us',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
					'id'          => 'about_team_title',
					'label'       => 'Section title',
					'desc'        => '',
					'std'         => 'Our team',
					'type'        => 'text',
					'section'     => 'about_us'
				),
				array(
                    'id'          => 'about_team_list',
                    'label'       => __( 'Team', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'list-item',
                    'section'     => 'about_us',
                    'settings'    => array( 
                        array(
                            'id'          => 'about_team_list_avatar',
                            'label'       => __( 'Avatar', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'upload',
                        ),
						array(
                            'id'          => 'about_team_list_role',
                            'label'       => __( 'Role', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
						array(
                            'id'          => 'about_team_list_desc',
                            'label'       => __( 'Description', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'textarea-simple',
                        ),
						array(
                            'id'          => 'about_team_list_instagram',
                            'label'       => __( 'Instagram url', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
						array(
                            'id'          => 'about_team_list_twitter',
                            'label'       => __( 'Twitter url', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
						array(
                            'id'          => 'about_team_list_facebook',
                            'label'       => __( 'Facebook url', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
						array(
                            'id'          => 'about_team_list_linkedin',
                            'label'       => __( 'Linkedin url', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
						array(
                            'id'          => 'about_team_list_tiktok',
                            'label'       => __( 'TikTok url', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'text',
                        ),
                    )
                ),
				array(
					'id'          => 'general_textblock_about4',
					'label'       => __( 'FAQ', 'theme-text-domain' ),
					'type'        => 'textblock-titled',
					'section'     => 'about_us',
					'class'       => 'title_step',
					'condition'   => '',
				    'operator'    => 'and'
				),
				array(
					'id'          => 'about_faq_title',
					'label'       => 'Section title',
					'desc'        => '',
					'std'         => 'FAQ',
					'type'        => 'text',
					'section'     => 'about_us'
				),
				array(
                    'id'          => 'about_faq_list',
                    'label'       => __( 'Faq Items', 'theme-text-domain' ),
                    'desc'        => '',
                    'std'         => '',
                    'type'        => 'list-item',
                    'section'     => 'about_us',
                    'settings'    => array( 
                        array(
                            'id'          => 'about_faq_list_answer',
                            'label'       => __( 'Answer', 'theme-text-domain' ),
                            'desc'        => '',
                            'std'         => '',
                            'type'        => 'textarea-simple',
                        ),
                    )
                ),
            ),
            
    );
    
    $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
    /* settings are not the same update the DB */
    if ( $saved_settings !== $custom_settings ) {
        update_option( 'option_tree_settings', $custom_settings );
    }
    global $ot_has_custom_theme_options;
    $ot_has_custom_theme_options = true;
}