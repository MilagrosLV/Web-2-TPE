function borrarLibro(button) {
    var contenedor = button.parentElement; 

    var confirmacion = confirm("¿Estás seguro de que deseas borrar este libro?");

    if (confirmacion) {
        contenedor.remove(); 
    }
}