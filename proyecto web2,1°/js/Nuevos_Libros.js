function agregarNuevoLibro() {
    // Captura los valores de los campos del formulario
    var titulo = document.getElementById("titulo").value;
    var descripcion = document.getElementById("descripcion").value;
    var autor = document.getElementById("autor").value;
    var imagen = document.getElementById("imagen").value;

    // Valida que los campos no estén vacíos antes de continuar
    if (!titulo || !descripcion || !autor || !imagen) {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Crea un nuevo elemento div para representar el libro
    var nuevoLibroDiv = document.createElement("div");
    nuevoLibroDiv.className = "contenedor";

    // Crea el contenido del nuevo libro
    nuevoLibroDiv.innerHTML = `
        <h2>${titulo}</h2>
        <p>${descripcion}</p>
        <div class="portada-libro">
            <img src="${imagen}" alt="Portada del libro">
        </div>
        <div class="informacion-libro">
            <h2>${titulo}</h2>
            <p>${descripcion}</p>
        </div>
        <div class="informacion-autor">
            <span><h3 class="nombre">${autor}</h3></span>
        </div>
    `;

    // Agrega el nuevo libro debajo del formulario
    var nuevoLibroDivContainer = document.getElementById("nuevoLibroDiv");
    nuevoLibroDivContainer.appendChild(nuevoLibroDiv);

    // Limpia los campos del formulario después de agregar el libro
    document.getElementById("titulo").value = "";
    document.getElementById("descripcion").value = "";
    document.getElementById("autor").value = "";
    document.getElementById("imagen").value = "";
}
