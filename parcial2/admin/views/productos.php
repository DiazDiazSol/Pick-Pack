<?php
$producto = new Producto;

$lista = $producto->catalogo_completo();
?>
<div class="d-flex align-items-center justify-content-between mt-4 mb-3  ">
  <h2 class="mt-4 mb-3">Administración de Productos</h2>
  <a href="?sec=crear_producto" class="btn btn-primary m-3  ">Crear Producto</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Categorías</th>
      <th>Descripción</th>
      <th>Contenido</th>
      <th>Personalización</th>
      <th>Destinatario</th>
      <th>Precio</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>

    <?php
    foreach ($lista as $producto) {
    ?>
      <tr>
        <td><?= $producto->getId(); ?></td>
        <td><img src="../img/covers/<?= $producto->getImagen();?>" alt="Foto de <?= $producto->getNombre();?>" style="width:150px;"></td>
        <td><?= $producto->getNombre(); ?></td>
        <td>
          <?php
          $categorias = $producto->getCategorias();

          if (!empty($categorias)) {
            foreach ($categorias as $cat) {
              echo "<span>" . $cat->getNombre() . "</span>";
            }
          } else {
            echo "<span class='text-muted'>Sin categoría</span>";
          }
          ?>
        </td>
        <td><?= $producto->getDescripcion(); ?></td>
        <td><?= $producto->getContenido(); ?></td>
        <td><?= $producto->getPersonalizacion(); ?></td>
        <td><?= $producto->getDestinatario(); ?></td>
        <td>$<?= number_format($producto->getPrecio(), 2, ',', '.'); ?></td>
        <td>
          <a href="?sec=editar_producto&id=<?= $producto->getId(); ?>" class="btn btn-warning mb-2">Editar</a>
          <a href="?sec=borrar_producto&id=<?= $producto->getId(); ?>" class="btn btn-danger">Borrar</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>