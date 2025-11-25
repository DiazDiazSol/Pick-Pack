<?php
require_once("../../classes/Conexion.php");
require_once("../../classes/Producto.php");

$postData = $_POST;

// 1. Busco el producto real por ID
$producto = Producto::get_x_id((int)$postData["id"]);

if (!$producto) {
    die("El producto no existe.");
}

// 2. Manejar la imagen
$imagen = $producto->getImagen(); // imagen actual por defecto

if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0){

    // Carpeta correcta donde se cargan las imágenes
    $uploadsDir = __DIR__ . '/../../img/covers/';

    if(!is_dir($uploadsDir)) mkdir($uploadsDir, 0777, true);

    // Nombre único
    $nombreImagen = time() . "_" . basename($_FILES['imagen']['name']);

    // Nueva ruta en la BD
    $imagen = $nombreImagen;

    // Mover archivo a la carpeta real
    move_uploaded_file($_FILES['imagen']['tmp_name'], $uploadsDir . $nombreImagen);
}

// 3. Editar usando los datos del formulario
$producto->edit(
    $postData["nombre"],
    $postData["descripcion"],
    $postData["contenido"] ?? '',
    $postData["personalizacion"] ?? '',
    $postData["destinatario"] ?? '',
    $imagen,
    (float)$postData["precio"]
);

// 4. Redirijo de vuelta al listado
header('Location: ../index.php?sec=productos');
exit;
?>
