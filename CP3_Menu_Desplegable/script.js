let carrito = [];

function agregarAlCarrito(id) {
    const producto = {
        1: "Laptop HP",
        2: "Mouse Logitech",
        3: "Teclado Mecánico"
    };

    if (producto[id]) {
        carrito.push(producto[id]);
        mostrarCarrito();
    }
}

function mostrarCarrito() {
    const lista = document.getElementById("carrito");
    lista.innerHTML = "";

    carrito.forEach((item, index) => {
        const li = document.createElement("li");
        li.textContent = item;
        lista.appendChild(li);
    });
}
