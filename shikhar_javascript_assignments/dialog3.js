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
        $( "#excel_help_dialog" ).dialog( "open" );
    });
    
    $(".common_tab").click(function() {
        $(".common_tab").removeClass("current back_wht mgr_six");                
        $(".common_tab").addClass("tab_modify tab_rad mgr_nine");                
        $(this).removeClass("tab_modify tab_rad mgr_nine");                
        $(this).addClass("current back_wht");                
    });
    
    $("#cross").click(function() {
        $("#excel_help_dialog").dialog("close");
    });            

    $("#tabs").tabs({ active: 2 });

    $("#font_selects").on("change", function() {
        $("#cal_text").val($("#font_selects option: selected").text());
        var opt = $(this).val();
        if (opt == 1) {    
            $("#alpha_text").css("font-family", "Cambria");
        }
        
        if (opt == 2) {
            $("#alpha_text").css("font-family", "Calibri");
        }
        
        if (opt == 3) {
            $("#alpha_text").css("font-family", "Constantia");
        }
        
        if (opt == 4) {
            $("#alpha_text").css("font-family", "Comic Sans MS");
        }        
    });
    
    $("#font_style_select").on("change", function() {
        $("#font_style_text").val($("#font_style_select option:selected").text());
        var opt_style = $(this).val();
        if (opt_style == 1) {    
            $("#alpha_text").css({
                "font-style": "normal",
                "font-weight": "400",
            });            
        }
        
        if (opt_style == 2) {
            $("#alpha_text").css({
                "font-style": "italic",
                "font-weight": "400",
            });                
        } 
        
        if (opt_style == 3)    {
            $("#alpha_text").css({
                "font-style": "normal",
                "font-weight": "700",
            });                
        }
        
        if (opt_style == 4)    {
            $("#alpha_text").css({
                "font-style": "italic",
                "font-weight": "700",
            });                
        }        
    });  
    
    $("#font_size_select").on("change", function() {
        $("#font_size_text").val($("#font_size_select option:selected").text());
        var opt_size = $(this).val();
        $("#alpha_text").css("overflow", "hidden");
        var font_array = ["8px", "9px", "10px", "11px", "12px", "14px"];
        for (i = 0; i <= font_array.length; i++) {
            if (opt_size == (i+1)) {
                $("#alpha_text").css("font-size", font_array[i]);
            }
        }
    });            
    
    $("#und_select").on("change", function() {                
        var opt_und = $(this).val();
        if(opt_und == 1) {
            $("#alpha_text").css({
                "text-decoration":"none", 
                "line-height":"50px", 
            });
        }
        
        if(opt_und == 2) {
            $("#alpha_text").css({
                "text-decoration":"underline", 
                "line-height":"50px", 
            });
        }
        
        if(opt_und == 3) {
            $("#alpha_text").css({
                "text-decoration": "underline", 
                "text-decoration-style":"double", 
                "line-height":"50px", 
            });
        }
        
        if (opt_und == 4) {
            $("#alpha_text").css({
                "text-decoration": "underline", 
                "text-decoration-style":"none", 
                "line-height":"40px", 
            });
        }
        
        if(opt_und == 5) {
            $("#alpha_text").css({
                "text-decoration": "underline", 
                "text-decoration-style":"double", 
                "line-height":"40px", 
            });
        }                
    });
    
    $("#strikethrough_checkbox").on("change", function() {        
        if ($("#strikethrough_checkbox").is(":checked")) {
            $("#alpha_text").css("text-decoration", "line-through");                    
        } else {
            $("#alpha_text").css("text-decoration", "none");                    
        }                                
    });
    
    $('.checkbox_two').on('change', function() {
        $('.checkbox_two').not(this).prop('checked', false);
    });
    
    $('#superscript_checkbox').on('change', function() {        
        if($("#superscript_checkbox").is(":checked")) {
            $("#alpha_text >.wrapper").contents().unwrap();
            $("#alpha_text").wrapInner("<span class = 'wrapped'></span>");
            $("#alpha_text").css("line-height", "44px");
        } else {
            $("#alpha_text >.wrapped").contents().unwrap();
            $("#alpha_text").css("line-height", "50px");
        }
    });            
    
    $('#subscript_checkbox').on('change', function() {                    
        if($("#subscript_checkbox").is(":checked")) {
            $("#alpha_text > .wrapped").contents().unwrap();    
            $("#alpha_text").css("line-height", "50px");
            $("#alpha_text").wrapInner("<sub class = 'wrapper'></sub>");
        } else {
            $("#alpha_text >.wrapper").contents().unwrap();
        }
    });                
    
    $("#normal_checkbox").on("change", function() {                    
        $("#font_selects option[value = 1]").prop('selected', 'selected');
        $("#font_style_select option[value = 1]").prop('selected', 'selected');
        $("#font_size_select option[value = 1]").prop('selected', 'selected');
        $("#und_select option[value = 1]").prop('selected', 'selected');
        $(".field_pad :checkbox").prop("checked", false);                                            
    });    
    
    $("#ok_button, #cancel_button, #close_win").on("click", function() {
        $("#main_window").css("display", "none");
        $("#excel_help_dialog").dialog("close");
    });
    
    $("#col_select").change(function() {                    
        $("#alpha_text").css("color", $(this).val());
    });
});
