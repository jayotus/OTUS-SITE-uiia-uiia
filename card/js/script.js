var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });


  function autoResizeText() {
    document.querySelectorAll('.name').forEach(nameEl => {
      let fontSize = 22; // Start with the max font size
      nameEl.style.fontSize = fontSize + 'px';
  
      while (nameEl.scrollWidth > nameEl.clientWidth && fontSize > 14) {
        fontSize--;
        nameEl.style.fontSize = fontSize + 'px';
      }
    });
  }
  
  // Run when the page loads and on resize
  window.addEventListener('load', autoResizeText);
  window.addEventListener('resize', autoResizeText);
  