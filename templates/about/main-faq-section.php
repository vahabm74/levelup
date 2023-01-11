<div class="container" style="margin-top:-200px;">
	<div class="row">
		<div class="col-12">
			<h2 class="title-section">
				<?php echo ot_get_option('about_faq_title');?>
			</h2>
		</div>
	</div>
</div>
<div class="faq">
	<div class="container">
		<div class="row">
			<?php
				$faq = ot_get_option('about_faq_list');
				foreach($faq as $q):
					$title = $q['title'];
					$answer = $q['about_faq_list_answer'];
			?>
			<div class="col-lg-8 col-12 m-auto">
				<div class="q">
					<h3 class="q-title">
						<span class="title"><?php echo $title;?></span>
						<span class="icon"></span>
					</h3>
					<div class="q-content">
						<?php echo $answer;?>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>