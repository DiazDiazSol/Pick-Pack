<div class="container my-5">

    <h1 class="mb-4 fw-bold">Panel de Administración</h1>
    <p class="text-muted mb-4">Bienvenido/a al panel. Aquí encontrarás un resumen del estado general del sitio.</p>

    <div class="row g-4 mb-5">

        <div class="col-12 col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Productos</h5>
                    <p class="fs-3 fw-bold text-primary">
                        <?= Producto::total_productos(); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Categorías</h5>
                    <p class="fs-3 fw-bold text-success">
                        <?= Categoria::total_categorias(); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Productos sin imagen</h5>
                    <p class="fs-3 fw-bold text-danger">
                        <?= Producto::productos_sin_imagen(); ?>
                    </p>
                </div>
            </div>
        </div>

    </div>

    
    <h3 class="fw-bold mb-3">Accesos Rápidos</h3>
    <div class="row g-3 mb-5">

        <div class="col-12 col-md-4">
            <a href="index.php?sec=crear_producto" class="btn btn-primary w-100 py-3 fw-bold rounded-4">
                ➕ Agregar Producto
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a href="index.php?sec=productos" class="btn btn-outline-primary w-100 py-3 fw-bold rounded-4">
                📦 Ver Productos
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a href="index.php?sec=categoria" class="btn btn-outline-primary w-100 py-3 fw-bold rounded-4">
                🏷️ Administrar Categorías
            </a>
        </div>

    </div>

    <!-- Actividad Reciente -->
    <h3 class="fw-bold mb-3">Actividad Reciente</h3>

    <div class="card shadow-sm border-0 rounded-4">
    <div class="card-body">

        <?php $actividad = Producto::actividad_reciente(); ?>

        <?php if (!empty($actividad)) : ?>
            <ul class="list-group list-group-flush">
                <?php foreach ($actividad as $item) : ?>
                    <li class="list-group-item">
                        <span class="fw-bold">Producto:</span> <?= $item['nombre']; ?>
                        <small class="text-muted"> (ID: <?= $item['id']; ?>)</small>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p class="text-muted">No hay actividad registrada recientemente.</p>
        <?php endif; ?>

    </div>
</div>


</div>
