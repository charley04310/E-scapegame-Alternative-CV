$(function(){

	$(window).scroll(function(){

	var scrollTop  = $(window).scrollTop();
	var htmlbloc = document.getElementById('presentation-desktop').offsetHeight;
	//var htmlElement = document.getElementById('img_top');

	if(scrollTop > htmlbloc + 20 ){

		$('.container-desktop-left').each(function(){

        var htmlfixed = document.getElementById('presentation-desktop-fixed');
        $(htmlfixed).css('position', 'fixed');
		$(htmlfixed).css('top', '4rem');

		});


		$('.container-desktop-right').each(function(){

            var htmlfixed = document.getElementById('presentation-desktop-fixed-right');
            $(htmlfixed).css('position', 'fixed');
            $(htmlfixed).css('top', '4rem');

    
            });
    

	}else{
        var htmlfixed = document.getElementById('presentation-desktop-fixed');
        $(htmlfixed).css('position', 'initial');

        var htmlfixedright = document.getElementById('presentation-desktop-fixed-right');
        $(htmlfixedright).css('position', 'initial');
	}


	});

})