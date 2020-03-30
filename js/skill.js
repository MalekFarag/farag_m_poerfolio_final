const bars = document.querySelectorAll('.fill');

var waypoint = new Waypoint({
    element: document.querySelector('.vertDiv'),

    handler: function(direction){
        bars.forEach((bar) => {
        let fillNumber = bar.className.split(' ')[1];
        bar.style.width = fillNumber + '%';
    } 
)}});

const strengths = document.querySelectorAll('.strength');
var waypoint = new Waypoint({
    element: document.querySelector('header'),

    handler: function(direction){
        strengths.forEach((strength) => {
            strength.classList.add('display');
        })
    }
})