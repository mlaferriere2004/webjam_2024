import Scrolly from './components/Scrolly';
import Carousel from './components/Carousel';
import Header from './components/Header';
import Form from './components/Form';

export default class ComponentFactory {
  constructor() {
    this.componentInstances = [];
    this.componentList = {
      Scrolly,
      Carousel,
      Header,
      Form,
    };
    this.init();
  }
  init() {
    const components = document.querySelectorAll('[data-component]');

    for (let i = 0; i < components.length; i++) {
      const element = components[i];
      const componentName = element.dataset.component;

      if (this.componentList[componentName]) {
        const instance = new this.componentList[componentName](element);
        this.componentInstances.push(instance);
        console.log(`La composante ${componentName} existe`);
      } else {
        console.log(`La composante ${componentName} n'existe pas`);
      }
    }
  }
}
