// Constantes expresiones regulares
const expressions = {
  user: /^[a-zA-Z0-9\_\-]{4,16}$/,            // Letras, numeros, guion y guion_bajo, 4 a 16 digitos
  name: /^[a-zA-ZÀ-ÿ\s]{4,40}$/,              // Letras y espacios, pueden llevar acentos.
  service: /^[a-zA-ZÀ-ÿ0-9\s]{4,40}$/,        // Letras y espacios, pueden llevar acentos.
  any : /^[^$%&|<>#]*$/,
  password: /^.{4,15}$/,                      // 4 a 15 digitos.
  email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  phone: /^\d{9,11}$/                         // 9 a 11 numeros.
}

// Validar campos, compara valores de los campos con los array de expresion asociados
function validateInput(expression, input) {
  // TEST(): Busca coincidencia con la expresión asociada y devuelve (true / false)
  let result = false;

  if (expression.test(input.val())) {
    input.removeClass("is-invalid");
    input.addClass("is-valid");
    result = true;
  } else {
    input.removeClass("is-valid");
    input.addClass("is-invalid");
    result = false;
  }

  return result;
}

// Funcion validar contraseña 2
function validarPassword2(idclave1, idclave2) {
  // Comprobando las dos contraseñas
  let valor1 = idclave1.val();
  let valor2 = idclave2.val();

  if (valor1 !== valor2) {
    idclave2.removeClass("is-valid");
    idclave2.removeClass("validacion");
    idclave2.addClass("is-invalid");
  } else {
    idclave2.removeClass("is-invalid");
    idclave2.addClass("is-valid");
    idclave2.addClass("validacion");
  }
}

// Cambiar atributo type de los input (selector, tipo de attributo, tamaño)
function changeTypeInput(selector, type, maxlength = 15) {
  selector.attr('type', type);
  selector.attr('maxlength', maxlength);
}

// Mostrar alerta
function showAlertInput(contentMsg, message, selectorAlert) {
  $(contentMsg).html(message);

  $(selectorAlert).fadeIn(0);
  $(selectorAlert).removeClass('hide');
  $(selectorAlert).addClass('show');
  $(selectorAlert).fadeOut(3500);
}

