$(document).ready(function(){


$('.headerMenu .hamburgerMenuContainer').click(function() {
  $('.clickShowMenu').toggleClass('showMenu');
  $('.clickHideMenu').toggleClass('hideMenu');
  $('.sliderImg').toggleClass('hideSlide');
  $('.top').toggleClass('rotatePlus');
  $('.middle').toggleClass('hideMiddleTag');
  $('.bottom').toggleClass('rotateMinus');
  $('body').toggleClass('scroll');
  $('#return_top').toggle();
  $('.footerContainer').toggle();
  $('.fixedImageContainer').toggle();
  $('#top_to_bottom').toggleClass('clickMe');
});


$(".sliderImg").slick({
  dots: true,
  arrows: true,
  autoplay: true,
  speed: 100,
  slidesToShow:1

});

/* header */

$(window).on('scroll', function(){

  if($(window).scrollTop()>1) {
  $('nav').addClass('changeStyle');
  }
  else {
    $('nav').removeClass('changeStyle');
  }

});

});

//Return to top

var topBtn = $('#return_top');
topBtn.removeClass('active');

$(document).ready(function(){

  $(window).scroll(function(){
   if($(this).scrollTop() >150){
  topBtn.addClass('active');
  $('.fixedImageContainer').addClass('test');

  }else {
    topBtn.removeClass('active');
    $('.fixedImageContainer').removeClass('test');
  }
  });

$("#return_top").click(function(){
   $("html, body").animate({ 
            scrollTop: 0 
        }, 1000);
});
});


/*--------- Top_To_buttom -----------*/

function scrollDown(){
  window.scroll({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
}

/*--------- Transition and animation -----------*/

$(function(){
  $(window).scroll(function (){
    $('.fadein').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 200){
        $(this).addClass('scrollin');
      }
    });
  });
});

// const test = document.querySelector(".contact");

// test.addEventListener("click", ()=> {
//   // alert("ahy");
//   $('.contact').toggleClass('testing');
// });
$(document).ready(function(){
$('.checkTest').change(function(){
  if($(this).is(":checked")) {
    $(".clickShowCheckBox").css("display", "block");
    $(".myCheck").prop("checked", null);
  }else {
  $(".clickShowCheckBox").css("display", "none");
  $(".myCheck").prop("checked", false);
}
});
});



