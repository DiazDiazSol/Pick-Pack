<?php
require_once("../../classes/Conexion.php");
require_once("../../classes/Producto.php");
require_once("../classes/Imagen.php");

$postData = $_POST;
$datosArchivo = $_FILES['imagen']; 


try {
    // Subimos la imagen
if(!empty($datosArchivo['tmp_name'])){
        $imagen = Imagen::subirImagen("../../img/covers", $datosArchivo);
    }else{
        $imagen = null;
    }


    $producto_id = Producto::insert(
        $postData['nombre'],          // OK
        $postData['descripcion'],     // OK
        $postData['contenido'],       // OK
        $postData['personalizacion'], // OK
        $postData['destinatario'],    // OK
        $imagen,                      // OK
        (float)$postData['precio']    // OK
);

Producto::asignar_categoria($producto_id, (int)$postData['Id']);

} catch (Exception $e) {
    die("Error al crear el producto: " . $e->getMessage());
}

header('Location: ../index.php?sec=productos');
exit;
?>
