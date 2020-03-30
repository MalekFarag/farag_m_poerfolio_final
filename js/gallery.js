//Gallery Functions
//lightbox
const lightbox   = document.querySelector('.lightbox'),
      lightImg   = document.querySelector('.lightImg'),
      caption    = document.querySelector('.lightCap'),
      clickables = document.querySelectorAll('.openBox'),
      close      = document.querySelector('.close');

      function openLightbox(){
        targetImg = this.src.split('portfolio/')[1];
        targetCaption = this.alt;
        
        lightbox.classList.remove('off');
        caption.textContent = targetCaption;
        lightImg.src = `images/portfolio/${targetImg}`;
      }

      function closeLightbox(){
        lightbox.classList.add('off');
        console.log('closed lightbox');
      }

      clickables.forEach( box => box.addEventListener('click', openLightbox));
      lightbox.addEventListener('click', closeLightbox);
      close.addEventListener('click', closeLightbox);


      //functions to expand projects
      const moreBut = document.querySelectorAll('.more'),
            viewDiv = document.querySelector('.view');

      function viewProject(){
        let projDiv = this.parentElement;
        viewDiv.innerHTML = "<p class='xclose'>x</p>" + projDiv.innerHTML;

        viewDiv.classList.toggle('viewShow');
      }

      moreBut.forEach( but => but.addEventListener('click', viewProject));

      //close opened project
      const xbutton = document.querySelectorAll('.xclose');
      function closeProj(){
        debugger;
        viewDiv.classList.remove('viewShow');
      }
      xbutton.forEach( xbut => xbut.addEventListener('click', closeProj));
