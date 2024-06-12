
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
