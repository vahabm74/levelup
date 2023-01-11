<div id="event-faq">
	<?php
		$title_section = ot_get_option('event_faq_title');
		$title_section_color = get_post_meta(get_the_ID(),'event_faq_title_color',true);
	?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-section" <?php if($title_section_color):?> style="color:<?php echo $title_section_color;?>" <?php endif;?>>
                    <?php echo ($title_section) ? $title_section : 'FAQ';?>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq">
					<?php
						$faq = get_post_meta(get_the_ID(),'event_faq_items',true);
						$qtitle_color = get_post_meta(get_the_ID(),'event_faq_qtitle_color',true);
						$answer_color = get_post_meta(get_the_ID(),'event_faq_answer_color',true);
						foreach($faq as $q):
					?>
                    <div class="q">
                        <h3 class="q-title">
                            <span class="title" <?php if($qtitle_color):?> style="color:<?php echo $qtitle_color;?>" <?php endif;?>>
                                <?php echo $q['title'];?>
                            </span>
                            <span class="icon"></span>
                        </h3>
                        <div class="q-content" <?php if($answer_color):?> style="color:<?php echo $answer_color;?>" <?php endif;?>>
                            <?php echo $q['event_faq_items_answer'];?>
                        </div>
                    </div>
					<?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>