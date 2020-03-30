// Hamburger Menu functions

const nav        = document.querySelector('.headNav'),
      burgerIcon = document.querySelector('.burgerMenu'),
      line1      = document.querySelector('.bl1'),
      line2      = document.querySelector('.bl2'),
      line3      = document.querySelector('.bl3'),
      navItems   = document.querySelectorAll('.navItem'),
      logo       = document.querySelector('.logo');

//Toggle show nav
    //change color of logo + burger
    function toggleNav(){
        console.log('Nav toggled.');
        nav.classList.toggle('showNav');
        burgerIcon.classList.toggle('moveB');

        logo.querySelector('.st0').classList.toggle('white');
        logo.querySelector('.st1').classList.toggle('white');
        
        


        line1.classList.toggle('colorChange');
        line1.classList.toggle('rotate1');

        line2.classList.toggle('hide');

        line3.classList.toggle('colorChange');
        line3.classList.toggle('rotate3');

        navItems.forEach( item =>{
            item.classList.toggle('showItem');
        })
    }

    burgerIcon.addEventListener('click', toggleNav);




//scroll-to section

    function scroll(){
        //remove Nav
        nav.classList.remove('showNav');
        burgerIcon.classList.remove('moveB');

        logo.querySelector('.st0').classList.remove('white');
		logo.querySelector('.st1').classList.remove('white');


        line1.classList.remove('colorChange');
        line1.classList.remove('rotate1');

        line2.classList.remove('hide');

        line3.classList.remove('colorChange');
        line3.classList.remove('rotate3');

        navItems.forEach( item =>{
            item.classList.remove('showItem');
        });

        viewDiv.classList.remove('viewShow');


        //scroll to
        let x = '.sec'+this.id;
        let target = document.querySelector(x);

        target.scrollIntoView({
            behavior: "smooth", 
            block: "start", 
            inline: "center"})
    }
    
    document.querySelectorAll('.scroll').forEach(link => {
        link.addEventListener('click', scroll);
    })
