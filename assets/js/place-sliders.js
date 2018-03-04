var slider, restauranSlider, foodSlider;
var  oBxSettings = {pager: false,
    speed: 500,
    slideMargin: 15,
    slideSelector: 'div.item',
    minSlides: 3,
    maxSlides: 3,
    moveSlides: 1,
    slideWidth: 250};

function init(){
    oBxSettings.minSlides = window.outerWidth < 992 ? 2 : 3;
    oBxSettings.maxSlides = window.outerWidth < 992 ? 2 : 3;
}

$(document).ready(function(e){
    init();
    // Initial bxSlider setup
    slider = $('.popular').bxSlider(oBxSettings);
    restauranSlider = $('.popular-restaurant').bxSlider(oBxSettings);
    foodSlider = $('.popular-foods').bxSlider(oBxSettings);
});

$(window).resize(function() {
    // Update bxSlider when window crosses 430px breakpoint
    if ((window.outerWidth<992 && window.prevWidth>=992)
        || (window.outerWidth>=992 && window.prevWidth<992)) {
        init();
        slider.reloadSlider(oBxSettings);
        restauranSlider.reloadSlider(oBxSettings);
        foodSlider.reloadSlider(oBxSettings);
    }
    window.prevWidth = window.outerWidth;
});

$('#collapseFour').on('shown.bs.collapse', function () {
    init();
    slider.reloadSlider(oBxSettings);
});

$('#collapseFive').on('shown.bs.collapse', function () {
    init();
    restauranSlider.reloadSlider(oBxSettings);
});

$('#collapseSix').on('shown.bs.collapse', function () {
    init();
    foodSlider.reloadSlider(oBxSettings);
});