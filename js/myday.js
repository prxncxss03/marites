var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 0,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: false,
    }, 
    breakpoints: {
        640: {
          slidesPerView: 4,
        
        },
        768: {
          slidesPerView: 5,
         
        },
        1024: {
          slidesPerView: 5,
          slidesPerGroup: 5,
          loopFillGroupWithBlank: false,
        },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });