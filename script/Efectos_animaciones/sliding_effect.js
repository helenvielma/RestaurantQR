$(document).ready(function()
{
	slide("#sliding-navigation", 25, 15, 150, .8);
});


function slide(navigation_id, pad_out, pad_in, time, multiplier)
{
	// creates the target paths
	var list_elements = navigation_id + " li.sliding-element";
	var link_elements = list_elements + " a";
	
	// initiates the timer used for the sliding animation
	var timer = 0;
	
	// creates the slide animation for all list elements 
	$(list_elements).each(function(i)
	{
		// margin left = - ([width of element] + [total vertical padding of element])
		$(this).css("margin-left","-180px");
		// updates timer
		timer = (timer*multiplier + time);
		$(this).animate({ marginLeft: "0" }, timer);
		$(this).animate({ marginLeft: "15px" }, timer);
		$(this).animate({ marginLeft: "0" }, timer);
	});

	// creates the hover-slide effect for all link elements 		
	$(link_elements).each(function(i)
	{
		$(this).hover(
		function()
		{
			$(this).animate({ paddingLeft: pad_out }, 150);
		},		
		function()
		{
			$(this).animate({ paddingLeft: pad_in }, 150);
		});
	});
}

/****************************************************/

$(document).ready(function () {
         
    $('#main_lista a.item').click(function () {
 
        /* FIRST SECTION */
     
        //slideup or hide all the Submenu
        $('#main_lista li').children('ul').slideUp('fast');  
         
        //remove all the "Over" class, so that the arrow reset to default
        $('#main_lista a.item').each(function () {
            if ($(this).attr('rel')!='') {
                $(this).removeClass($(this).attr('rel') + 'Over');  
            }
        });
         
        /* SECOND SECTION */       
         
        //show the selected submenu
        $(this).siblings('ul').slideDown('fast');
         
        //add "Over" class, so that the arrow pointing down
        $(this).addClass($(this).attr('rel') + 'Over');         
     
        return false;
 
    });    
})

