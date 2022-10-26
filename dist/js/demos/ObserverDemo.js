class MutationObserverDemo{
  // selectores
  mutatationContainer = document.getElementById("mutation");
  btnAddElement = document.getElementById("btnAddElement");
  btnStopObserver = document.getElementById("btnStopObserver");
  mutationResults = document.getElementById("mutationResults");

  constructor(config){
    this.config = {attributes: true, childList: true, characterData: true};
    this.bindAddElement();
    this.bindStopObservation();
    this.initMutationObserver();
  }

  mutationsNumber = 1;

  // Instancia de Mutación
  mutatationObserver = new MutationObserver(mutations => {
    mutations.forEach(mutation => {
      console.log(mutation.type);
    });
    
  });


  bindAddElement(){
    // Bindiar elemento 
    this.btnAddElement.addEventListener('click', () => {
      const appendElement = document.createElement('div');
      appendElement.innerText = 'Elemento añadido';
      this.mutatationContainer.appendChild(appendElement);
    });

  }

  bindStopObservation(){
    // Al hacer click en un boton
    this.btnStopObserver.addEventListener('click', () => {
      this.closeMutationObserver();
    });
  }


  initMutationObserver(){    
    this.mutatationObserver.observe(this.mutatationContainer, this.config);
  }

  closeMutationObserver(){
    this.mutatationObserver.disconnect();
  }
}