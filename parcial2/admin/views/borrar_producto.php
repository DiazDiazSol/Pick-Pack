<?php
$id = $_GET['id'] ?? FALSE;
$producto = Producto::get_x_id($id);

if (!$producto) {
    echo '<div class="alert alert-warning">Producto no encontrado.</div>';
    return;
}
?>

<div class="container my-4">
    <h2 class="mb-4">Borrar producto</h2>

    <div class="card border-danger">
        <div class="card-header bg-danger text-white">
            <strong>¡Atención!</strong> Estás a punto de eliminar este producto.
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> <?= htmlspecialchars($producto->getNombre()); ?></p>
            <p><strong>Descripción:</strong> <?= htmlspecialchars($producto->getDescripcion()); ?></p>
            <p><strong>Precio:</strong> $<?= number_format($producto->getPrecio(), 2, ',', '.'); ?></p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="actions/borrar_producto_acc.php?id=<?= $producto->getId(); ?>" class="btn btn-danger">Eliminar</a>
            <a href="?sec=productos" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
