
class StepTab {

  constructor(active){
    this.active = active;
    this.activateTab(active);
  }

  activateSelector(selector) {
    $(selector).prevAll('li.item').addClass("active");
    $(selector).nextAll('li.item').removeClass("active");
    $(selector).addClass("active");
    $(selector).children("a.link").tab("show");
  
    return $(selector).children("a.link").attr("href");
  }  

  /* PAGINACIONES */
  changeTab(selector, status) {
    if(status){
      this.activateSelector(selector);
    }
  }

  prevTab(status = true){
    if(status){
      let numTab = $(".timeline-horizontal .item.active").prev("li.item").children("a.link").attr("href").substr(-1); 
      this.activateTab(numTab);
      return numTab;
    }
  }

  nextTab(status = true){
    if(status){
      let numTab = $(".timeline-horizontal .item.active").next("li.item").children("a.link").attr("href").substr(-1); 
      this.activateTab(numTab)
      return numTab;
    }
  }

  activateTab(tab){
    $('.card-tabs .content .item a[href="#tab_' + tab + '"]').parent("li.item").prevAll('li.item').addClass("active");
    $('.card-tabs .content .item a[href="#tab_' + tab + '"]').parent("li.item").nextAll('li.item').removeClass("active");
    $('.card-tabs .content .item a[href="#tab_' + tab + '"]').parent("li.item").addClass("active");
    $('.card-tabs .content .item a[href="#tab_' + tab + '"]').tab('show');
  };
}
