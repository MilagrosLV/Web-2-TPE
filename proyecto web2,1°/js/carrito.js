document.addEventListener('DOMContentLoaded', function () {
    const carrito = [];
    let total = 0;
    const listaCarrito = document.getElementById('lista-carrito');
    const totalSpan = document.getElementById('total');
    const vaciarCarritoButton = document.getElementById('vaciar-carrito');

    const agregarBotones = document.querySelectorAll('.agregar');
    agregarBotones.forEach((boton) => {
        boton.addEventListener('click', agregarProducto);
    });

    vaciarCarritoButton.addEventListener('click', vaciarCarrito);

    function agregarProducto(event) {
        const nombre = event.target.dataset.nombre;
        const precio = parseFloat(event.target.dataset.precio);

        carrito.push({ nombre, precio });
        total += precio;

        const nuevoElemento = document.createElement('li');
        nuevoElemento.textContent = `${nombre} - $${precio}`;
        listaCarrito.appendChild(nuevoElemento);

        totalSpan.textContent = total;
    }

    function vaciarCarrito() {
        carrito.length = 0;
        total = 0;
        listaCarrito.innerHTML = '';
        totalSpan.textContent = total;
    }
});
