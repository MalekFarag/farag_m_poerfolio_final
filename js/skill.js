const bars = document.querySelectorAll('.fill');

var waypoint = new Waypoint({
    element: document.querySelector('.strength'),

    handler: function(direction){
        bars.forEach((bar) => {
        let fillNumber = bar.className.split(' ')[1];
        bar.style.width = fillNumber + '%';
    } 
)}});
