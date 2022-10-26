$(document).ready(function () {


  function addClassActive(selector){
    $(selector).prevAll('li.item').addClass("active");
    $(selector).addClass("active");
    $(selector).nextAll('li.item').removeClass("active");
  }
  
  $(".content").on("click", ".item", function () {
    addClassActive($(this));
  });

});
