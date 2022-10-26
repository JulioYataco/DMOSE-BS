class Pagination{
  constructor(current, offset, limit, length, maxPageVisible = 7){
    this.current = current;
    this.offset = offset;
    this.limit  = limit;
    this.length = length;
    this.maxPageVisible = maxPageVisible;
  }

  // Setter
  set setCurrent(current){
    this.current = current;
  }

  set setOffset(offset){
    this.offset = offset;
  }

  set setLimit(limit){
    this.limit = limit;
  }

  set setLength(length){
    this.length = length;
  }

  set setMaxPageVisible(maxPageVisible){
    this.maxPageVisible = maxPageVisible;
  }

  // Getter
  get getCurrent(){
    return this.current;
  }

  get getOffset(){
    return this.offset;
  }

  get getLimit(){
    return this.limit;
  }

  get getLength(){
    return this.length;
  }

  get getPageVisible(){
    return this.maxPageVisible;
  }

  get getTotalNumPages() {
    return Math.ceil(this.length / this.limit);
  }

  prevPage(){
    if(this.current > 1){
      this.current--;
      this.change(this.current);
    }
  }
  
  nextPage(){
    if(this.current < this.getTotalNumPages){
      this.current++;
      this.change(this.current);
    }
  }

  change(page){

    if(page == 0) page = 1;
    if(page > this.getTotalNumPages) page = this.getTotalNumPages;

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
}