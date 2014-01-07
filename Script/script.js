$(document).ready(init);

function init()
{
	scroll();
	

	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollLeft': $target.offset().left
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
}

function scroll() {

   $("body").mousewheel(function(event, delta) {

      this.scrollLeft -= (delta * 60);
    
      event.preventDefault();

   });
}

function nextPageHandler(e)
{
	var target = this.hash,
    $target = $(target);

    $('html, body').stop().animate({
        'scrollLeft': $target.offset().left
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
}