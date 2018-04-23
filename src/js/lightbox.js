import Lightbox from "ekko-lightbox"

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
        alwaysShowClose: true,
        leftArrow: '<span class="lightbox-nav__prev"></span>',
        rightArrow: '<span class="lightbox-nav__next"></span>'
    });
});
