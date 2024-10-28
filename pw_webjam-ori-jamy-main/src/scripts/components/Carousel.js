import Swiper from 'swiper/bundle';

export default class Carousel {
  constructor(element) {
    this.element = element;
    this.options = {
      slidesPerView: 'auto',
      freeMode: true,
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
      },
    };
    this.init();
  }

  init() {
    this.setOptions();
    new Swiper(this.element, this.options);
  }

  setOptions() {
    if (this.element.dataset.split) {
      this.options.breakpoints = {
        1440: {
          slidesPerView: 2,
        },
        736: {
          slidesPerView: 1,
        },
      };
    }
    if (this.element.dataset.autoplay) {
      this.options.autoplay = {
        autoplay: {
          delay: 5000,
        },
        pauseOnMouseEnter: true,
        disableOnInteraction: true,
      };
    }
    if (this.element.dataset.loop) {
      this.element.dataset.loop = true;
    }
  }
}
