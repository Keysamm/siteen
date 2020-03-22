
let $block = document.querySelector('#block')
let $desc = document.querySelector('.add_desc')
let $none = document.querySelector('#none')
let $desc2 = document.querySelector('.add_desc_2')

$block.addEventListener('mouseover', onHover)
$block.addEventListener('mouseout', outHover)
function onHover() {
  $desc.classList.add('d-none')
}

function outHover() {
  $desc.classList.remove('d-none')
}



$none.addEventListener('mouseover', onHoverr)
$none.addEventListener('mouseout', outHoverr)
function onHoverr() {
  $desc2.classList.add('d-none')
}

function outHoverr() {
  $desc2.classList.remove('d-none')
}


// let $link = document.querySelector('.link-js')
// let html = document.getElementsByTagName('html')
// let body = document.getElementsByTagName('body')
// $link.addEventListener('click', onLink)

// function onLink(e) {
//   e.preventDefault();
//   let target = this.getAttribute("href")
//   html.
// }


jQuery('.link-js').on('click', function (e, $) {
    e.preventDefault();
    let target = $(this).attr("href");

    $('html, body').stop().animate({
        scrollTop: $(target).offset().top
    }, 1000, function ($) {
        location.hash = target;
    });
    if (jQuery(window).width() < 1100) {
        $('.mobile-menu').removeClass('active');
        $('.hamb').removeClass('active');
        $('body').removeClass('fix');
        $('.header').removeClass('open-nav');
        $('.menu-link').removeClass('active');
        $('.pattern').removeClass('actived');
    }
    return false;
});





jQuery(document).ready(function ($) { 
  $('.menu-link').on('click', function(e,) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.menu-link').toggleClass('burger');
    $('.mobile-menu').toggleClass('active');
    $('.pattern').toggleClass('actived');
    // $('.section').toggleClass('index');
  });
});


// $(".menu-link").on('click', function () {
//     if (!$(this).hasClass('active')) {
//         $(this).addClass('active');
//         $('#menu').addClass('active');
//         $('body').addClass('fix');
//         $('.pattern').addClass('actived');
        
//     } else {
//         $('body').removeClass('fix');
//         $(this).removeClass('active');
//         $('#menu').removeClass('active');
//         $('.pattern').removeClass('actived');
        
//     }
// });







