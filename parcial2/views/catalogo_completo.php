<?php
$catalogo = Producto::catalogo_completo();
?>

<article class=" d-flex justify-content-center bg-productos  ">
    <div>
        <h1 class="titulo text-center mb-5 pt-3 mt-5">Cajas Tematicas</h1>
        <div class="container">
            <div class="row">
                <?php if (!empty($catalogo)) {
                    foreach ($catalogo as $producto) { ?>
                        <article class="col-12 col-md-4">
                            <div class="card mb-3 rounded-4">
                                <img src="img/covers/<?= $producto->getImagen() ?>"
                                    class="card-img-top rounded-4"
                                    alt="Portada de <?= $producto->getNombre() ?>">

                                <div class="card-body">
                                    <h2 class="card-title fs-4 titulo"><?= $producto->getNombre() ?></h2>
                                    <p class="card-text"><?= $producto->getDescripcion() ?></p>
                                </div>

                                <ul class="list-group list-group-flush">
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

                                <div class="card-body">
                                    <div class="fs-3 mb-3 fw-bold text-center titulo">
                                        <?= $producto->getPrecio() ?>
                                    </div>

                                    <a href="index.php?sec=producto&id=<?= $producto->getId() ?>"
                                        class="btn boton-ver w-100 fw-bold">
                                        VER MÁS
                                    </a>
                                </div>
                            </div>
                        </article>
                <?php
                    }
                } else {
                    echo "<p>No hay productos disponibles.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</article>