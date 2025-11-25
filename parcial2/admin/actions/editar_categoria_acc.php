<?php
require_once("../../classes/Conexion.php");
require_once("../../classes/Categoria.php");

$postData = $_POST;

// Obtengo la categoría por ID
$categoria = Categoria::get_x_id((int)$postData["categoria_id"]);

if(!$categoria){
    die("Categoría no encontrada.");
}

// Capturo ambos campos del formulario
$nombre = $postData['nombre'] ?? '';
$titulo = $postData['titulo'] ?? '';

if(empty($nombre) || empty($titulo)){
    die("Faltan datos obligatorios.");
}

// Actualizo la categoría
$categoria->edit($nombre, $titulo);

// Redirijo al listado de categorías
header('Location: ../index.php?sec=categoria');
exit;
