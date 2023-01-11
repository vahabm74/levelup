<!DOCTYPE html>
<html <?php language_attributes();?> dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">
    <link rel="canonical" href="<?php bloginfo('url')?>" />
    <title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <!--Start header index - This header used only for index page . Other pages use header-inside.php file to load header section -->
    <header class="home">
        <!--Container of all pages used by bootstrap-->
        <div class="container-fluid">
            <section class="content-header">
                <!--Logo -->
                <div class="logo">
                    <h1>
                        <?php bloginfo('name');?> | <?php bloginfo('description');?>
                        <a href="<?php bloginfo('url');?>">
                            <img src="<?php echo ot_get_option('logo_site');?>" alt="<?php bloginfo('name');?>" title="<?php bloginfo('name');?>" width="187" height="60">
                        </a>
                    </h1>
                </div>
                <!-- Show primary menu in this div. You can change the menu <-id(primary-menu)-> to show another menu here. -->
                <div class="menu">
                    <?php 
                        $args = array(
                            'theme_location'    => 'primary_menu',
                            'container'         => 'ul'
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
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
								<img src="<?php echo $l['language_item_flag'];?>" alt="<?php bloginfo('name');?>|<?php echo $l['title'];?>" title="<?php bloginfo('name');?>|<?php echo $l['title'];?>" width="24" height="24">
							</a>
						</li>
						<?php endforeach;?>
					</ul>
					<a href="#!" id="mobile">
						<img src="<?php echo get_template_directory_uri().'/assets/images/mobile-menu.png';?>" alt="" title="">
					</a>
                </div>
            </section>
        </div>
    </header>
    <!--End header index -->
