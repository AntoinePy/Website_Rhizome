var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    margin: 0,
    nav: true,
    items: 1,
    navText: ["<span class='ion-arrow-back'></span>", "<span class='ion-arrow-forward'></span>"],
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: true
        }
    }
});