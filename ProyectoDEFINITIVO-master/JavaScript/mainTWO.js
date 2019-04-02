/**
* Conexión con la imagen para cambiar el botón al momento de ser
* oprimido
*/
var Interruptor= document.getElementById('interruptor');

estado = document.getElementById('estado');

function cambioEstado() {
    if (interruptor.getAttribute('class')==='apagado'){
        interruptor.setAttribute('class', 'encendido');
        console.log("LUCES ENCENDIDAS");
        estado.innerHTML="LUCES ENCENDIDAS";
    } else {
        interruptor.setAttribute('class', 'apagado');
        console.log("LUCES APAGADAS");
        estado.innerHTML="LUCES APAGADAS";
    }
}

interruptor.addEventListener('click',cambioEstado);
