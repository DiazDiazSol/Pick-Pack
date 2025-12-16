<?php 
$id = $_GET['id'] ?? FALSE;

$producto = Producto::get_x_id($id);

// Traemos todas las categorías
$categoria = new Categoria();
$lista = $categoria->listado_completo();

?>

<h2 class="mt-4 mb-3">Editar producto</h2>

<form action="actions/editar_producto_acc.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $producto->getId(); ?>">

    <!-- NOMBRE -->
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de Producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" 
               value="<?= $producto->getNombre(); ?>">
    </div>

    <!-- CATEGORÍAS -->
    <div class="mb-3">
        <label for="categoria_id" class="form-label">Categoría</label>
        <select class="form-select" aria-label="Elija una categoria" name="categoria_id">
                <option selected>Seleccione una categoria</option>
                <?php 
                foreach ($lista as $categoria) { 
                ?>
                <option value="<?= $categoria->getId(); ?>" <?php

                    if ($producto->getCategorias()) {
                        foreach ($producto->getCategorias() as $producto_categoria){
                            if ($categoria->getId() == $producto_categoria->getId()) {
                                echo "selected";
                            }else{
                                echo "";
                            }
                        }
                    }
                    ?>
                    ><?=  $categoria->getNombre(); ?></option>
                <?php 
                } 
                ?>
        </select>
    </div>

    <input type="checkbox" id="categoria<?= $categoria->getCategoria_id(); ?>" name="categorias[]" value="<?= $categoria->getCategoria_id(); ?>">
    <label for="categoria<?= $categoria->getCategoria_id(); ?>"><?= $categoria->getNombre(); ?></label>

    <!-- DESCRIPCIÓN -->
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion"
               value="<?= $producto->getDescripcion(); ?>">
    </div>

    <!-- CONTENIDO -->
    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido</label>
        <input type="text" class="form-control" id="contenido" name="contenido"
               value="<?= $producto->getContenido(); ?>">
    </div>

    <!-- PERSONALIZACION -->
    <div class="mb-3">
        <label for="personalizacion" class="form-label">Personalización</label>
        <select class="form-select" id="personalizacion" name="personalizacion">
            <option value="Alta"   <?= $producto->getPersonalizacion() == "Alta" ? "selected" : "" ?>>Alta</option>
            <option value="Media"  <?= $producto->getPersonalizacion() == "Media" ? "selected" : "" ?>>Media</option>
            <option value="Baja"   <?= $producto->getPersonalizacion() == "Baja" ? "selected" : "" ?>>Baja</option>
        </select>
    </div>

    <!-- DESTINATARIO -->
    <div class="mb-3">
        <label for="destinatario" class="form-label">Destinatario</label>
        <select class="form-select" id="destinatario" name="destinatario">
            <option value="Para ella" <?= $producto->getDestinatario() == "Para ella" ? "selected" : "" ?>>Para ella</option>
            <option value="Para él"   <?= $producto->getDestinatario() == "Para él" ? "selected" : "" ?>>Para él</option>
            <option value="Unisex"    <?= $producto->getDestinatario() == "Unisex" ? "selected" : "" ?>>Unisex</option>
        </select>
    </div>

    <!-- PRECIO -->
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" 
               value="<?= $producto->getPrecio(); ?>">
    </div>

    <!-- IMAGEN -->
    <div class="mb-3">
        <label class="form-label">Imagen actual</label><br>
        <img src="../../img/covers/<?= $producto->getImagen(); ?>" 
             alt="Portada" width="150" class="rounded mb-2">
    </div>

    <!-- CAMBIAR IMAGEN -->
    <div class="mb-3">
        <label for="imagen" class="form-label">Cambiar imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen">
    </div>

    <input type="submit" class="btn btn-warning" value="Editar">
    <a href="?sec=productos" class="btn btn-danger">Cancelar</a>

</form>
