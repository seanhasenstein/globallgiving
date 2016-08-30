








/***************** BAR GRAPH JS *****************/

$(function() {
  $("#bars li .bar").each( function( key, bar ) {
    var percentage = $(this).data('percentage');

    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});

/***************** END BAR GRAPH JS *****************/


/*$("#bars li .bar").inViewport(function(px) {
	if(px) $(this).addClass(bars) ;
})*/




