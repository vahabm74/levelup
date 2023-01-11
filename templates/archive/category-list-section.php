<div class="category-list">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="title-section">
				    <?php if(is_post_type_archive('event')) :?>
				    All Events
				    <?php else:?>
					All Courses
					<?php endif;?>
				</h2>
			</div>
		</div>
		<div class="row">
		    <?php
		        if(have_posts()):
		            while(have_posts()):
		                the_post();
		    ?>
			<div class="col-lg-4 col-12">
				<div class="course">
					<a href="<?php the_permalink();?>"></a>
					<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title();?>">
					<div class="info">
						<div class="left">
							<h3 class="title">
								<?php the_title();?>
							</h3>
							<?php if(is_post_type_archive('courses')) :?>
							<p class="cat">
								<?php
									$terms = get_the_terms( get_the_ID(), 'course_terms' );
    								$terms = join(', ', wp_list_pluck( $terms , 'name') );
									echo $terms;
								?>
							<?php endif;?>
							</p>
						</div>
						<div class="right">
							<a href="<?php the_permalink();?>">
								<span>Book</span>
								<span>&#8594</span>
							</a>
						</div>
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