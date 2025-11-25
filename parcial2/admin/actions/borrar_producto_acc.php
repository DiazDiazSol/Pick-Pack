<?php
require_once("../../classes/Conexion.php");
require_once("../../classes/Producto.php");
// require_once("../classes/Imagen.php");

$id = $_GET['id'] ?? FALSE;
// echo "<pre>";
// print_r($id);
// echo "</pre>";


try{
    $producto = new Producto();
    $producto = $producto->get_x_id($id);
    echo "<pre>";
    print_r($producto);
    echo "</pre>";
    $producto->delete();
}catch (Exception $e) {
    die("No se pudo elimiar el producto.");
}
header('Location: ../index.php?sec=productos');


// try{
//     $producto = Producto::get_x_id($id);
//     $producto->delete();
//     Imagen::borrarImagen("../../img/productos/" . $producto->getFoto());

// }catch (Exception $e){
//     die("No se pudo borrar el producto.");
// }


?>