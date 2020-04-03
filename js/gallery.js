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
        // add datadiv to display data
        
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
            viewDiv = document.querySelector('.view'),
            dataDiv = document.querySelector('.dataDiv');

      function viewProject(){
        let projDiv = this.parentElement;
        dataDiv.innerHTML = projDiv.innerHTML;

        viewDiv.classList.add('viewShow');
      }

      moreBut.forEach( but => but.addEventListener('click', viewProject));

      //close opened project
      const xbutton = document.querySelector('.xclose');
      function closeProj(){
        viewDiv.classList.remove('viewShow');
      }
      xbutton.addEventListener('click', closeProj);
