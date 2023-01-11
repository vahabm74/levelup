<?php
// Register Courses Post Type
function courses_post_type() {

	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Courses', 'text_domain' ),
		'name_admin_bar'        => __( 'Courses', 'text_domain' ),
		'archives'              => __( 'Course Archives', 'text_domain' ),
		'attributes'            => __( 'Course Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Course:', 'text_domain' ),
		'all_items'             => __( 'All Courses', 'text_domain' ),
		'add_new_item'          => __( 'Add New Course', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Course', 'text_domain' ),
		'edit_item'             => __( 'Edit Course', 'text_domain' ),
		'update_item'           => __( 'Update Course', 'text_domain' ),
		'view_item'             => __( 'View Course', 'text_domain' ),
		'view_items'            => __( 'View Courses', 'text_domain' ),
		'search_items'          => __( 'Search Course', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Course', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Course', 'text_domain' ),
		'items_list'            => __( 'Courses list', 'text_domain' ),
		'items_list_navigation' => __( 'Courses list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Courses list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Course', 'text_domain' ),
		'description'           => __( 'Course Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments','author' ),
		'taxonomies'            => array( 'course_terms' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'courses', $args );

}
add_action( 'init', 'courses_post_type', 0 );

// Register Courses Taxonomy
function course_terms_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Terms', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Term', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Terms', 'text_domain' ),
		'all_items'                  => __( 'All Terms', 'text_domain' ),
		'parent_item'                => __( 'Parent Term', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Term:', 'text_domain' ),
		'new_item_name'              => __( 'New Term Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Term', 'text_domain' ),
		'edit_item'                  => __( 'Edit Term', 'text_domain' ),
		'update_item'                => __( 'Update Term', 'text_domain' ),
		'view_item'                  => __( 'View Term', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Terms with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Terms', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Terms', 'text_domain' ),
		'search_items'               => __( 'Search Terms', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Terms', 'text_domain' ),
		'items_list'                 => __( 'Terms list', 'text_domain' ),
		'items_list_navigation'      => __( 'Terms list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'course_terms', array( 'courses' ), $args );

}
add_action( 'init', 'course_terms_taxonomy', 0 );

// Register Event Post Type
function event_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Events', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Event:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Event', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'text_domain' ),
		'items_list'            => __( 'Events list', 'text_domain' ),
		'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Events list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'event', 'text_domain' ),
		'description'           => __( 'Event Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail','excerpt','author' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'event_post_type', 0 );


// Register Cafe Post Type
function cafe_post_type() {

	$labels = array(
		'name'                  => _x( 'Cafe', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cafe', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cafe', 'text_domain' ),
		'name_admin_bar'        => __( 'Cafe', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Item', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Cafe', 'text_domain' ),
		'description'           => __( 'Cafe Menu items', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'cafe-cat' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'menu_icon'             => 'dashicons-coffee',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'cafe', $args );

}
add_action( 'init', 'cafe_post_type', 0 );

// Register Cafe Taxonomy
function cafe_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Category', 'text_domain' ),
		'all_items'                  => __( 'All Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Category', 'text_domain' ),
		'update_item'                => __( 'Update Category', 'text_domain' ),
		'view_item'                  => __( 'View Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Categories', 'text_domain' ),
		'search_items'               => __( 'Search Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Categories', 'text_domain' ),
		'items_list'                 => __( 'Categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
	);
	register_taxonomy( 'cafe-cat', array( 'cafe' ), $args );

}
add_action( 'init', 'cafe_taxonomy', 0 );