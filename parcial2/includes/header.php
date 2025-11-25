<?php
$categoria = new Categoria();
$lista = $categoria->listado_completo();
?>

<nav class="navbar navbar-expand-lg navbar-light py-2 fixed-top ">
    <div class="container-fluid ">

        <a href="index.php?sec=home" class="navbar-brand  ">
            <img src="img/logo/Logo-Pick&Pack.webp" alt="Logo" style="height: 70px; padding-left: 30px">
        </a>


        <!-- BOTÓN PARA DISPOSITIVOS PEQUEÑOS -->
        <button class="navbar-toggler ms-auto " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?sec=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?sec=nosotros">Sobre nosotros</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?sec=catalogo_completo">Catálogo Completo</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($lista as $categoria): ?>
                            <li>
                                <a class="dropdown-item"
                                    href="index.php?sec=catalogo_x_categoria&cat=<?= $categoria->getCategoria_id() ?>">
                                    <?= $categoria->getNombre() ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?sec=carrito">
                        <i class="fa-solid fa-cart-shopping"></i> 
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?sec=formulario">Envios</a>
                </li>
            </ul>
        </div>
    </div>
    <style>
        body {
            padding-top: 92px !important;
        }
    </style>
</nav>