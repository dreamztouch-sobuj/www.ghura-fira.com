$(document).ready(function(){
    // Video Position
//    var topHeaderHeight = $(".top-header").outerHeight(true);
//    var menuHeight = $(".menu-bar").outerHeight(true);
//    var substract = "18";
//    
//    var totalHeight = (topHeaderHeight + menuHeight) - substract;
//    $(".video-container").css("top", totalHeight);
    
    //Search Form Position
    var windowWidth = $(window).width();
    var formWidth = $('.search-form').outerWidth(true);
    var formPosition = (windowWidth-formWidth)/2;
    $("#search-form").css('left', formPosition);
});

$(window).resize(function(){
    // Video Position
//    var topHeaderHeight = $(".top-header").outerHeight(true);
//    var menuHeight = $(".menu-bar").outerHeight(true);
//    var substract = "18";
//    
//    var totalHeight = (topHeaderHeight + menuHeight) - substract;
//    $(".video-container").css("top", totalHeight);
    
    //Search Form Position
    var windowWidth = $(window).width();
    var formWidth = $('.search-form').outerWidth(true);
    var formPosition = (windowWidth-formWidth)/2;
    $("#search-form").css('left', formPosition);
});