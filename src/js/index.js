


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

  if ($(window).width() < 700) {
    $("#desktopMenu").hide();
    $("#hamburger").removeClass('hide');
    $("#scrollHamburger").removeClass('hide');
    $("#scrollDesktopMenu").addClass('hide');
  } else {
    $("#desktopMenu").removeClass('hide');
    $("#hamburger").addClass('hide');
    $("#scrollHamburger").addClass('hide');
    $("#mobileMenu").addClass('hide');
    $("#scrollDesktopMenu").removeClass('hide');
  }
}
$(window).on('load', mobileViewUpdate());
$(window).resize(mobileViewUpdate);
//
//
//  //on hamburger click, menu opens
// $(function() {
//   $("#hamburger, #scrollHamburger").on('click', function() {
//     $("#mobileMenu").removeClass('hide');
//   });
// });
//  //on exit click, menu closes
// $(function() {
//   $("#exit").on('click', function() {
//     $("#mobileMenu").addClass('hide');
//   });
// });
