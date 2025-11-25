<?php
$categorias = new Categoria;
$lista = $categorias->listado_completo();
?>

<div class="d-flex align-items-center justify-content-between mt-4 mb-3  ">
    <h2 class="mt-4 mb-3">Administración de Categorías</h2>
    <a href="?sec=crear_categoria" class="btn btn-primary m-3">Crear Categoría</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Título</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lista as $categoria): ?>
            <tr>
                <td><?= $categoria->getCategoria_id(); ?></td>
                <td><?= $categoria->getNombre(); ?></td>
                <td><?= $categoria->getTitulo(); ?></td>
                <td>
                    <a href="?sec=editar_categoria&id=<?= $categoria->getCategoria_id(); ?>" class="btn btn-warning">Editar</a>
                    <a href="?sec=borrar_categoria&id=<?= $categoria->getCategoria_id(); ?>" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>