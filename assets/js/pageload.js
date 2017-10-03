$(function() {
    scrollDown(); // scroll down to certain element on page
    changeNavWhileScrolling(); // Change the nav while scrolling
    addScrollClass();  // Add 'scroll' class to navigation when scrolling
    parallax(); // Parallax scrolling -> Refill plugin
    modals(); // Modals -> Refill plugin
    useEscInModals(); // Use Esc when modal is active
    worksWith(); // Owl-carousel with the work I work with
    showMoreAboutMe(); // Show more about me
});

// Scroll down to certain element on page
var scrollDown = function() {
    $(".navbar-inner a, a.easeScroll").on('click', function(e) {
        if(!$(this).hasClass('icon'))
            e.preventDefault();
        var element = $(this).attr('href');
        $('html, body').animate({
            scrollTop: ($(element).offset().top - 75)
        }, 1000);
    });
    console.log(hoi);
};

// Add class 'scroll' to navigation when scrolling
var changeNavWhileScrolling = function() {
    $(window).on('scroll', function() {
        addScrollClass();
    });
};

// Add .scroll to the navigation bar when scrolling
var addScrollClass = function() {
    var scrollHeight = $(this).scrollTop();
    if(scrollHeight > 10) {
        $("nav").addClass('scroll');
    } else {
        $("nav").removeClass('scroll');
    }
};

// Parallax scrolling (Plugin: Refill)
var parallax = function() {
    $(document).ready(function() {
        if ($("#js-parallax-window").length) {
            parallax();
        }
    });

    $(window).scroll(function(e) {
        if ($("#js-parallax-window").length) {
            parallax();
        }
    });

    var parallax = function(){
        if( $("#js-parallax-window").length > 0 ) {
            var plxBackground = $("#js-parallax-background");
            var plxWindow = $("#js-parallax-window");

            var plxWindowTopToPageTop = $(plxWindow).offset().top;
            var windowTopToPageTop = $(window).scrollTop();
            var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

            var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
            var windowInnerHeight = window.innerHeight;
            var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
            var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
            var plxSpeed = 0.35;

            plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
        }
    }
};

// Portfolio modals (Plugin: Refill)
var modals = function() {
    $(function() {
        $("#modal-1").on("change", function() {
            if ($(this).is(":checked")) {
                $("body").addClass("modal-open");
            } else {
                $("body").removeClass("modal-open");
            }
        });

        $(".modal-fade-screen, .modal-close").on("click", function() {
            closeModals();
        });

        $(".modal-inner").on("click", function(e) {
            e.stopPropagation();
        });
    });
};

// Close modals
var closeModals = function() {
    $(".modal-state:checked").prop("checked", false).change();
};

// When ESC key is pressed, close Modals
var useEscInModals = function() {
    $(document).keyup(function(e) {
        if (e.keyCode === 27) {
            closeModals();
        }
    });
};

// Carousel what I work with
var worksWith = function() {
    $(".owl-carousel").owlCarousel({
        autoPlay: true
    });
};

// Show/Hide more about me
var showMoreAboutMe = function() {
    $("#showMore").on('click', function(e) {
        e.preventDefault();
         $(".moreAboutMe").slideToggle();
    });
};