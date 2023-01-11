<header id="event-header">
	<div class="logo">
		<h1>
			<a href="<?php bloginfo('url');?>">
				<?php bloginfo('name');?>
				<img src="http://levelupdans.com/wp-content/uploads/2022/12/logo-event-new.png" alt="<?php bloginfo('name');?>" alt="<?php bloginfo('name');?>">
			</a>
		</h1>
	</div>
	<div class="menu">
    	<?php 
        	$args = array(
            	'theme_location'    => 'primary_menu',
                'container'         => 'ul'
            );
            wp_nav_menu($args);
        ?>
    </div>
	<!-- Show CTA btns on header in this div.-->
    <div class="header-btns">
       <?php
                        if(ot_get_option('account_link')):
                    ?>
                    <a href="<?php echo ot_get_option('account_link');?>">
                        <i class="icon-user-circle-o"></i>
                    </a>
                    <?php endif;?>
                    <a href="#!" class="lang-select">
                        <i class="icon-globe"></i>
                    </a>
					<ul class="lang">
						<?php 
							$langs = ot_get_option('language_item');
							foreach($langs as $l):
						?>
						<li>
							<a href="<?php echo $l['language_item_url'];?>">
								<img src="<?php echo $l['language_item_flag'];?>" alt="<?php bloginfo('name');?>|<?php echo $l['title'];?>" title="<?php bloginfo('name');?>|<?php echo $l['title'];?>">
							</a>
						</li>
						<?php endforeach;?>
					</ul>
					<a href="#!" id="mobile">
						<img src="<?php echo get_template_directory_uri().'/assets/images/mobile-menu.png';?>" alt="" title="">
					</a>
                </div>
</header>