var list_class = document.getElementsByClassName("list-box");
for(var i = 0; i < list_class.length; i++) {
    list_class[i].addEventListener('click', function(e) {
    // Remove any old one
        var el = document.querySelectorAll( '.ripple' );
        for(var j = 0; j < el.length; j++) {
            el[j].parentNode.removeChild( el[j] );
        }
    // Setup
        var posX = this.offsetLeft,
        posY = this.offsetTop,
        buttonWidth = this.clientWidth,
        buttonHeight =  this.clientHeight;
        //console.log(this.scrollWidth);
        // Add the element
        //console.log(buttonWidth);
        var anim = document.createElement("span");
        anim.className = "ripple";                
        this.insertBefore(anim, this.childNodes[0]);
        // Make it round!
        if(buttonWidth >= buttonHeight) {
            buttonHeight = buttonWidth;
        } else {
            buttonWidth = buttonHeight; 
        }
        //console.log(buttonHeight);
        // Get the center of the element
        var x = e.pageX - posX - buttonWidth / 2;
        var y = e.pageY - posY - buttonHeight / 2;      
        // console.log(e.pageY);
        // Add the ripples CSS and start the animation
        var ripple = document.getElementsByClassName("ripple");
        ripple[0].style.width  = buttonWidth + "px";
        ripple[0].style.height  = buttonHeight +  "px";
        ripple[0].style.top  = y + 'px';
        ripple[0].style.left  = x + 'px';
        ripple[0].classList.add("rippleEffect");
        // Add the ripples CSS and start the animation
    });
}

