$(document).ready(function(){
	$('.box-top').hide();
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			$('.box-top').fadeIn();
		}else{
			$('.box-top').fadeOut();
		}
	});	
	
	$('.box-top').click(function(event){
		$('html, body').animate({
			scrollTop: 0}, 800);
			return false;
	})
});


jQuery(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   });
});


