// Carossel
jQuery('.carousel').slick({
    arrows: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    accessibility: true,
    responsive: [
    {
    breakpoint: 1023,
        settings: {
            arrows: true,
            centerPadding: '0px',
            slidesToShow: 3
        }
    },
    {
    breakpoint: 767,
        settings: {
            arrows: true,
            centerPadding: '0px',
            slidesToShow: 1
        }
    }
    ] // fecha responsive
});