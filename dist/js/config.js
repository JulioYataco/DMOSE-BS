
// CONFIGURACIONES DEL ADMIN

$(document).ready(function () {
  /* 
  * ========================================================
  * MODO OSUCRO
  * ========================================================
  **/
  $("#checkbox-theme").change(function () {
    if ($(this).is(':checked')) {
      applyThemeDark()
      localStorage.setItem("theme", "dark-mode")
    } else {
      applyThemeLight()
      localStorage.setItem("theme", "light-mode")
    }
  })

  function applyThemeDark() {
    addClassDarkHeaderMain()
    addClassDarkAside()
    $('body').addClass('dark-mode')
    $("#checkbox-theme").attr("checked", true);
  }

  function applyThemeLight() {
    removeClassDarkHeaderMain()
    removeClassDarkAside()
    $('body').removeClass('dark-mode')
    $("#checkbox-theme").attr("checked", false);
  }

  // Menu de la cabecera
  function addClassDarkHeaderMain() {
    $('.main-header').removeClass('navbar-white').removeClass('navbar-light')
    $('.main-header').addClass('navbar-dark')
  }

  function removeClassDarkHeaderMain() {
    $('.main-header').removeClass('navbar-dark')
    $('.main-header').addClass('navbar-light').addClass('navbar-white')
  }

  // Menu del aside LEFT
  function addClassDarkAside() {
    $('.main-sidebar').removeClass('sidebar-dark-navy').addClass('sidebar-dark-primary')
    $('.sidebar').addClass('control-sidebar-dark')
  }

  function removeClassDarkAside() {
    $('.main-sidebar').removeClass('sidebar-dark-primary').addClass('sidebar-dark-navy')
    $('.sidebar').removeClass('control-sidebar-dark')
  }


  /* 
  * ========================================================
  * SIDEBAR TOP - FONT-SIZE
  * ========================================================
  **/

  // EVENTO CHANGE RADIO - HEADER 
  $("input[name=fontSizeHeader]").change(function () {
    let fontsize = $(this).attr("data-fontsize");

    removeFontSizeAllHeaderMain();

    if (fontsize == "text-sm") {
      addClassTextSmallHeaderMain();
    } else {
      addClassTextMediumHeaderMain();
    }
  });


  // Text Small
  function addClassTextSmallHeaderMain() {
    $('.main-header').addClass('text-sm')
    $('#header-text-sm').attr("checked", true)
    localStorage.setItem("fontsizeHeader", "text-sm");
  }

  // Text Medium
  function addClassTextMediumHeaderMain() {
    $('.main-header').addClass('text-md')
    $('#header-text-md').attr("checked", true)
    localStorage.setItem("fontsizeHeader", "text-md");
  }

  function removeFontSizeAllHeaderMain() {
    $('.main-header').removeClass('text-sm').removeClass('text-md')
    localStorage.removeItem("fontsizeHeader");
  }

  /* 
  * ========================================================
  * SIDEBAR LEFT 
  * ========================================================
  **/

  // COMPRIMIR BARRA DE NAVEGACIÓN
  $('#cbox-sidebar-mini').click(function () {
    if ($(this).is(':checked')) {
      applyValueSidebarMini()
      localStorage.setItem("minSidebar", "true")
    } else {
      removeValueSidebarMini()
      localStorage.setItem("minSidebar", "false")
    }
  })

  function applyValueSidebarMini() {
    $('body').addClass('sidebar-mini')
    $("#cbox-sidebar-mini").attr("checked", true);
  }

  function removeValueSidebarMini() {
    $('body').removeClass('sidebar-mini')
    $("#cbox-sidebar-mini").attr("checked", false);
  }

  // Estilo flat
  $('#cbox-sidebar-flat-style').click(function () {
    if ($(this).is(':checked')) {
      applyStyleFlat()
      localStorage.setItem("flatStyle", "true")
    } else {
      removeStyleFlat()
      localStorage.setItem("flatStyle", "false")
    }
  })

  function applyStyleFlat() {
    $('.nav-sidebar').addClass('nav-flat').addClass('nav-legacy')
    $('#cbox-sidebar-flat-style').attr("checked", true)
  }

  function removeStyleFlat() {
    $('.nav-sidebar').removeClass('nav-flat').removeClass('nav-legacy')
    $('#cbox-sidebar-flat-style').attr("checked", false)
  }

  // Desactiva o activa la expansiòn de elementos al hacer hover 
  $('#cbox-sidebar-disable-focus').click(function () {
    if ($(this).is(':checked')) {
      disableFocus()
      localStorage.setItem("disableFocus", "true")
    } else {
      enableFocus()
      localStorage.setItem("disableFocus", "false")
    }
  })

  function disableFocus() {
    $('.main-sidebar').addClass('sidebar-no-expand')
    $('#cbox-sidebar-disable-focus').attr("checked", true)
  }

  function enableFocus() {
    $('.main-sidebar').removeClass('sidebar-no-expand')
    $('#cbox-sidebar-disable-focus').attr("checked", false)
  }

  /* 
  * =============================================================
  * SIDEBAR LEFT AND RIGHT
  * =============================================================
  * */

  // EVENTO CHANGE RADIO - SIDEBAR 
  $("input[name=fontSizeSidebar]").change(function () {
    let fontsize = $(this).attr("data-fontsize");

    removeFontSizeAllSidebar();

    if (fontsize == "text-sm") {
      applyTextSmallSidebar();
    } else if (fontsize == "text-md") {
      applyTextMediumSidebar();
    } else {
      applyTextLargeSidebar();
    }
  });


  // Text Small
  function applyTextSmallSidebar() {
    $('.nav-sidebar').addClass('text-sm')
    $('.control-sidebar-content').addClass('text-sm')
    $('#sidebar-text-sm').attr("checked", true)
    localStorage.setItem("fontsizeSidebar", "text-sm");
  }

  // Text Medium
  function applyTextMediumSidebar() {
    $('.nav-sidebar').addClass('text-md')
    $('.control-sidebar-content').addClass('text-md')
    $('#sidebar-text-md').attr("checked", true)
    localStorage.setItem("fontsizeSidebar", "text-md");
  }

  // Text large
  function applyTextLargeSidebar() {
    $('.nav-sidebar').addClass('text-lg')
    $('.control-sidebar-content').addClass('text-lg')
    $('#sidebar-text-lg').attr("checked", true)
    localStorage.setItem("fontsizeSidebar", "text-lg");
  }

  function removeFontSizeAllSidebar() {
    $('.nav-sidebar').removeClass('text-sm').removeClass('text-md').removeClass('text-lg')
    $('.control-sidebar-content').removeClass('text-sm').removeClass('text-md').removeClass('text-lg')
    localStorage.removeItem("fontsizeSidebar")
  }





  /* 
  * =============================================================
  * CONTENIDO
  * =============================================================
  * */

  // EVENTO CHANGE RADIO - SIDEBAR 
  $("input[name=fontSizeContent]").change(function () {
    let fontsize = $(this).attr("data-fontsize");

    removeFontSizeAllContent();

    if (fontsize == "text-sm") {
      applyTextSmallContent();
    } else if (fontsize == "text-md") {
      applyTextMediumContent();
    } else {
      applyTextLargeContent();
    }
  });



  // APLICAR
  function applyTextSmallContent() {
    $('.content-wrapper').addClass('text-sm')
    $('#content-text-sm').attr("checked", true)
    localStorage.setItem("fontsizeContent", "text-sm");
  }

  function applyTextMediumContent() {
    $('.content-wrapper').addClass('text-md')
    $('#content-text-md').attr("checked", true)
    localStorage.setItem("fontsizeContent", "text-md");
  }

  function applyTextLargeContent() {
    $('.content-wrapper').addClass('text-lg')
    $('#content-text-lg').attr("checked", true)
    localStorage.setItem("fontsizeContent", "text-lg");
  }

  // QUITAR TODAS LAS CLASES DE TEXT
  function removeFontSizeAllContent() {
    $('.content-wrapper').removeClass('text-sm').removeClass('text-md').removeClass('text-lg')
    localStorage.removeItem("fontsizeContent")
  }


  /* 
  * =============================================================
  * VARIABLES DEL LOCAL STORAGE
  * =============================================================
  * */

  // VARIABLES DEL NAVEGADOR
  localStorage.getItem("theme") == "dark-mode" ? applyThemeDark() : applyThemeLight();
  localStorage.getItem("minSidebar") == "true" ? applyValueSidebarMini() : removeValueSidebarMini();
  localStorage.getItem("flatStyle") == "true" ? applyStyleFlat() : removeStyleFlat();
  localStorage.getItem("disableFocus") == "true" ? disableFocus() : enableFocus();

  var fontsizeHeader = localStorage.getItem("fontsizeHeader");
  var fontsizeSidebar = localStorage.getItem("fontsizeSidebar");
  var fontsizeContent = localStorage.getItem("fontsizeContent");



  (function (global) {
    // HEADER
    if (fontsizeHeader == "text-sm") {
      addClassTextSmallHeaderMain();
    } else {
      addClassTextMediumHeaderMain();
    }


    // SIDEBAR LEFT AND RIGHT
    if (fontsizeSidebar == "text-sm") {
      applyTextSmallSidebar();
    } else if (fontsizeSidebar == "text-md") {
      applyTextMediumSidebar();
    } else {
      applyTextLargeSidebar();
    }


    // CONTENT BODY
    if (fontsizeContent == "text-sm") {
      applyTextSmallContent();
    } else if (fontsizeContent == "text-md") {
      applyTextMediumContent();
    } else {
      applyTextLargeContent();
    }
  })(this)




});

