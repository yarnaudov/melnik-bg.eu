$(function(){

	$('#send-change-request-dialog').dialog({
		autoOpen: false,
		modal: true,
		width: 800,
		position: ['auto', 20],
	});

	if($('.send-change-request').length > 0){
	
		var title = $('.article_title').html();
		var text = $('.article_content').clone();	
		$(text).find('.article-first-image').remove();
		text = $(text).html();

		$('#send-change-request-dialog input[name=field1]').val(title).parent().hide();		
		$('#send-change-request-dialog textarea[name=field2]').text(text);
		
		tinymce.init({
			selector: "#send-change-request-dialog  textarea[name=field2]",
			menubar: false,
			statusbar: false,
			toolbar1: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			height : 300,
		});

	}
		
	$('.send-change-request').on('click', function(e){
	
		e.preventDefault();
		$('#send-change-request-dialog').dialog('open');
		
	});
	
});