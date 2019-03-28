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
    let comp = /\d/g;

    try {
        if (x.match(comp).length >0) {
        return true;
        }
    } catch (e) {
        return false;
    }
}

/*Función para validar el correo*/
function validarCorreo(x){
    let ar= /@/;
    let terminal = /.com/;

    if (ar.test(x) && terminal.test(x)) {
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

    /*Esta condición valida que todos los datos estén ingresados*/
    if (validarCamposVacios(nom,corr,contenido)) {
        window.alert("Campos vacios");
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

/*activador de eventos del formulario con el boton*/
btnEnviarFormulario.addEventListener('click',RecibirDatos);
