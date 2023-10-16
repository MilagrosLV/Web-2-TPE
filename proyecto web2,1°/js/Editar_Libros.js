function editarLibro(button) {
    var contenedor = button.parentElement; // Obtiene el contenedor del libro
    
    // Habilita la edición del contenido dentro del contenedor
    var elementosAEditar = contenedor.querySelectorAll("h2, p");
    elementosAEditar.forEach(function (elemento) {
        elemento.contentEditable = true;
        elemento.style.border = "1px solid #FFD700"; // Cambia el estilo para indicar que está en modo de edición
    });

    // Cambia el texto del botón para guardar los cambios
    button.innerText = "Guardar Cambios";
    button.onclick = function () {
        guardarCambios(contenedor, button);
    };
}
function guardarCambios(contenedor, button) {
    var elementosAEditar = contenedor.querySelectorAll("h2, p");
    elementosAEditar.forEach(function (elemento) {
        elemento.contentEditable = false;
        elemento.style.border = "none"; // Restaura el estilo original
    });

    // Cambia el texto del botón nuevamente a "Editar"
    button.innerText = "Editar";
    button.onclick = function () {
        editarLibro(button);
    };
}
