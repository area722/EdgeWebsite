$(document).ready(init);

function init()
{
	scroll();
	navButtons();
	headerHoverShow();
}

function scroll() {

   $("body").mousewheel(function(event, delta) {

      this.scrollLeft -= (delta * 60);
    
      event.preventDefault();

   });
}

function navButtons()
{
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

function headerHoverShow () {
	$("header").hover(hoverIn,HoverOut);
	function hoverIn(e)
	{
		$("header").animate({"margin-top":"0%"},500);
	}
	function HoverOut (e) 
	{
		$("header").animate({"margin-top":"-2.8%"},500);
	}
}