$(document).ready(function() {
    $("#excel_help_dialog").dialog({
        autoOpen: false, 
        modal:true, 
        show: {
            effect: "slideDown", 
            duration:300, 
        }, 
        hide: {
            effect: "explode", 
            duration: 500, 
        }
    });
    
    $("#opener").click(function() {
        $("#excel_help_dialog").dialog("open");
    });
    $("#tabs").tabs({ active:0 });
    $(".number_tab").click(function() {
        $(this).addClass("current");                
        $(".common_tab").removeClass("current");                
    });
    
    $(".common_tab").click(function() {
        $(".number_tab").addClass("tab_one_modify");    
        $(".common_tab, .number_tab").removeClass("current");                
        $(".common_tab").addClass("tab_modify");                
        $(this).addClass("current");                
        $(this).removeClass("tab_modify");                
    });
    
    $("#cross").click(function() {
        $("#excel_help_dialog").dialog("close");
    });            
});

function mulSelect(ids, values) {
    var id_list = ids.split(" ");
    for(i = 0; i<id_list.length; i++) {
        document.getElementById(id_list[i]).style.display = values;
    }
}

function mySelect() { 
    var value = $("#general_select").val();    
    if (value == 1) {
        $("#addon").css("display", "none");
    } else if (value == 2) {
        mulSelect("addon seperator", "block");
        mulSelect("symbol", "none");
        $("#neg_select").css("height", "auto");    
    } else if (value == 3) {
        mulSelect("addon symbol negative", "block");
        mulSelect("seperator", "none");
        $("#neg_select").css("height", "125px");    
    } else if (value == 4) {
        mulSelect("addon symbol", "block");
        mulSelect("seperator negative", "none");
    }    
}

function close_It() {
    mulSelect("main_window", "none");
    $("#excel_help_dialog").dialog("close");
}