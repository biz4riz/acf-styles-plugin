(function($){
	
	$(document).ready(function(){
		
		// Hide p.label if empty label in repeater
		$('.field_type-repeater p.label label').each(function(){
			if($(this).text() == ""){
				$(this).parents('.field_type-repeater').addClass('no_label');
			}
		});
	});

})(jQuery);