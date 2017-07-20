var $ = jQuery.noConflict();


// //Menu appears below fold
// $(function(){
//   var pTop = p.offset().top;
//   menu.hide();
//
//   $(window).scroll(function() { //when window is scrolled
//     var position = (pTop - $(window).scrollTop());//position of element w.r.t top
//     if (position < 0) {
//       menu.slideDown(300);
//     } else{
//       menu.slideUp(100);
//     }
//     return;
//   });
// });


//at screen width, menu changes to hamburger menu
function mobileViewUpdate() {
    $("#hamburger").hide();
  if ($(window).width() < 850) {
    $("#desktopMenu").hide();
    $("#hamburger").show();
    $("#scrollHamburger").removeClass('hide');
    $("#scrollDesktopMenu").addClass('hide');
  } else {
    $("#desktopMenu").show();
    $("#hamburger").addClass('hide');
    $("#scrollHamburger").addClass('hide');
    $("#mobileMenu").addClass('hide');
    $("#scrollDesktopMenu").removeClass('hide');
  }
}
$(window).ready(mobileViewUpdate);
$(window).resize(mobileViewUpdate);


 //on hamburger click, menu opens
$(function() {
  $('#mobileMenu').hide();
  $("#hamburger, #scrollHamburger").on('click', function() {
    $("#mobileMenu").show();
  });
});
 //on exit click, menu closes
$(function() {
  $("#exit").on('click', function() {
    $("#mobileMenu").hide();
  });
});
