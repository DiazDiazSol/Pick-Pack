<?php
require_once("../../classes/Conexion.php");
require_once("../../classes/Categoria.php");

$id = $_GET['id'] ?? FALSE;

if(!$id){
    die("ID inválido.");
}

// Obtengo la categoría por ID
$categoria = Categoria::get_x_id((int)$id);

if(!$categoria){
    die("Categoría no encontrada.");
}

// Borro la categoría
$categoria->delete();

// Redirijo al listado de categorías
header('Location: ../index.php?sec=categoria');
exit;
