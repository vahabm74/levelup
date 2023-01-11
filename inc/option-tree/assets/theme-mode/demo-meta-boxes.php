<?php
add_action( 'admin_init', 'custom_meta_boxes' );

function custom_meta_boxes() {

  $service_info = array(
    'id'          => 'service',
    'title'       => __( 'اطلاعات خدمت', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
        array(
                'id' => 'title',
                'type' => 'text',
                'std' => '',
                'desc' => __('عنوان کنار تصاویر:', 'kayhanchap')
            ),
    )
  );
  
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $service_info );

}