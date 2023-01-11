<div id="order-menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-section">
                    <?php echo ot_get_option('cafe_menu_title');?>
                </h3>
                <ul class="category-menu">
					<?php
						$args = array(
							'post_type' => 'cafe',
							'taxonomy'	=> 'cafe-cat',
							'orderby' => 'ID',
							'order' => 'ASC',
						);
						$cats = get_categories($args);
						$switch = 13; 
						$class = 'active';
						foreach($cats as $cat):
					?>
                    <li class="<?php echo $class;?>" data-cat="<?php echo $cat->term_id;?>">
                        <?php echo $cat->name;?>
                    </li>
					<?php
						if ($cat->term_id == $switch) $class = 'normal';
					?>
					<?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" id="orders">
        <div class="row">
			<?php
				$arg = array(
					'post_type'	=> 'cafe',
					'tax_query' => array(
						array (
							'taxonomy' => 'cafe-cat',
							'field' => 'term_id',
							'terms' => 13,
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
			?>
        </div>
    </div>
</div>