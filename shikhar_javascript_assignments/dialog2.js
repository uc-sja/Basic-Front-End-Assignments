$(function() {
    $( '#excel_help_dialog' ).dialog({
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
    
    $('#opener').click(function() {
        $('#excel_help_dialog').dialog('open');
    });
    
    $('#tabs').tabs({active:1});
    $('#cross').click(function() {
        $('#excel_help_dialog').dialog('close');
    });    
    
    $('#ok_button, #cancel_button, #close_win').click(function() {
        $('#main_window').css('display', 'none')                
        $("#excel_help_dialog").dialog("close");
    });
    
    $('.common_tab').click(function() {
        $('.common_tab').removeClass('current current_margin');
        $('.common_tab').addClass('tab_modify');
        $('.alignment_tab').addClass('mgr_nine');
        $(this).removeClass('tab_modify');                
        $(this).addClass('current current_margin');                
    });        
});

function verSelect() {
    var x = document.getElementById('horizontal_select');
    var obj = x.options[x.selectedIndex];
    var select_value = obj.value;    
    switch (select_value) {
        case "1": {
            $('#degree_number').prop('disabled', false);        
            $('#indent_text').css('color', 'lightgray');        
            $('#image_one').attr({onfocus:'imageFile()',  onblur:'imageFiles()'});
            break;
        }
        
        case "2": {
            $('#degree_number').prop('disabled', false);        
            $('#indent_text').css('color', '#000000');        
            $('#image_one').attr({onfocus:'imageFile()',  onblur:'imageFiles()'});
            break;
        }
        
        case "3": {
            $('#degree_number').prop('disabled', false);        
            $('#indent_text').css('color', 'lightgray');        
            $('#image_one').attr({onfocus:'imageFile()',  onblur:'imageFiles()'});
            break;
        }
        
        case "4": {
            $('#degree_number').prop('disabled', false);        
            $('#indent_text').css('color', '#000000');        
            $('#image_one').attr({onfocus:'imageFile()', onblur:'imageFiles()'});
        }
        
        case "5": {
            $('#degree_number').prop('disabled', true);        
            $('#indent_text').css('color', 'lightgray');        
            $('#image_one').removeAttr('onfocus onblur', null);
        }
        
        case "6": {
            $('#degree_number').prop('disabled', false);        
            $('#indent_text').css('color', 'lightgray');        
            $('#image_one').attr({onfocus:'imageFile()', onblur:'imageFiles()'});
        }
        
        case "7": {
            $('#degree_number').prop('disabled', true);        
            $('#indent_text').css('color', 'lightgray');        
            $('#image_one').removeAttr('onfocus onblur', null);
        }
        
        case "8": {
            $('#degree_number').prop('disabled', false);        
            $('#indent_text').css('color', '#000000');        
            $('#image_one').attr({onfocus:'imageFile()',  onblur:'imageFiles()'});
        }        
    }
}

function indentNumber() {
    $('#degree_number').val('0');
    var sel = document.getElementById('horizontal_select');
    var y = sel.value;
    if(document.getElementById('indent_text').style.color == 'lightgray') {
        sel.selectedIndex = 1;
    }
}

function degreeNumber() {
    $('#indent_number').val('0');
}

function effectsCheckbox() {
    var value_v = document.getElementById('vertical_select').value;    
    if ((document.getElementById('wrap_checkbox').checked == true)||(value_v == 4)||(value_v == 5)) {
        $('#shrink_checkbox').prop('disabled', true);
        $('#merge_checkbox').prop('disabled', false);
        $('#shrink').css('color', 'lightgray');
    } else {
        $('#shrink_checkbox').prop('disabled', false);
        $('#merge_checkbox').prop('disabled', false);
        $('#shrink').css('color', '#000000');
    }
}

function enable_justify_checkbox() {
    var number_degree = document.getElementById('degree_number').value;
    var select_horizontal = document.getElementById('horizontal_select').value;
    var select_vertical = document.getElementById('vertical_select').value;
    if(((number_degree == '0')&&(document.getElementById('indent_number').value == '0')&&(select_horizontal == 8))||((select_vertical == 5)&&((number_degree == '90')||(number_degree == '-90')))) {
        $('#justify_checkbox').prop('disabled', false);
        $('#justify_text').css('color', '#000000');
    } else {
        $('#justify_checkbox').prop('disabled', true);
        $('#justify_text').css('color', 'lightgray');
    }
}    

function imageFile() {
    var select_horizontal = document.getElementById('horizontal_select');
    var select_vertical = document.getElementById('vertical_select');
    select_horizontal.options[select_horizontal.selectedIndex].text = select_horizontal.options[select_horizontal.selectedIndex].text.replace('(Indent)',  '');
    select_vertical.options[select_vertical.selectedIndex].text += ' '+'(Indent)';
    select_vertical.selectedIndex = 2;
    $('#text_one').css('filter', 'invert(100%)');
    $('#text_dir_select').prop('disabled', true);
    $('#text_dir').css('color', 'lightgray');
}

function imageFiles() {
    var select_horizontal = document.getElementById('horizontal_select');
    var select_vertical = document.getElementById('vertical_select');
    select_vertical.options[select_vertical.selectedIndex].text = select_vertical.options[select_vertical.selectedIndex].text.replace('(Indent)', '');
    select_horizontal.options[select_horizontal.selectedIndex].text += ' ' + '(Indent)';
    $('#text_one').css('filter', 'invert(0%)');
    $('#text_dir_select').prop('disabled', false);
    $('#text_dir').css('color', '#000000');
}