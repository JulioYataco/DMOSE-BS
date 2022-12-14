// Inabilitar saltos de linea (CONTENTEDITABLE) y permitir el maximo de caracteres indicado en su atributo (MAXLENGTH)
function disableLineBreaks(element, event) {
  let maxlength = element.attr('maxlength');

  // Bloquear salto de linea
  if (event.keyCode == 13) {
    event.preventDefault();
  }

  // Maximo de caracteres permitido
  if (element.html().length == maxlength || element.val().length == maxlength) {
    return false;
  } else {
    return true;
  }
}

// Encontrar coincidencia de objeto
function getIndexArrayObject(arrayObject, item) {
  let index = arrayObject.findIndex((element) => {
    return element.name === item;
  });

  // Devolver el indice obtenido (-1 si no se encuentra)
  return index;
}

// Eliminar elemento del array object
function removeItemFromArrayObject(arrayObject, item) {
  // Buscar dentro del array
  let index = arrayObject.findIndex((element) => {
    return element.name === item;
  });

  // Eliminar si existe el elemento buscado
  index !== -1 && arrayObject.splice(index, 1);
}

// Eliminar un elemento del array
function removeItemFromArray(arr, item) {
  let index = arr.indexOf(item);           // obtener el Indice    
  index !== -1 && arr.splice(index, 1);     // Eliminar si existe
}

// Eliminar los elementos de un contenedor
function clearContainer(element) {
  let div = document.querySelector(element);
  while (div.firstChild) {
    div.removeChild(div.firstChild);
  }
}

// Obtener palabra encontrada una cadena de caracteres
function getPhraseFind(string, phrase) {
  // Buscar dentro del array
  let index = string.indexOf(phrase);
  let len = phrase.length;

  if (index !== -1) {
    return string.substr(index, len);
  } else {
    return undefined;
  }
}


// Detectar scroll al final de un div
function isFinalContainer(selector) {
  let scrollHeight = $(selector).prop('scrollHeight');          // ALtura total de la ventana
  let scrollTop = $(selector).scrollTop();                      // Posicion en el que se encuentra el elemento
  let offsetHeight = $(selector).prop('offsetHeight');          // ALtura del div
  let contentHeight = scrollHeight - offsetHeight;              // Altura calculada   
  let pixel = 2;                                                // Controlar desde el movil

  // Comprobar la posici??n del scroll
  if (scrollTop >= contentHeight - pixel) {
    return true;
  } else {
    return false;
  }
}

// Detectar scroll al final de una ventana
function isFinalWindow() {
  var heightWindow = $(window).height();
  var heightDocument = $(document).height();
  var scrollTop = $(window).scrollTop();
  scrollTop = Math.ceil(scrollTop);

  if ((heightWindow + scrollTop) >= heightDocument) {
    return true;
  } else {
    return false;
  }
}

// Final window (mobile and Pc)
function isFinalWindowResponsive() {
  var heightWindow = $(window).height();
  var heightDocument = $(document).height();
  var scrollTop = $(window).scrollTop();
  scrollTop = Math.ceil(scrollTop);

  if (scrollTop >= (heightDocument - heightWindow - 15)) {
    return true;
  } else {
    return false;
  }
}

// Encontrar coincidencia de elemento en dos array
function findMatchesArray(words, phrases) {
  for (let i = 0; i < words.length; i++) {
    if (phrases.includes(words[i])) {
      return true;
    } else {
      return false;
    }
  }
}

// Validar el dispositivo usado
function checkUsedDevice(device) {
  let userAgent = navigator.userAgent || navigator.vendor || window.opera;
  return userAgent.includes(device);
}


// Obtener valores de los parametros enviados por la URL (GET)
function getParamUrl(key) {
  // Usando la propiedad window.location.search
  const values = window.location.search; // Claves y valores

  // Creando instancia de URLSearchParams 
  const urlParams = new URLSearchParams(values);

  // Verificar si existe el parametro
  if (urlParams.has(key)) {
    // Obteniendo valor del parametro
    return urlParams.get(key);
  } else {
    return undefined;
  }
}

// Obtener una colecci??n de valores, obtenidos de su atributo de un conjunto de elementos
function getDataArrayByElements(selector, attribute) {
  let elements = $(selector).toArray(); // conjunto de etiquetas con la misma clase
  let array = [];

  // recorrer el conjunto de elementos
  for (let i = 0; i < elements.length; i++) {
    // Asignar cada valor encontrado al array
    array.push(elements[i].getAttribute(attribute));
  }

  // Conjunto de valores devueltos
  return array;
}



/* 
* ===============================================================
* VALIDACI??N DE FORMULARIO
* ===============================================================
* */
// Validar campos vacios
function isEmptyForm(array) {
  let res = false;

  array.forEach(elem => {
    if (elem.trim().length == 0) {
      res = true;
    }
  });

  return res;
}


/* 
* ===============================================================
* AJAX JQUERY
* ===============================================================
* */
// Enviar datos al servidor mediante el M??todo POST (return promesa)
function sentDataServerPOST(controller, data, dataType = "true") {
  return new Promise((resolve, reject) => {
    let urlCrl = 'controllers/' + controller + '.controller.php';

    $.ajax({
      url: urlCrl,
      type: 'POST',
      data: data,
      dataType: dataType,
      contentType: false,
      processData: false,
      cache: false,
      success: function (res) {
        resolve(res);
      },
      error: function (res) {
        reject(res);
      }
    });
  });
}

// Enviar datos al servidor mediante el M??todo GET (return Promesa)
function sentDataServerGET(controller, data, dataType = "true") {
  return new Promise((resolve, reject) => {
    let urlCrl = 'controllers/' + controller + '.controller.php';

    $.ajax({
      url: urlCrl,
      type: 'GET',
      data: data,
      dataType: dataType,
      success: function (res) {
        resolve(res);
      },
      error: function (res) {
        reject(res);
      }
    });
  });
}


/* 
* ===============================================================
* RENDERIZADO DE TABLA DESDE JS
* ===============================================================
* */

// Generar Html y Asignar al contenedor (return Promesa)
function generateTableHtml(jsonArray, template, selector) {
  return new Promise((resolve, reject) => {

    // Recorrer cada registro del array
    jsonArray.forEach(element => {
      let tmp = template;

      // Recorrer las columnas de un registro
      for (let key in element) {
        tmp = tmp.replaceAll('{' + key + '}', element[key]);
      }

      // Agregar cada registro al contenedor
      $(selector).append(tmp);
    });

    resolve(true);
  });
}