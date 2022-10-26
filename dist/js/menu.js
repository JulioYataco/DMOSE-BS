$(document).ready(function () {
  var arrayLinks = $(".nav-collapse-hide-child li .nav-link").toArray();

  $(".nav-sidebar").on("click", ".nav-link", function () {
    $(".nav-sidebar .nav-link").removeClass("active");
    $(this).addClass("active");

    validLinkActive();
  });


  /* 
  * =============================================================
  * CLASS ACTIVE - NAVBAR
  * =============================================================
  * */
  function validLinkActive() {
    for (let i = 0; i < arrayLinks.length; i++) {
      if (arrayLinks[i].classList.contains("active")) {
        console.log(arrayLinks[i])
        sessionStorage.setItem("linkActive", String(i));
      };
    };
  }


  // Remover clase active para todos los enlaces
  function removeActiveLinks() {
    for (let i = 0; i < arrayLinks.length; i++) {
      // Remover clase active
      arrayLinks[i].classList.remove("active");
    };
  }


  // Ativar link
  function activeLinkFocus() {
    removeActiveLinks();

    let indexLinkActive = sessionStorage.getItem("linkActive");

    if (indexLinkActive !== null) {
      arrayLinks[indexLinkActive].classList.add("active");
    }
  }

  activeLinkFocus();
});
