function vertical_position(param){
    var primary_div, secondary_div;
    var primary_div = $(param).height();
    
    var secondary_div = $(param).next().height();
    if(secondary_div > primary_div){
        var remaining_height = secondary_div - primary_div;
        var margin_top = remaining_height / 2;
    }
    
    $(param).css({'margin-top': margin_top});
}