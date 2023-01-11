<div class="container">
	<div class="row">
		<div class="col-12">
			<h2 class="title-section">
				<?php echo ot_get_option('about_achive_title');?>
			</h2>
		</div>
	</div>
</div>
<div class="content-ach">
	<div class="left">
		<img src="<?php echo ot_get_option('about_achive_image');?>" alt="<?php echo ot_get_option('about_achive_title');?>" title="<?php echo ot_get_option('about_achive_title');?>">
	</div>
	<div class="right">
		<?php
			$achs = ot_get_option('about_achive_list');
			foreach($achs as $ach):
		?>
		<p class="item">
			<span class="icon">	&#10004;</span>
			<span class="txt"><?php echo $ach['title'];?></span>
			<span class="date"><?php echo $ach['about_achive_list_date'];?></span>
		</p>
		<?php endforeach;?>
	</div>
</div>