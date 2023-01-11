<?php if(ot_get_option('about_banner')):?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="banner">
				<img src="<?php echo ot_get_option('about_banner');?>" alt="<?php wp_title('');?>" title="<?php wp_title('');?>">
			</div>
		</div>
	</div>
</div>
<?php endif;?>