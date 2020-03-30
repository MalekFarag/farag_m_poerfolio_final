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

        console.log('Image src + alt' + targetImg + targetCaption);
        
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
      




// portfolio switch functions
    const projList = document.querySelectorAll('.projList li'),
          projDivs = document.querySelectorAll('.projView .projInfo');

          function listClick(e){
              let itemName = this.classList[1];
              projList.forEach(item => item.classList.remove('active'));
              document.querySelector('.' + itemName).classList.add('active');
          }

          function projSwap(e){
            let divName = this.classList[1].split('li')[1];
            let projName = '.proj' + divName;

            projDivs.forEach(div => div.classList.remove('view'));

            document.querySelector(projName).classList.add('view');
          }

          projList.forEach( item => item.addEventListener('click', listClick));
          projList.forEach( item => item.addEventListener('click', projSwap));