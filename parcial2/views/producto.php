<?php
$id = $_GET['id'] ?? FALSE;
$producto = Producto::get_x_id((int)$id);

if (!$producto) {
    die("Producto no encontrado.");
}
?>

<div class="container my-5 pt-5">
    <div class="row">
        <div class="col-md-6">
            <?php if ($producto->getImagen()): ?>
                <img src="img/covers/<?= $producto->getImagen() ?>"
                    class=" rounded-4 img-fluid"
                    alt="Portada de <?= $producto->getNombre() ?>">
            <?php else: ?>
                <img src="../img/covers" class="img-fluid rounded" alt="Sin imagen">
            <?php endif; ?>
        </div>

        <div class="col-md-6">
            <h2 class="card-title mb-3 titulo"><?= $producto->getNombre() ?></h2>
            <h4 class="text-primary">$<?= number_format($producto->getPrecio(), 2, ',', '.'); ?></h4>

            <hr>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span class="fw-bold">Descripción:</span> <?= $producto->getDescripcion() ?>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Destinatario:</span> <?= $producto->getDestinatario() ?>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Personalizable:</span> <?= $producto->getPersonalizacion() ?>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Contenido:</span> <?= $producto->getContenido() ?>
                </li>
            </ul>

            <div class="mt-4">
                <a href="index.php?sec=catalogo_completo" class="btn btn-secondary">Volver</a>
                <button class="btn boton-ver ">Agregar al carrito</button>
            </div>
        </div>
    </div>
</div>