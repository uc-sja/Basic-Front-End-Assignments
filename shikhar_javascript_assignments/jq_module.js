$(document).ready(function (){
    var pos_bottom = $("#drag_bottom_left").offset();
    var pos_right = $("#drag_top_right").offset();
    $(".draggable").draggable({
        handle: ".hand",
        revert: "invalid",
        start: function (event, ui){
            $(".droppable").html('Started Dragging'); 
        },
        stop: function (event, ui){
            $(".droppable").html('Stopped Dragging'); 
        }
    });
    $(".droppable").droppable({
        accept: ".draggable",
        drop: function (event, ui){
            $(this).droppable('disable');
            $(ui.draggable).hide();
            $("#dialog_box").dialog({
                height: 200,
                width: 200,
                show: {
                    effect: "slideDown",
                    duration: 800,
                },
                hide: {
                    effect: "explode",
                    duration: 800,
                },
            });
            $(".ui-dialog").css({
                "width": "auto",
                "top": "37%",
                "left": "40%",
            });
            $(".ui-button").click(function ()
            {
                $("#dialog_box").dialog("close");
                $(".droppable").droppable("option", "disabled", false);
                $(ui.draggable).show();
                switch(ui.draggable.prop('id'))
                {
                    case "drag_top_left": {
                        $("#drag_top_left").animate({
                            left: "0",
                            top: "0",
                        }, 800);    
                        break;
                    }
                    case "drag_top_right": {
                        $("#drag_top_right").animate({
                            left: pos_right.left,
                            top: "0",
                        }, 800);
                        break;
                    }
                    case "drag_bottom_left": {
                        $("#drag_bottom_left").animate({
                            left: "0",
                            top: pos_bottom.top,
                        }, 800);
                        break;
                    }
                        case "drag_bottom_right": {
                        $("#drag_bottom_right").animate({
                            left: pos_right.left,
                            top: pos_bottom.top,
                        }, 800);
                        break;
                    }    
                }        
            });
            $(this)
            .addClass("ui-state-highlight")
            .html("Dropped!");    
        },
        over: function (event, ui)
        {
            $(this)
            .addClass("ui-state-highlight")
            .html("Moving in...");
        }
    });
});