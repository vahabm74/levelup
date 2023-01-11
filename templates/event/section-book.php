<div id="event-book">
    <div class="container">
        <div class="row">
            <h2 class="section-title">
                Book Now
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12 m-auto">
                <div class="book-event">
                    <div class="left">
                        <img src="https://levelupdans.com/wp-content/themes/levelup/assets/images/course/mail.png" alt="" title="">
                    </div>
                    <div class="right">
						<?php
							$date = get_post_meta(get_the_ID(),'event_title_date',true);
							if(time() < strtotime($date)):
						?>
                        <form action="#!" method="post" id="event_book_form" data-name="<?php the_title();?>">
							<p class="form-item">
								<input type="text" placeholder="Name" name="book-item-name" required="">
							</p>
							<p class="form-item">
								<input type="email" placeholder="Email" name="book-item-email" required="">
							</p>
							<p class="form-item">
								<input type="text" placeholder="Phone" name="book-item-phone" required="">
							</p>
							<input type="submit" value="Book Now">
						</form>
						<?php else:?>
						<p style="text-align: center;color: #fff;font-size: 20px;">
							Sorry,<?php the_title();?> has ended!
						</p>
						<?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="response"></div>
</div>