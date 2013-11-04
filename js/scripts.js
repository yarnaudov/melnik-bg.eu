$(function(){

	$('.language-switch ul li').each(function(index){		
		if($(this).hasClass('current')){
			$(this).parent().prepend(this);
		}		
	});

});