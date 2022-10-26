class MutationObserverDemo{
  // selectores
  mutatationContainer = document.getElementById("mutation");
  btnAddElement = document.getElementById("btnAddElement");
  btnStopObserver = document.getElementById("btnStopObserver");
  mutationResults = document.getElementById("mutationResults");

  constructor(){
    this.bindAddElement();
    this.bindStopObservation();
    this.initMutationObserver();
  }

  mutationsNumber = 1;

  // Instancia de Mutación
  mutatationObserver = new MutationObserver(mutations => {
    console.log(mutations);

    this.mutationResults.innerText = this.mutationsNumber;
    this.mutationsNumber++;
    
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
    this.mutatationObserver.observe(this.mutatationContainer, {
      subtree: true, // Cambio de los hijos
      childList: true // Recursivo
    });
  }

  closeMutationObserver(){
    this.mutatationObserver.disconnect();
  }
}