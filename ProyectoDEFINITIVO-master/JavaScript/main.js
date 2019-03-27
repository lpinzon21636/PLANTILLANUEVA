/*Botón para enviar formulario*/
btnEnviarFormulario = document.getElementById("enviarFormulario");


/*Función para validar que los campos del formulario no estén vacíos*/
function validarCamposVacios(x,y,z) {
    /*Retorna true si la función está vacía*/
    if (x=="" || y=="" || z==""){
        return true;
    }
    return false;
}

/*Función para validar que no se ingresen valores alfanuméricos
sino únicamente letras en el formulario en la sección de Nombre*/
function validarNombre(x) {
    let comp = /\d/;
    if (x.match(comp)>0) {
        return true;
    }
    return false;
}

/*Función que recibe los datos y confirma que no estén vacíos
de estarlo genera una alerta
*/
function RecibirDatos() {
    event.preventDefault();
    let nom = document.getElementById("NombreApellido").value;
    let corr= document.getElementById("correo").value;
    let contenido = document.getElementById("contenido").value;

    if (validarCamposVacios(nom,corr,contenido)) {
        window.alert("Campos vacios");
    }
    if (validarNombre(nom)){
        window.alert("No ingrese datos alfanuméricos en el nombre");
    }
}

/*activador de eventos del formulario con el boton*/
btnEnviarFormulario.addEventListener('click',RecibirDatos);
