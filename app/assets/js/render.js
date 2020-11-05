$(function () {
    $('.menu-toggle, .fa-times').on('click', function () {
        $('nav').toggleClass('active');
        $('.overlay').toggleClass('menu-open');
    });

    $('.overlay').on('click', function () {
        $('nav').removeClass('active');
        $('this').removeClass('menu-open');
    });
});

var langArray = [];
$('.vodiapicker option').each(function () {
    var img = $(this).attr("data-thumbnail");
    var text = this.innerText;
    var value = $(this).val();
    var item = '<li><img src="' + img + '" alt="" value="' + value + '"/><span>' + text + '</span></li>';
    //var item = '<li><img src="' + img + '" alt="" value="' + value + '"/>';
    langArray.push(item);
})

$('#a').html(langArray);

//Set the button value to the first el of the array
$('.btn-select').html(langArray[0]);
$('.btn-select').attr('value', 'en');

//change button stuff on click
$('#a li').click(function () {
    var img = $(this).find('img').attr("src");
    var value = $(this).find('img').attr('value');
    var text = this.innerText;
    var item = '<li><img src="' + img + '" alt="" />  <span>' + text + '</span></li>';
    //var item = '<li><img src="' + img + '" alt="" />';
    $('.btn-select').html(item);
    $('.btn-select').attr('value', value);
    $(".b").toggle();
    //console.log(value);
});

$(".btn-select").click(function () {
    $(".b").toggle();
});

//check local storage for the lang
var sessionLang = localStorage.getItem('lang');
if (sessionLang) {
    //find an item with value of sessionLang
    var langIndex = langArray.indexOf(sessionLang);
    $('.btn-select').html(langArray[langIndex]);
    $('.btn-select').attr('value', sessionLang);
} else {
    var langIndex = langArray.indexOf('ch');
    console.log(langIndex);
    $('.btn-select').html(langArray[langIndex]);
    //$('.btn-select').attr('value', 'en');
}



var swiper = new Swiper('.product-slider', {
    speed: 600,
    spaceBetween: 30,
    effect: 'slide',
    loop: true,
    navigation: {
        nextEl: '.next',
        prevEl: '.prev'
    },
    on: {
        init: function () {
            var index = this.activeIndex;

            var target = $('.product-slider__item').eq(index).data('target');

            console.log(target);

            $('.product-img__item').removeClass('active');
            $('.product-img__item#' + target).addClass('active');
        }
    }
});


swiper.on('slideChange', function () {
    var index = this.activeIndex;

    var target = $('.product-slider__item').eq(index).data('target');

    console.log(target);

    $('.product-img__item').removeClass('active');
    $('.product-img__item#' + target).addClass('active');

    if (swiper.isEnd) {
        $('.prev').removeClass('disabled');
        $('.next').addClass('disabled');
    } else {
        $('.next').removeClass('disabled');
    }

    if (swiper.isBeginning) {
        $('.prev').addClass('disabled');
    } else {
        $('.prev').removeClass('disabled');
    }
});
//좋아요 효과
$(".js-fav").on("click", function () {
    $(this).find('.heart').toggleClass("is-active");
});


var myNav = document.getElementById("nav");

window.onscroll = function () {
    "use strict";
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        myNav.classList.add("scroll");
    } else {
        myNav.classList.remove("scroll");
    }
};