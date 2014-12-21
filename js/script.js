$(document).ready(function(){
	$(".boton a").click(function(e){
		// $(".boton").removeClass("activo");
		// $("#" + e.target.parentNode.id).addClass("activo");
	});

	var jump = function(e) {
	   	if (e) {
	       	e.preventDefault();
	       	var target = $(this).attr("href");
	   	} else {
	       	var target = location.hash;
	   	}
	   	$('html,body').animate({
	       	scrollTop: $(target).offset(0).top - 50
	   	}, 1000, function() {
	       	location.hash = target;
   		});
	}

	$('html, body').hide();

	$(document).ready(function() {
    	$('a[href^=#]').bind("click", jump);

	    if (location.hash){
	        setTimeout(function(){
	            $('html, body').scrollTop(0).show();
	            jump();
	        }, 0);
	    } else {
	        $('html, body').show();
	    }
	});
});