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