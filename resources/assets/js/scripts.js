$(document).ready(function(){

  $('body').imagesLoaded( function() {
    $('.grid').isotope({
      itemSelector:'.grid-item',
      // layoutMode: 'fitRows',
      sortBy: 'random'
    });
  });

});
