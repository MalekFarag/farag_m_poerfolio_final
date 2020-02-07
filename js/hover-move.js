// GSAP liscensed under GSAP's: "Standard 'No Charge' GreenSock License"
const 	element = document.querySelector('.landingInfo'),
        parent  = element.parentElement;

	function move(e){
        if (window.matchMedia("(min-width: 700px)").matches) {
            var moveX = (e.pageX * -1 / 60 + 16);
            var moveY = (e.pageY * -1 / 60 + 5);

            parent.style.transform = "translateX(" + moveX  + '%) ' + "translateY(" + moveY + "%)";

            }else{
                parent.style.transform = "translateX(0) translateY(0)";
            }
    }
    parent.onmousemove = move;

    var waypoint = new Waypoint({
    element: document.querySelector('.mainHeader'),
    handler: function(direction) {
        parent.style.transform = "translateX(0px) translateY(0px)";
    }
  })





    
