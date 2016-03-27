jQuery(document).ready(function($){
  $cover_height = $( window ).height() - 25;

  $('.cover-orbit').height ( $cover_height );
  $('.cover-orbit li').height ( $cover_height );

  $(document.body).on("closed.fndtn.clearing", function(event) {
    $('.grid-masonry').masonry();
  });



  $(window).on("load", function() {
    $('.grid-masonry').masonry({
      itemSelector: '.grid-masonry-item',
      columnWidth: 370
    });
  });
});
