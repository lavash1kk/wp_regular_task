
$(document).ready(function () {
    let currentIndex = 0;
    const slides = $('.slide');
    const dots = $('.dot');

    function showSlide(index) {
        const slideWidth = $('.slide').outerWidth(true);
        $('.slider-wrapper').css('transform', `translateX(${(-index * slideWidth)}px)`);
        dots.removeClass('active');
        dots.eq(index).addClass('active');
    }

    $('.slider-nav.next').click(function () {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
        $(this).blur();
    });

    $('.slider-nav.prev').click(function () {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
        $(this).blur();
    });

    dots.click(function () {
        currentIndex = $(this).data('slide') - 1;
        showSlide(currentIndex);
    });

    showSlide(currentIndex);
});

function toggleMenu() {
    var menu = document.querySelector('.nav-list');
    var hamburger = document.querySelector('.hamburger-menu');

    // Перемикання класу для відображення меню
    menu.classList.toggle('active');

    // Перемикання класу для анімації гамбургер-меню
    hamburger.classList.toggle('active');
}

document.querySelectorAll('.nav-list a').forEach(function(link) {
    link.addEventListener('click', function() {
        document.querySelector('.nav-list').classList.remove('active');
    });
});