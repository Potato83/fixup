$('.link-scroll a').on('click', function(e){
		var foo = '.' + $(this).attr('href').substr(1) + "-scroller";
		var height = $(window).height();
		var width = $(window).width();
		var id = $(this).attr('id');
		if(width > 700){
			$(foo).fadeOut(250, function(){
				$('html, body').animate({ scrollTop: id*height}, 700, function(){
					$(foo).fadeIn(600);
				});				
			});			
			return false;			
		}				
	});

$('.fizzler').each(function(){
	$butt = $(this);
	var path = '#' + $butt.attr('id') + '-box';
	var closer = '#' + $butt.attr('id') + '-closer';
	var container = '.' + $butt.attr('id').substr(0,6) + '-fade';
	$butt.click(function(){
		$(container).fadeOut(400, function(){		
			$('.sneak-away').addClass('hideme');	
			$(path).fadeIn(400).removeClass('hide');
			$(closer).fadeIn(800).removeClass('hide');			
			$('.carousel').carousel();
		});
	});
});

$('.closer').each(function(){
	$butt = $(this);
	$butt.click(function(){
		$( '.visual-box' ).fadeOut(400);
  	$('.closer').fadeOut(400, function(){
    	$('.visual-fade').fadeIn(400, function(){
    		$('.sneak-away').removeClass('hideme');
    	});        	
    });   
	}); 
});

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        $( '.visual-box' ).fadeOut(400);
      	$('.closer').fadeOut(400, function(){
        	$('.visual-fade').fadeIn(400, function(){
        		$('.sneak-away').removeClass('hideme');
        	});        	
      });
  	}
});

var myFrame = $('.bandcamper');

$( document ).ready(function() {

		$(myFrame).addClass('embed-sneak');
		
		$('#fade-out').fadeIn(3000).removeClass('hide').promise().done(function(){
			setTimeout(headerFade, 1000);
		});
		
});

function headerFade(){
	$('#fade-out').addClass('fancy');
  	fadeBiz();
}

function fadeBiz(){
	setTimeout(outIn, 250);
}



function outIn(){
			$(myFrame).addClass('embed-center').promise().done(function(){
				setTimeout(scrollBud, 800);
			});	
}

function scrollBud(){
	$('#scroller-1').fadeIn(2500).removeClass('hide').promise().done(function(){
		$(this).addClass('flicker');
		$('body').removeClass('no-scroll').addClass('scroll-fix');		
	});
}

// CONTACT

$('#join a').on('click', function(){
	$('.signup').fadeIn(400).toggleClass('hide');
});



// FIREFOX VH BUG


var isFirefox = typeof InstallTrigger !== 'undefined';

$(function() {
    if(isFirefox){
		$('#events').addClass('events-special');
		$('#embed-div').addClass('firefox');
	} else {
		$('#embed-div').addClass('not-firefox');
	}
});











