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

