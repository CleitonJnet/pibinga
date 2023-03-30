window.onscroll = function () {
    const nav = document.querySelector('nav');
    const brand = document.querySelector('.nav_brand');
    var top = window.pageYOffset || document.documentElement.scrollTop
    if (top > 88) {
        nav.classList.add('fixed');
        brand.classList.add('enable');
    } else {
        nav.classList.remove('fixed');
        brand.classList.remove('enable');
    }
}

const menu = document.querySelector('nav ul');
const body = document.querySelector('body');
var width = window.innerWidth;

window.addEventListener('resize', function () {
    if ($(window).width() > 768) {
        menu.classList.remove('show');
        body.style.overflow = 'auto';
    }
});



$(document).ready(function () {

    $('.toggle-menu').on('click', function () {

        if (menu.classList.contains('show')) {
            menu.classList.remove('show');
            document.querySelector('body').style.overflow = 'auto';
        } else {
            menu.classList.add('show');
            document.querySelector('body').style.overflow = 'hidden';
        }

        $('header nav').mouseleave(() => {
            menu.classList.remove('show');
            body.style.overflow = 'auto';
        });

    });



});

