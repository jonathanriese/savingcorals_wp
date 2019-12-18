jQuery(document).ready(function(){

  jQuery(".menu-icon").click(function(){
    jQuery(".bar1, .bar2, .bar3").toggleClass("change");
    jQuery(".menu-overlay").toggleClass("show");
  });

  jQuery('a[href*="#"]').on('click', function(e) {
    e.preventDefault()
    jQuery('html, body').animate(
      {
        scrollTop: jQuery(jQuery(this).attr('href')).offset().top,
      },
      800,
      'swing'
    )
  });

  jQuery(".blocks-gallery-item").click(function(){
    jQuery(".blocks-gallery-grid").toggleClass("second-image");
  });
});