$(function() {
    $('#excel_help_dialog').dialog({
        autoOpen: false,
        modal:true, 
        show: { 
            effect: 'slideDown', 
            duration:300, 
        },  
        hide: {
            effect: 'explode', 
            duration: 500, 
        },     
    });
    
    $( "#opener" ).click(function() {
        $("#excel_help_dialog").dialog("open");
    });    

    $("#cross").click(function() {
        $("#excel_help_dialog").dialog("close");
    });         
        
    $(".common_tab").click(function() {
        $(".common_tab").removeClass("current fit_border");                
        $(".common_tab").addClass("tab_modify mgr_nine");                
        $(this).removeClass("tab_modify mgr_nine");                
        $(this).addClass("current fit_border");        
    });        
    
    $("#tabs").tabs({ active:3 });    
    $("#ok_button, #cancel_button, #close_win").click(function() {        
        $("#main_window").css("display", "none");
        $("#excel_help_dialog").dialog("close");
    });
        
    $("#btn_four").click(function() {
        $(".inner_sec").toggleClass("bor_top");
    });
    
    $("#btn_six").click(function() {
        $(".inner_sec").toggleClass("bor_bot");
    });
    
    $("#btn_eight").click(function() {    
        $(".inner_sec").toggleClass("bor_left");
    });
    
    $("#btn_ten").click(function() {        
        $(".inner_sec").toggleClass("bor_right");
    });
    
    $("#btn_one").click(function() {
        $(".inner_sec").removeClass("bor_top bor_left bor_right bor_bot");
    });
    
    $("#btn_two").click(function() {    
        $(".inner_sec").addClass("bor_top bor_left bor_right bor_bot");
    });
    
    $("#color_select").change(function() {
        var col = $(this).val();
        switch(col)
        {
            case "#ff8080": $("#styled").attr("src", "image/2017-07-31_1117.png");
            break;    
            case "#ffff80": $("#styled").attr("src", "image/2017-07-31_1152.png");        
            break;
            case "#80ff80": $("#styled").attr("src", "image/2017-07-31_1206.png");        
            break;
            case "#00ff80": $("#styled").attr("src", "image/2017-07-31_1210.png");        
            break;
            case "#80ffff": $("#styled").attr("src", "image/2017-07-31_1215.png");        
            break;
            case "#ffff80": $("#styled").attr("src", "image/2017-07-31_1152.png");        
            break;
            case "#0080ff": $("#styled").attr("src", "image/2017-07-31_1218.png");        
            break;
            case "#ff80c0": $("#styled").attr("src", "image/2017-07-31_1220.png");        
            break;
            case "#ff80ff": $("#styled").attr("src", "image/2017-07-31_1224.png");        
            break;
            default: $("#styled").attr("src", "image/2017-07-31_1253.png");
            break;
        }
    });
});