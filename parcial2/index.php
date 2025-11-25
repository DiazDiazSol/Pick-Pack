<?PHP
require_once 'classes/Conexion.php';
require_once 'classes/Producto.php';
require_once 'classes/Pagina.php';
require_once 'classes/Categoria.php';

$conexion = (new Conexion())->getConexion();

$seccion = isset($_GET['sec']) ? $_GET['sec'] : "home";
$pagina = Pagina::validar_pagina($seccion);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pich & Pack - <?= $pagina->getTitulo() ?></title>
    <link rel="icon" href="img/logo/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php
        require_once "includes/header.php";
        
    ?>
    <main>
        <?PHP
        require_once "views/{$pagina->getNombre()}.php";
        ?>
    </main> 
    <?php
        require_once "includes/footer.php";
    ?>   
</body>
</html>