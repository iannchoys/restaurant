document.addEventListener('DOMContentLoaded', function () {
    var toggler = document.getElementById('mobileToggler');
    var menu = document.getElementById('mobileMenu');

    if (toggler && menu) {
        toggler.addEventListener('click', function () {
            menu.classList.toggle('open');
            document.body.classList.toggle('menu-open', menu.classList.contains('open'));
        });
    }
});

$(document).ready(function(){
    $('.specialities__slider').slick({
        dots: true,               
        arrows: false,             
        infinite: true,            
        speed: 600,                         
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: false,
		  autoplay: true,
		  autoplaySpeed: 3000
    });
});

$(document).ready(function(){
    $('.menu__item').show();
    $('.menu__category-link').removeClass('active');

    $('.menu__category-link').on('click', function(e){
        e.preventDefault();
        var $this = $(this);
        var filter = $this.data('filter');

        if ($this.hasClass('active')) {
            $this.removeClass('active');
            $('.menu__item').show();
        } else {
            $('.menu__category-link').removeClass('active');
            $this.addClass('active');

            $('.menu__item').hide();
            $('.menu__item[data-category="' + filter + '"]').show();
        }
    });
});


$(document).ready(function(){
    $('a[href*="#"]').on('click', function(e) {
        var href = $(this).attr('href');
        
        if (href !== '#' && href.indexOf('#') === 0) {
            e.preventDefault();
            
            var target = $(href);
            
            if (href === '#home') {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
            } 
            else if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        }
    });
});

$(window).on('scroll', function() {
    var scroll = $(window).scrollTop();
    
    if (scroll > 100) { 
        $('.hero__top').addClass('hero__top--sticky');
        $('.hero__logo-img').addClass('hero__logo-img--small');
    } else {  
        $('.hero__top').removeClass('hero__top--sticky');
        $('.hero__logo-img').removeClass('hero__logo-img--small');
    }
});