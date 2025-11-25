<?php
$id = $_GET['id'] ?? FALSE;
$categoria = Categoria::get_x_id((int)$id);

if(!$categoria){
    die("Categoría no encontrada.");
}
?>

<div class="container my-4">
    <h2>Borrar categoría</h2>
    <div class="row">
        <div class="col-12">
            <h5>Nombre de categoría:</h5>
            <p><?= htmlspecialchars($categoria->getNombre()); ?></p>
        </div>
        <div class="col-12">
            <h5>Título:</h5>
            <p><?= htmlspecialchars($categoria->getTitulo()); ?></p>
        </div>
        <div class="col-12 mt-3">
            <a href="actions/borrar_categoria_acc.php?id=<?= $categoria->getCategoria_id(); ?>" class="btn btn-danger">Eliminar</a>
            <a href="?sec=categoria" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
