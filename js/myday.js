var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 0,
    slidesPerGroup: 4,
    loop: true,
    loopFillGroupWithBlank: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: false,
    }, 
    breakpoints: {
        450: {
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