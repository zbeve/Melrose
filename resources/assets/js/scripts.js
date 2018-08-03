$(document).ready(function(){

  $('#grid').isotope({
    itemSelector:'.grid-item',
    layoutMode: 'masonry',
    sortBy: 'random'
  });

  // var height = $(window).height();
  // var width = $(window).width();
  //
  // $('.lightbox-link').on('click', function() {
  //   $('.lb-image').delay(800).css('max-height', height);
  // });

});
