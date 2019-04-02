/**
* @fileoverview Librería javascript página EcoDomótica
* @author Natalia Peñaranda, Laura Daniela Pinzón, Santiago Pérez
* @version 1.0
*
*/

/**
* Conexión con el botón para enviar datos desde el formulario
* de la página
*/
btnEnviarFormulario = document.getElementById("enviarFormulario");


/**
* Validar que los campos del formulario no estén vacíos
* @param {String} x - Variable uno
* @param {String} y - Variable dos
* @param {String} z - Variable tres
* @returns {Boolean} Retorna true si la función está vacía
*/
function validarCamposVacios(x,y,z) {
    if (x=="" || y=="" || z==""){
        return true;
    }
    return false;
}

/**
* Validar que no se ingresen valores alfanuméricos
* sino únicamente letras en el formulario en la sección de Nombre
* @param {String} x - Entrada del valor Nombre
* @returns {Boolean} Retorna true si el nombre no es válido
* Tiene en cuenta si se genera un error y retorna false
*/
function validarNombre(x) {
    let comp = /\d/g;

    try {
        if (x.match(comp).length >0) {
        return true;
        }
    } catch (e) {
        return false;
    }
}

/**
* Validar el correo
* @param {String} x - Entrada del valor Correo
* @returns {Boolean} Retorna true si el correo es válido
*/
function validarCorreo(x){
    let ar= /@/;
    let terminal = /.com/;

    if (ar.test(x) && terminal.test(x)) {
        return true;
    }
    return false;
}

/**
* Recibe los datos y confirma que no estén vacíos
* de estarlo genera una alerta
* Es ejecutada cuando el botón ha sido oprimido en la página web
*/
function RecibirDatos() {
    event.preventDefault();
    let nom = document.getElementById("NombreApellido").value;
    let corr= document.getElementById("correo").value;
    let contenido = document.getElementById("contenido").value;

    if (validarCamposVacios(nom,corr,contenido)) {
        window.alert("No se permiten campos vacios");
    } else {
        location.reload();
        console.log("Nombre: "+nom);
        console.log("Correo: "+corr);
        console.log("Mensaje: "+contenido);
    }
    if (validarNombre(nom)){
        window.alert("No ingrese datos alfanuméricos en el nombre");
    }
    if (!validarCorreo(corr)){
        window.alert("Ingrese una cuenta de correo válida");
    }
}

/**
* Invocar la función de RecibirDatos() una vez el botón recibió
* la instrucción
*/
btnEnviarFormulario.addEventListener('click',RecibirDatos);



