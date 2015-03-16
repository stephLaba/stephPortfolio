$(function(){
	$(window).scroll(function(){
		var testScroll = $(window).scrollTop();

		if(testScroll > 150){
			$("nav").addClass("scrollin");
			$(".fa.fa-bars").addClass("fa-barsLite");
		}else{
			$("nav").removeClass("scrollin");
			$(".fa.fa-bars").removeClass("fa-barsLite");
		}

	});

	$('i.fa.fa-bars').on('click',function(e){
		event.preventDefault();
		$('.menu li').slideToggle();
	})


	$('a[href*=#]').click(function() {
	  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
	  && location.hostname == this.hostname) {
	    var $target = $(this.hash);
	    $target = $target.length && $target
	    || $('[name=' + this.hash.slice(1) +']');
	    if ($target.length) {
	      var targetOffset = $target.offset().top;
	      $('html,body')
	      .animate({scrollTop: targetOffset}, 1000);
	     return false;
	    }
	  }
	});

	$(window).on('scroll',function() {


		$('.animate').each(function() {
			// cache the current box
			var $el = $(this);
		  	if(isScrolledIntoView($el)) {
		  		$el.addClass('visible');
		  	}

		});
	});

	window.isScrolledIntoView = function($elem) {
	     var $window = $(window);

	     var docViewTop = $window.scrollTop();
	     var docViewBottom = docViewTop + $window.height();

	     var elemTop = $elem.offset().top;
	     var elemBottom = elemTop + $elem.height();

	     return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}



});

