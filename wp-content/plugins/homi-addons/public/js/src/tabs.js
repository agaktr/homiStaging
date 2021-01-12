var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    noSwiping: true,
    slidesPerView: 1,
    paginationClickable: true,
    loop: false,
    paginationBulletRender: function (index, className) {
        var tabsName = ['To Find a Tenant', 'To Rent', 'To Sell', 'To Buy'];
        if ( index === (tabsName.length - 1) ) {
            return	'<span class="' + className + '">'
                + tabsName[index] + '</span>'
                + '<div class="active-mark "></div>';
        }
        return '<span class="' + className + '">' + tabsName[index] + '</span>';
    }
});

(function( $ ) {

    var $benefitsCarousel = $('.benefits-carousel');

    $benefitsCarousel.owlCarousel({
        dots: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

})( jQuery );
