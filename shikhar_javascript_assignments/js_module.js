var x, y , z, p, q, r; 
var frameone_id, frametwo_id, framethree_id, framefour_id, framefive_id, framesix_id; 
document.addEventListener("DOMContentLoaded", function(){    
    let elements = document.getElementsByClassName("click_button");
    sessionStorage.clear();
    let current_value = sessionStorage.getItem("check");
    for (let i = 0; i < elements.length; i++) {
        elements[i].addEventListener("click", function(){
            if(typeof(Storage) !== "undefined") {
                if (!current_value) {
                    current_value = this.value;
                } else {
                    current_value = current_value + "\n" + this.value;
                }
                //console.log(current_value);
                sessionStorage.setItem("check", current_value);
            }
            else {
                console.log("Cannot access local storage");
            }
        });
    }
});

function clickCount() {
    let history = [];
    if (typeof(Storage) !== "undefined") {
        let current_value = sessionStorage.getItem("check");
        if (current_value != null) {
            let items = sessionStorage.getItem("check");
            items = items.split("\n");
            if ((items.length - 3) > 0) {
                for(i = 0; i <= 2; i++) {                    
                    history[i] = items[(items.length-1)-i]
                }
                alert("Your last three clicks were on: \n" + history.join("\n"));
            } else {
                alert("Your last three clicks were on: \n" + items.join("\n"));
            }
        } else {
            alert("No clicks till yet");
        }
    } else {
        alert("Cannot access local Storage");
    }    
}

function move() {
    var canvas_shell = document.getElementById("myCanvas");
    var ctx = canvas_shell.getContext("2d");
    //console.log("move function");    
    ctx.clearRect(0, 0, canvas_shell.width, canvas_shell.height);        
    cancelAnimationFrame(frameone_id);
    cancelAnimationFrame(frametwo_id);
    cancelAnimationFrame(framethree_id);
    cancelAnimationFrame(framefour_id);
    cancelAnimationFrame(framefive_id);
    cancelAnimationFrame(framesix_id);
    x = y = z = p = q = r = 2 * Math.PI;
    frameOne();                            
    frameTwo();
    frameThree();
    frameFour();
    frameFive();
    frameSix();        
    //console.log(x,y,z,p,q,r,2 * Math.PI);    
    function frameOne(){
        //console.log("function called");
        if (x <= (Math.PI)) {
            x = 2 * Math.PI;              
            cancelAnimationFrame(frameone_id);
            //console.log("if");
        } else {
            x = x - 0.036;
            ctx.beginPath();
            ctx.lineWidth = 20;          
            ctx.arc(canvas_shell.width/2, canvas_shell.height/2, canvas_shell.height/2-20, x , 2 * Math.PI);
            ctx.strokeStyle = "#ff0000";
            ctx.stroke();
        //  console.log("x", x);            
            frameone_id  = requestAnimationFrame(frameOne);                            
        }
    }
    
    function frameTwo() {
        if (y <= (Math.PI)) {
            y = 2 * Math.PI;
            cancelAnimationFrame(frametwo_id);
        } else {
            y = y - 0.032;         
            ctx.beginPath();
            ctx.arc(canvas_shell.width/2, canvas_shell.height/2, canvas_shell.height/2-40, 2 *  Math.PI, y, true);
            ctx.strokeStyle = "#FFA500";
            ctx.stroke();        
            frametwo_id  = requestAnimationFrame(frameTwo);
        }            
    } 
    
    function frameThree() {
        if (z <= (Math.PI)) {
          cancelAnimationFrame(framethree_id);
        } else {
            z = z - 0.028;       
            ctx.beginPath();
            ctx.arc(canvas_shell.width/2, canvas_shell.height/2, (canvas_shell.height) / 2-60, 2 * Math.PI, z, true);
            ctx.strokeStyle = "#ffff00";
            ctx.stroke();
            framethree_id = requestAnimationFrame(frameThree);
        }    
    }
    
    function frameFour() {
        if (p <= (Math.PI) * 0.9972) {
            cancelAnimationFrame(framefour_id);
        } else {
            p = p - 0.026;
            ctx.beginPath();
            ctx.arc(canvas_shell.width / 2, canvas_shell.height/2, (canvas_shell.height) / 2-80, 2 * Math.PI, p, true);
            ctx.strokeStyle = "#00ff00";
            ctx.stroke();
            framefour_id = requestAnimationFrame(frameFour);
        }   
    } 
    
    function frameFive() {
    if (q <= (Math.PI) * 0.998) {
          cancelAnimationFrame(framefive_id);
        } else {
            q = q - 0.024;         
            ctx.beginPath();
            ctx.arc(canvas_shell.width/2, canvas_shell.height/2, (canvas_shell.height) / 2-100, 2 * Math.PI, q, true);
            ctx.strokeStyle = "#0000ff";
            ctx.stroke();
            framefive_id = requestAnimationFrame(frameFive);
        }
    } 
    
    function frameSix() { 
    if (r <= (Math.PI) * 0.998) {
            cancelAnimationFrame(framesix_id);
        } else {
            r = r - 0.022;         
            ctx.beginPath();
            ctx.arc(canvas_shell.width/2, canvas_shell.height/2, (canvas_shell.height) / 2-120, 2 * Math.PI, r, true);
            ctx.strokeStyle = "#8a2be2";
            ctx.stroke();
            framesix_id = requestAnimationFrame(frameSix);
        } 
    }
    var timer = setTimeout(move,2500);
}

var flag = false;

function startTimer() {
    if( flag == false) {
        move();
        flag = true;
    }
}

function info() {
    let canvas_drawing = document.getElementById("myCanvas");    
    if (canvas_drawing.style.width == "400px" && canvas_drawing.style.borderRadius == "0px"){
        alert("I am a square");
    }
    if(canvas_drawing.style.width == "700px") {
        alert("I am a rectangle");
    }    
    if(canvas_drawing.style.borderRadius == "50%") {
            alert("I am a Circle");
    }    
}

function canvasShape(border, width, height) {
    let draw_base = document.getElementById("myCanvas");
    draw_base.style.WebkitTransition = 'all 1s ease-in';
    draw_base.style.borderRadius = border;
    draw_base.style.width = width;
    draw_base.style.height = height;
}