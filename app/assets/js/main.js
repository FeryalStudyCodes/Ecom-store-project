$(function () {
   'use strict' ;
   // Adjust slider height
   var windowHeight=$(window).height(),
       upperNavHeight= $('.upper-bar').innerHeight(),
       navbarHeight=$('.navbar').innerHeight();
     $('.slider , .carousel-item').height(windowHeight-(upperNavHeight+navbarHeight));

  // feautered-work
  $(".feautered-work ul li").on('click',function() {
    $(this).addClass("active").siblings().removeClass("active");
     console.log($(this).data('class'));
     if($(this).data('class') === 'all')
     {
       $('.suffle-images .col-sm').css('opacity','1')
     }
     else
     {
        $('.suffle-images .col-sm').css('opacity','0.3');
        $($(this).data('class')).parent().css('opacity','1')
     }
  });
});


/** */
