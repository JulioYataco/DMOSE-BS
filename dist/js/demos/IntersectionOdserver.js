class IntersectionObserverDemo{
  // selectores

  constructor(){
    this.bindAddElement();
    this.bindStopObservation();
    this.initMutationObserver();
  }

  mutationsNumber = 1;
  intersectionObserver = new IntersectionObserver(([{isIntersecting, target}]) => {
    if(isIntersecting){

    }
  });


  bindAddElement(){
    // Bindiar elemento 

  }

  bindStopObservation(){
    // Al hacer click en un boton
    this.closeMutationObserver();
  }


  initIntersectionObserver(){
    this.mutatationObserver.observe(container, {
      subtree: true, // Cambio de los hijos
      childList: true // Recursivo
    });
  }

  closeIntersectionObserver(){
    this.intersectionObserver.disconnect();
  }
}