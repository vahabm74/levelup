<section class="booking">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<h3 class="title-section">Book Now</h3>
            </div>
        </div>
    </div>
	<div class="book-now">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="book-form">
						<div class="left">
							<img src="<?php echo get_template_directory_uri().'/assets/images/course/mail.png';?>" alt="" title="">
						</div>
						<div class="right">
							<form action="#!" method="post" id="course_book_form" data-name="<?php the_title();?>">
								<p class="form-item">
									<input type="text" placeholder="Name" name="book-item-name" required>
								</p>
								<p class="form-item">
									<input type="email" placeholder="Email" name="book-item-email" required>
								</p>
								<p class="form-item">
									<input type="text" placeholder="Phone" name="book-item-phone" required>
								</p>
								<input type="submit" value="Book Now">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="response"></div>
</section>