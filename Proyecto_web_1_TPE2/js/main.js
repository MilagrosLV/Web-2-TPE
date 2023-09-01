//Tabla de navegación:
document.querySelector(".btn_genero").addEventListener("click", toggleMenu);


function toggleMenu() {
    document.querySelector(".navigation").classList.toggle("show");
}

//tabla interactiva 

function agregarFila() {
  let nombre = document.getElementById("nombreInput").value;
  let titulo = document.getElementById("tituloInput").value;
  

  let tabla = document.getElementById("tabla");
  let fila = tabla.insertRow();

  let celdaNombre = fila.insertCell(0);
  celdaNombre.innerHTML = nombre;

  let celdatitulo = fila.insertCell(1);
  celdatitulo.innerHTML = titulo;


  datos.push[{
    "nombre": nombre,
    "definicion": titulo,
  }];

  document.getElementById("nombreInput").value = "";
  document.getElementById("tituloInput").value = "";

}

function vaciarTabla() {
  let tabla = document.getElementById("tabla");
  while (tabla.rows.length > 1) {
    tabla.deleteRow(1);
  }

  datos = [];
}

