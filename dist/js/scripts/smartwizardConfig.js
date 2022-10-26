var smartWizardBasic = {
    selected: 0, // Initial selected step, 0 = first step
    theme: 'dots', // theme for the wizard, related css need to include for other than basic theme
    justified: true, // Nav menu justification. true/false
    autoAdjustHeight: false, // Automatically adjust content height
    backButtonSupport: true, // Enable the back button support
    enableUrlHash: true, // Enable selection of the step based on url hash
    transition: {
        animation: 'fade', // Animation effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
        speed: '200', // Animation speed. Not used if animation is 'css'
        easing: '', // Animation easing. Not supported without a jQuery easing plugin. Not used if animation is 'css'
        prefixCss: '', // Only used if animation is 'css'. Animation CSS prefix
        fwdShowCss: '', // Only used if animation is 'css'. Step show Animation CSS on forward direction
        fwdHideCss: '', // Only used if animation is 'css'. Step hide Animation CSS on forward direction
        bckShowCss: '', // Only used if animation is 'css'. Step show Animation CSS on backward direction
        bckHideCss: '', // Only used if animation is 'css'. Step hide Animation CSS on backward direction
    },
    toolbar: {
        position: 'bottom', // none|top|bottom|both
        showNextButton: true, // show/hide a Next button
        showPreviousButton: true, // show/hide a Previous button
        extraHtml: '' // Extra html to show on toolbar
    },
    lang: { // Language variables for button
        next: 'Siguiente',
        previous: 'Anterior'
    }
};


var smartWizardMedium = {
    selected: 0,                // Elemento seleccionado
    theme: 'square',              // Tema para el asistente (default|arrows|square|round|dots)
    justified: true,            // Justificación del menu de navegación
    autoAdjustHeight: false,     // Ajusta automaticamente la altura del contenido
    backButtonSupport: true,    // Habilita la compatibilidad con el botón atrás
    enableUrlhash: true,        // Habilitar la selección del paso basado en el hash de URL
    transition: {
        animation: 'fade',          // Efecto de animación en la navegación, none|fade|slideHorizontal|slideVertical|slideSwing|css (la clase CSS de animación también debe especificarse
        speed: '300',               // Velocidad de la animación
        easing: ''                  // Animación aceleración
    },
    toolbar: {                      // Barra de herramientas
        position: 'bottom',         // none|top|bottom|both
        showNextButton: true,       // Muestra/Oculta el botón siguiente
        showPreviousButton: true,   // Muestra/Oculta el botón anterior
        extraHtml: `<button class="btn btn-success btn-save"><i class="fas fa-save mr-1"></i> Guardar</button>`               // HTML Adicional para mostrar en la barra de herramientas
    },
    anchor: {
        enableNavigation: true,         // Habilitar/Desabilitar la navegación ancla
        enableNavigationAlways: false,  // Activa todos los anclajes en los que se puede hacer click
    },
    keyboard: {                         // Atajo de teclado
        keyNavigation: true,
        keyLeft: [37],                  // Código de tecla izquierda
        keyRight: [39],                 // Código de tecla derecha
    },
    lang: {                             // Idioma para los botones
        next: 'Siguiente',
        previous: 'Anterior'
    },
    disabledSteps: [],          // Pasos de la matriz deshabilitados
    errorSteps: [],             // Error de pasos de matriz
    warningSteps: [],             // Advertencia de pasos de matriz
    hiddenSteps: [],             // Pasos ocultos  
    getContent: null             // Función de devolución de llamada para cargar contenido 

}


var smartWizardPro = {
    selected: 0,                // Elemento seleccionado
    theme: 'square',              // Tema para el asistente (default|arrows|square|round|dots)
    justified: true,            // Justificación del menu de navegación
    autoAdjustHeight: false,     // Ajusta automaticamente la altura del contenido
    backButtonSupport: true,    // Habilita la compatibilidad con el botón atrás
    enableUrlhash: true,        // Habilitar la selección del paso basado en el hash de URL
    transition: {
        animation: 'fade', // Effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
        prefixCss: 'animate__animated animate__faster',
        fwdShowCss: 'animate__bounceIn',
        fwdHideCss: 'animate__bounceOut',
        bckShowCss: 'animate__bounceIn',
        bckHideCss: 'animate__bounceOut'
    },
    toolbar: {                      // Barra de herramientas
        position: 'bottom',         // none|top|bottom|both
        showNextButton: true,       // Muestra/Oculta el botón siguiente
        showPreviousButton: true,   // Muestra/Oculta el botón anterior
        extraHtml: `<button class="btn btn-success btn-save"><i class="fas fa-save mr-1"></i> Guardar</button>`               // HTML Adicional para mostrar en la barra de herramientas
    },
    anchor: {
        enableNavigation: true,         // Habilitar/Desabilitar la navegación ancla
        enableNavigationAlways: false,  // Activa todos los anclajes en los que se puede hacer click
    },
    keyboard: {                         // Atajo de teclado
        keyNavigation: true,
        keyLeft: [37],                  // Código de tecla izquierda
        keyRight: [39],                 // Código de tecla derecha
    },
    lang: {                             // Idioma para los botones
        next: 'Siguiente',
        previous: 'Anterior'
    },
    disabledSteps: [],          // Pasos de la matriz deshabilitados
    errorSteps: [],             // Error de pasos de matriz
    warningSteps: [],             // Advertencia de pasos de matriz
    hiddenSteps: [],             // Pasos ocultos  
    getContent: null             // Función de devolución de llamada para cargar contenido 

}

