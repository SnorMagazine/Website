$(function() {
	var nav = $('.nav-item');
	var scrolled = false;

	/*
	/	jQuery Inview
	*/
	$('.full').filter(':even').each(function(){
		$(this).addClass('black');
	});
	$(window).scroll(function () {
		scrolled = true;
	});

	var lastActive;

	function currentView(){

	$('.title').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {

		if (!scrolled) return;

		name = $(this).attr('name');
		var li = $('.nav-item[name="'+name+'"]');


		if (isInView) {
			console.log(li);
				if (lastActive)
						lastActive.removeClass('active'); console.log(lastActive);
				li.addClass('active');
				lastActive = li;
		} else {
			lastActive.removeClass('active');
		}
	});

	};

	//currentView();

	/*
	/	jQuery scrollTo
	*/

	nav.click(function(){

		//$('.title').unbind('inview');

		if (lastActive)
			lastActive.removeClass('active');
		
		$(this).addClass('active');

		//$('.menu').localScroll({stop:true,hash:true,duration:400});
		lastActive = $(this);
		$(window)._scrollable();
		
	});
});