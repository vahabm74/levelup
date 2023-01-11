<?php

//Ajax Book Courses and Events function
add_action("wp_ajax_book_action","book_action");
add_action("wp_ajax_nopriv_book_action","book_action");
function book_action(){
	$data = $_POST['data'];
	if($_SERVER["REQUEST_METHOD"] == "POST" && $data['title'] && $data['name'] && $data['email'] && $data['phone'])	   {
		$message = "
			<table cellpadding='3' border='2' style='border-collapse: collapse;text-align:center;width:100%;'>
            <thead style='background: #e7e7e7;'>
			 	<tr>
					<th colspan='100%'>
						<img src='http://levelupdans.com/wp-content/uploads/2022/12/logo-event-new.png' style='max-width: 100%;height: auto;'>
					</th>
				</tr>
			</thead>
			<tbody>
                <tr>
                    <th scope='row'>Title</th>
					<th scope='row'>Name</th>
					<th scope='row'>Email</th>
					<th scope='row'>Phone</th>
				</tr>
				<tr>
					<td>".$data['title']."</td>
					<td>".$data['name']."</td>
					<td>".$data['email']."</td>
					<td>".$data['phone']."</td>
				</tr>
			</tbody>
			</table>
		";
		$subject_book = "New Book | ".$data['title'];
        $to = "order@levelupdans.com";
        $headers = array('Content-Type: text/html; charset=UTF-8'); 
        wp_mail( $to, $subject_book, $message, $headers );
	}?>
	<h3 class="thanks">
        Thank you for your trust
    </h3>
    <p class="thanks-t">
        Our sales will contact you as soon as possible
    </p>
<?php
	wp_die();
}

//Ajax Show order of category cafe menu
add_action("wp_ajax_order_cafe","order_cafe");
add_action("wp_ajax_nopriv_order_cafe","order_cafe");
function order_cafe(){
    $cat = $_POST['cat'];
	$arg = array(
		'post_type'	=> 'cafe',
		'tax_query' => array(
			array (
				'taxonomy' => 'cafe-cat',
				'field' => 'term_id',
				'terms' => $cat,
			)
		),
		'orderby'	=> 'date',
		'order'		=> 'ASC',
		'posts_per_page'	=> -1
	);
	$orders = new WP_Query($arg);
		if($orders->have_posts()):
			while($orders->have_posts()):
				$orders->the_post();
					$price = get_post_meta(get_the_ID(),'cafe_item_price',true);
?>
    <div class="col-lg-3 col-12">
    	<div class="order">
        	<div class="img-box">
            	<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
                <?php if(get_the_content() != ''):?>
                <div class="desc">
                	<?php the_content();?>
                </div>
                <?php endif;?>
           </div>
           <h4 class="title">
               <?php the_title();?>
           </h4>
           <div class="cta">
               <span class="price"><?php echo $price;?></span>
           </div>
       	</div>
	</div>
<?php
   			endwhile;
		endif;
	wp_reset_postdata();
	wp_die();
}

//Ajax Book Courses and Events function
add_action("wp_ajax_show_teacher_desc","show_teacher_desc");
add_action("wp_ajax_nopriv_show_teacher_desc","show_teacher_desc");
function show_teacher_desc(){
	$id = $_POST['id'];?>
	<div class="left">
		<?php if(get_user_meta($id,'role_i',true)):?>
		<p>
			<?php echo 	get_user_meta($id,'role_i',true);?>
		</p>
		<?php endif;?>
		<?php if(get_user_meta($id,'experience',true)):?>
		<p>
			<?php echo 	get_user_meta($id,'experience',true);?>
		</p>
		<?php endif;?>
		<?php if(get_user_meta($id,'date',true)):?>
		<p>
			<?php echo 	get_user_meta($id,'date',true);?>
		</p>
		<?php endif;?>
		<?php if(get_user_meta($id,'birth',true)):?>
		<p>
			<?php echo 	get_user_meta($id,'birth',true);?>
		</p>
		<?php endif;?>
	</div>
	<?php if(get_user_meta($id,'description',true)):?>
	<div class="desc">
		<?php echo get_user_meta($id,'description',true);?>	
	</div>
	<?php endif;?>
<?php 
	
	wp_die();
}