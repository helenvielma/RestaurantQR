$(document).ready(function() 
{
	$('div#main_lista li > ul').hide();
	//hide all nested ul's
	$('div#main_lista li > ul li a[class=current]').parents('ul').show().prev('a').addClass('accordionExpanded');
	//show the ul if it has a current link in it (current page/section should be shown expanded)
	$('div#main_lista li:has(ul)').addClass('accordion');
	//so we can style plus/minus icons
	$('div#main_lista li:has(ul) > a').click(function() {
		$(this).toggleClass('accordionExpanded');
		//for CSS bgimage, but only on first a (sub li>a's don't need the class)
		$(this).next('ul').slideToggle('fast');
		$(this).parent().siblings('li').children('ul:visible').slideUp('fast').parent('li').find('a').removeClass('accordionExpanded');
		return false;
	});
});
