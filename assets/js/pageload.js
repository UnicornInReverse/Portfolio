$(function() {
    scrollDown();
});

// Scroll down to certain element on page
var scrollDown = function() {
    $(".navbar-inner a, a.easeScroll").on('click', function(e) {
        e.preventDefault();
        var element = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(element).offset().top
        }, 1000);
    });
}