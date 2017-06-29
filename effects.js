$(document).ready(function()
{
	$(".searchBar").hide();
	$(window).scroll(function() 
	{
		$(".searchBar").submit();		//Used because there is no submit button
		if ($(this).scrollTop() > 25)
		{  
	    	$(".searchBar").show();
	    	$(".searchBar").click().setCursorPosition(10);
	  	}
	  	else
	  	{
	    	$(".searchBar").hide();
	  	}
	});
});

$.fn.setCursorPosition = function(pos) {
  this.each(function(index, elem) {
    if (elem.setSelectionRange) {
      elem.setSelectionRange(pos, pos);
    } else if (elem.createTextRange) {
      var range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  });
  return this;
};
