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
}

/*activador de eventos del formulario con el boton*/
btnEnviarFormulario.addEventListener('click',RecibirDatos);
