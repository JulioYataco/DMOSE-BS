class IntersectionObserverEx{
  list = document.getElementById('testList');

  constructor(){
    this.getData();
  }


  getData(){
    const data = this.returnData();

    for (let item of data){
      let newItem = document.createElement('li');
      newItem.innerText = item.text;
      this.list.appendChild(newItem);
    }
    
    this.initIntersectionObserver();
  }

  returnData(){
    return [
      {value: 0, text: 'dato1'},
      {value: 2, text: 'dato2'},
      {value: 3, text: 'dato3'},
      {value: 4, text: 'dato4'},
      {value: 5, text: 'dato5'},
      {value: 6, text: 'dato6'},
      {value: 7, text: 'dato7'}
    ]
  }

  initIntersectionObserver(){
    const lastChild = this.list.lastElementChild;

    const intersectionObser = new IntersectionObserver(([{isIntersecting, target}]) => {
      if(isIntersecting){
        intersectionObser.disconnect();

        target.style.backgroundColor = 'green';
        target.style.color = 'white';
        target.style.padding = '5px 8px';
        target.style.borderRadius = '8px';
        this.getData();
      }
    }, {threshold: 1});

    intersectionObser.observe(lastChild);
  }

}