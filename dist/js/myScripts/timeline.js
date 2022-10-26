function addClassActive(selector) {
  $(selector).prevAll('li.item').addClass("active");
  $(selector).nextAll('li.item').removeClass("active");
  $(selector).addClass("active");
  $(selector).children("a.link").tab("show");

  return $(selector).children("a.link").attr("href");
}

var arrayElement = $(".card-tabs .content .item").toArray();
var totalPages = arrayElement.length;

$(".card-tabs .content").on("click", ".item", function () {
  addClassActive($(this));
}); 

// PREV
/* $(".card-tabs").on("click", ".prev", function () {
  $(".timeline-horizontal .item.active").prev("li.item").click();
});

// NEXT
$(".card-tabs").on("click", ".next", function () {
  $(".timeline-horizontal .item.active").next("li.item").click();
}); */


function activateTab(tab){
  $('.nav-pills a[href="#' + tab + '"]').tab('show');
};
