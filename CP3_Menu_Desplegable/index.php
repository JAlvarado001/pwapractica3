<?php
// Arreglo de productos
$productos = [
    [
        "id" => 1,
        "nombre" => "Laptop HP",
        "descripcion" => "Laptop con procesador Intel i5, 8GB RAM.",
        "precio" => 750,
        "imagen" => "https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c07964208.png"
    ],
    [
        "id" => 2,
        "nombre" => "Mouse Logitech",
        "descripcion" => "Mouse inalámbrico ergonómico.",
        "precio" => 25,
        "imagen" => "https://nomadaware.com.ec/wp-content/uploads/2020/09/NomadaWare_mouse_logitech_g502.1.jpg"
    ],
    [
        "id" => 3,
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado con switches rojos RGB.",
        "precio" => 60,
        "imagen" => "https://http2.mlstatic.com/D_NQ_NP_808723-MLA74780663109_022024-O.web"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda en Línea</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Clase Practica 3 - Tienda de Productos</h1>
    <div class="productos">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <img src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                <h2><?= $producto['nombre'] ?></h2>
                <p><?= $producto['descripcion'] ?></p>
                <p><strong>$<?= $producto['precio'] ?></strong></p>
                <button onclick="agregarAlCarrito(<?= $producto['id'] ?>)">Agregar al carrito</button>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Carrito de Compras</h2>
    <ul id="carrito"></ul>

    <script src="script.js"></script>
</body>
</html>
