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