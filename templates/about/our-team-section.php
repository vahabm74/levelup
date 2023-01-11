<div class="container">
	<div class="row">
		<div class="col-12">
			<h2 class="title-section">
				<?php echo ot_get_option('about_team_title');?>
			</h2>
		</div>
	</div>
</div>
<div class="team">
	<div class="top">
		<div class="container">
			<div class="row">
				<?php
					$teams = ot_get_option('about_team_list');
					foreach($teams as $t):
						$name = $t['title'];
						$avatar = $t['about_team_list_avatar'];
						$role = $t['about_team_list_role'];
						$desc = $t['about_team_list_desc'];
						$instagram = $t['about_team_list_instagram'];
						$twitter = $t['about_team_list_twitter'];
						$facebook = $t['about_team_list_facebook'];
						$linkedin = $t['about_team_list_linkedin'];
						$tiktok = $t['about_team_list_tiktok'];
				?>
				<div class="col-lg-3 col-12">
					<div class="person">
						<div class="img-box">
							<img src="<?php echo $avatar;?>" alt="<?php echo $name;?>" title="<?php echo $name;?>" width="150" height="150">
						</div>
						<div class="info-box">
							<h3 class="name">
								<?php echo $name;?>
							</h3>
							<p class="role">
								<?php echo $role;?>
							</p>
							<p class="desc">
								<?php echo $desc;?>
							</p>
							<ul class="social">
								<?php if($instagram):?>
								<li>
									<a href="<?php echo $instagram;?>"><i class="icon-instagram"></i></a>
								</li>
								<?php endif;?>
								<?php if($twitter):?>
								<li>
									<a href="<?php echo $twitter;?>"><i class="icon-twitter"></i></a>
								</li>
								<?php endif;?>
								<?php if($facebook):?>
								<li>
									<a href="<?php echo $facebook;?>"><i class="icon-facebook"></i></a>
								</li>
								<?php endif;?>
								<?php if($linkedin):?>
								<li>
									<a href="<?php echo $linkedin;?>"><i class="icon-linkedin"></i></a>
								</li>
								<?php endif;?>
								<?php if($tiktok):?>
								<li>
									<a href="<?php echo $tiktok;?>"><i class="icon-tiktok"></i></a>
								</li>
								<?php endif;?>
							</ul>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<div class="middle">
		
	</div>
	<div class="bottom" style="display:none;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div class="person">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri().'/assets/images/about/person2.jpg';?>" alt="" title="" width="150" height="150">
						</div>
						<div class="info-box">
							<h3 class="name">
								Sarah Elizabet
							</h3>
							<p class="role">
								Video Editor
							</p>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
							</p>
							<ul class="social">
								<li>
									<a href="#!"><i class="icon-instagram"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-12">
					<div class="person">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri().'/assets/images/about/person1.jpg';?>" alt="" title="" width="150" height="150">
						</div>
						<div class="info-box">
							<h3 class="name">
								Kiana Karimi
							</h3>
							<p class="role">
								Teacher
							</p>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
							</p>
							<ul class="social">
								<li>
									<a href="#!"><i class="icon-instagram"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-12">
					<div class="person">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri().'/assets/images/about/person2.jpg';?>" alt="" title="" width="150" height="150">
						</div>
						<div class="info-box">
							<h3 class="name">
								Sarah Elizabet
							</h3>
							<p class="role">
								Video Editor
							</p>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
							</p>
							<ul class="social">
								<li>
									<a href="#!"><i class="icon-instagram"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-12">
					<div class="person">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri().'/assets/images/about/person1.jpg';?>" alt="" title="" width="150" height="150">
						</div>
						<div class="info-box">
							<h3 class="name">
								Kiana Karimi
							</h3>
							<p class="role">
								Teacher
							</p>
							<p class="desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
							</p>
							<ul class="social">
								<li>
									<a href="#!"><i class="icon-instagram"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#!"><i class="icon-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>