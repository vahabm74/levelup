<?php
/*
Template Name:Contact Us
*/
get_header('inside');
?>
<div id="contact-us">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if(ot_get_option('contact_banner')):?>
				<div class="main-banner">
					<img src="<?php echo ot_get_option('contact_banner');?>" alt="<?php wp_title();?>" title="<?php wp_title();?>">
				</div>
				<?php endif;?>
				<div class="main-contact">
					<h2 class="title-section">
						Contact Us
					</h2>
					<div class="info">
						<?php if(ot_get_option('contact_email')):?>
						<p>
							<span class="name">Email:</span>
							<span class="value"><?php echo ot_get_option('contact_email');?></span>
						</p>
						<?php endif;?>
						<?php if(ot_get_option('contact_phone')):?>
						<p>
							<span class="name">Tel:</span>
							<span class="value"><?php echo ot_get_option('contact_phone');?></span>
						</p>
						<?php endif;?>
						<?php if(ot_get_option('contact_address')):?>
						<p>
							<span class="name">Address:</span>
							<span class="value"><?php echo ot_get_option('contact_address');?></span>
						</p>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if(ot_get_option('contact_location')):?>
	<div class="map">
		<iframe src="<?php echo ot_get_option('contact_location');?>" width="1366" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php endif;?>
	<div class="container">
		<div class="row">
			<div class="col-lg-7 m-auto col-12">
				<div class="contact-form">
					<h3 class="title-section">
						Talk to us
					</h3>
					<form action="" method="post">
						<div class="left">
							<img src="<?php echo get_template_directory_uri().'/assets/images/left-contact.png';?>" alt="" title="">
						</div>
						<div class="right">
							<div class="top">
								<p class="form-item">
									<input type="text" id="nameContact" name="nameContact" required placeholder="Name">
								</p>
								<p class="form-item">
									<input type="text" id="phoneContact" name="phoneContact" required placeholder="Phone">
								</p>
							</div>
							<div class="bottom">
								<textarea placeholder="Your Message ..." name="textContact" id="textContact" rows="6"></textarea>
							</div>
						</div>
						<input type="submit" value="SEND" name="submit-contact" class="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 m-auto col-12">
				<h3 class="title-section-social">
					Follow Us
				</h3>
				<div class="social-contact">
					<ul>
						<?php
							$socials = ot_get_option('contact_social');
							foreach($socials as $social):
						?>
						<li>
							<a href="<?php echo $social['contact_social_url'];?>">
								<img src="<?php echo $social['contact_social_image'];?>" alt="<?php echo $social['title'];?>" title="<?php echo $social['title'];?>">
							</a>
						</li>
						<?php endforeach;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer('inside');?>