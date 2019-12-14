$(document).ready(function(){
  $(".menu-icon").click(function(){
    $(".bar1, .bar2, .bar3").toggleClass("change");
    $(".menu-overlay").toggleClass("show");
  });

  $('a[href*="#"]').on('click', function(e) {
    e.preventDefault()
    $('html, body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top,
      },
      800,
      'swing'
    )
  });

  $(".s3 .coral").click(function(){
    $(".s3 .coral").toggleClass("hide");
    $(".s3 .description").toggleClass("hide");
  });
});