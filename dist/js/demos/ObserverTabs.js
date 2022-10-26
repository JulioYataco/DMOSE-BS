class StepForm{

  containerMutation = document.querySelector('.card-tabs');
  tabs = document.querySelectorAll('.card-tabs .content .item');
  tabLinks = document.querySelectorAll('card-tabs .content .item a');
  prev = document.querySelector('.card-tabs .prev');
  next = document.querySelector('.card-tabs .next');
  btnCancel = document.querySelector('.card-tabs .btnCancel');

  constructor(current){
    this.config = {attributes: true, subtree: true, childList: true, characterData: true};
    this.current = current;
    this.bindElements();
    this.bindStopObservation();
    this.initMutationObserver();
  }

  // Setter
  set setCurrent(current){
    this.current = current;
  }


  // Getter
  get getCurrent(){
    return this.current;
  }


  get getTabs(){
    return this.tabs.toArray();
  }

  get getNumberTabs(){
    this.getTabs.length;
  }

  prevPage(){
    if(this.current > 1){
      this.current--;
      this.change(this.current);
    }
  }
  
  nextPage(){
    if(this.current < this.getNumberTabs){
      this.current++;
      this.change(this.current);
    }
  }

  change(page){

    if(page == 0) page = 1;
    if(page > this.getNumberTabs) page = this.getNumberTabs;

    if(page == 1){
      // Ocultar botón PREV
    } else {
      // Mostrar
    }

    if(page == this.getTotalNumPages){
      // ocultar botón siguiente
    } else {
      // Mostrar
    }
  }

  
  // Instancia de Mutación
  mutatationObserver = new MutationObserver(mutations => {
    mutations.forEach(mutation => {
      if(mutation.target.classList.contains('active')){
        //mutation.target.parent('li').classList.add('active');
        mutation.target.parentNode.classList.add('active');
        //mutation.target.parentNode.nextSibling.classList.remove('active');
        console.log(mutation.target.parent);
        console.log(mutation.target.parentNode);
      }
      //console.log(mutation.target);
      console.log(mutation.target.getAttribute('href'));
      //console.log(mutation);
    });
    
  });


  bindElements(){
    // Bindiar elementos
    this.tabs.forEach(item => {
      item.addEventListener('click', () => {
        //console.log(this);
      });
    });
  }

  bindStopObservation(){
    // Al hacer click en un boton
    this.btnCancel.addEventListener('click', () => {
      this.closeMutationObserver();
    });
  }


  initMutationObserver(){    
    this.mutatationObserver.observe(this.containerMutation, this.config);
  }

  closeMutationObserver(){
    this.mutatationObserver.disconnect();
  }
}