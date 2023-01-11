jQuery(document).ready(function($){
    
    //Book Course and event ajax function
    $('#course_book_form,#event_book_form').on('submit',function(e){
        e.preventDefault();
		$(this).find('input[type=submit]').val('Please Wait...');
        var form = $(this);
        var form_title = $(this).attr('data-name');
        var data = {
            'name'  : $(form).find('input[name=book-item-name]').val(),
            'email' : $(form).find('input[name=book-item-email]').val(),
            'phone' : $(form).find('input[name=book-item-phone]').val(),
            'title' : form_title
        };
        $.post(
        '/wp-admin/admin-ajax.php',
        {action:'book_action',data:data},
        function(response){
            $('.response').html(response);
			$(form).find('input[type=submit]').val('Book Now');
			$(form)[0].reset();
        });
    });
	
	//Ajax Show order of category cafe menu
	$('#order-menu .category-menu li').click(function(){
		var cat = $(this).attr('data-cat');
		$('#order-menu .category-menu li').removeClass('active');
		$(this).addClass('active');
		$('#order-menu #orders .row').html("<img src='https://levelupdans.com/wp-content/themes/levelup/assets/images/loading-new.gif' class='loading-icon'>");
		$.post(
        '/wp-admin/admin-ajax.php',
        {action:'order_cafe',cat:cat},
        function(response){
            $('#order-menu #orders .row').html(response);
        });
	});
	
	
	//Ajax Show Instractors desc 
	$('#main-course .teacher .details .avatar,#event-teacher .bottom .avatar').click(function(){
		var id = $(this).attr('data-id');
		$('.ajax-box .avatar').removeClass('active');
		$(this).addClass('active');
		$('.ajax-box .about').html("<img src='https://levelupdans.com/wp-content/themes/levelup/assets/images/loading-new.gif' class='loading-icon'>");
		$.post(
        '/wp-admin/admin-ajax.php',
        {action:'show_teacher_desc',id:id},
        function(response){
            $('.ajax-box .about').html(response);
        });
	});
});