function editarLibro(button) {
    var contenedor = button.parentElement; 
    
    var elementosAEditar = contenedor.querySelectorAll("h2, h3, p");
    elementosAEditar.forEach(function (elemento) {
        elemento.contentEditable = true;
        elemento.style.border = "1px solid #FFD700"; 
    });

    
    button.innerText = "Guardar Cambios";
    button.onclick = function () {
        guardarCambios(contenedor, button);
    };
}
function guardarCambios(contenedor, button) {
    var elementosAEditar = contenedor.querySelectorAll("h2, h3, p");
    elementosAEditar.forEach(function (elemento) {
        elemento.contentEditable = false;
        elemento.style.border = "none"; 
    });

    button.innerText = "Editar";
    button.onclick = function () {
        editarLibro(button);
    };
}
