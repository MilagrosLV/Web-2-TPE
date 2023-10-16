function borrarLibro(button) {
    var contenedor = button.parentElement; // Obtiene el contenedor del libro

    // Pide una confirmación antes de borrar
    var confirmacion = confirm("¿Estás seguro de que deseas borrar este libro?");

    if (confirmacion) {
        contenedor.remove(); // Elimina el contenedor del libro si el usuario confirma
    }
}