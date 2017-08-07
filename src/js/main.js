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
   $("#mobileMenu").slideDown(300);
 });
});
//on exit click, menu closes
$(function() {
 $("#exit").on('click', function() {
   $("#mobileMenu").slideUp(300);
 });
});


// Packages pane
$(function() {
  $(".training-plan-block").hide();
  $(".training-plan-block-container").hide();
  $(".small-ring").on('click', function() {
    $(".anchor-link").children().removeClass("active");
    $(this).addClass('active');
    $(".training-plan-block-container").slideDown(700);
    $(".training-plan-block").hide();
    $("#small-plan").fadeIn(400);
  });
  $(".middle-ring").on('click', function() {
    $(".anchor-link").children().removeClass("active");
    $(this).addClass('active');
    $(".training-plan-block-container").slideDown(700);
    $(".training-plan-block").hide();
    $("#medium-plan").fadeIn(400);
  });
  $(".large-ring").on('click', function() {
    $(".anchor-link").children().removeClass("active");
    $(this).addClass('active');
    $(".training-plan-block-container").slideDown(700);
    $(".training-plan-block").hide();
    $("#large-plan").fadeIn(400);
  });
});

//Fit Options
$(function() {
  $(".fit-content").hide();
  $(".fit-header").on('click', function() {
    $(".fit-content").hide();
    $(this).next(".fit-content").fadeIn(500);
  });
  $(".close").on('click', function() {
    $(".fit-content").slideUp(500);
  });
});

// Other Training Options
$(function() {
  $(".other-plan-content").hide();
  $("#otherPlanContainer").hide();
  $("#trainingCamp").on('click', function() {
    $(this).removeClass('overlay');
    $(".other-plan-content").hide();
    $("#otherPlanContainer").slideDown(500);
    $("#trainingCampContent").fadeIn(400);
  });
  $("#performanceEval").on('click', function() {
    $("#otherPlanContainer").slideDown(500);
    $(".other-plan-content").hide();
    $("#performanceEvalContent").fadeIn(400);
  });
});
// smooth scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
