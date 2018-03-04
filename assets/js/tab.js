function tabSwitch(id) {
    var no_of_tab = $('[data-type="tab"]').length;

    for(i = 1; i <= no_of_tab; i++){
        if(i == id){
            if($("#tab"+i).css('display') == "none"){
                $("#tab"+i).fadeIn();
            }
        }

        else{
            $("#tab"+i).hide();
        }
    }
}