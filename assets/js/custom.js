$(document).ready(function(){
	if ($('.set-style-by-js').length > 0) {
		$('.set-style-by-js').find('ul').addClass('list icons list-unstyled');
		$('.set-style-by-js ul li').each(function(){
			var txt = '<i class="fa fa-check-square-o"></i>' + $(this).text();
			$(this).empty().append(txt);
		});
	}
});