<?php
require_once("../../classes/Conexion.php");
require_once("../../classes/Categoria.php");

$postData = $_POST;

// Capturar ambos campos
$nombre = $postData['nombre'] ?? '';
$titulo = $postData['titulo'] ?? '';

// Validar
if(empty($nombre) || empty($titulo)){
    die("Faltan datos obligatorios.");
}

// Insertar nueva categoría
Categoria::insert($nombre, $titulo);

// Redirigir al listado
header('Location: ../index.php?sec=categoria');
exit;
