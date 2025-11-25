<?php
$categoria = new Categoria;
$lista = $categoria->listado_completo();
?>
<h2>Agregar un nuevo producto</h2>
<form action="actions/crear_producto_acc.php" method="post" enctype="multipart/form-data">

    <!-- NOMBRE -->
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de Producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>

    <!-- CATEGORIA -->
    <div class="mb-3">
        <label for="Id" class="form-label">Categoria</label>
        <select class="form-select" aria-label="Default select example" name="Id">
            <option selected>Seleccione una categoria</option>
            <?php
            foreach ($lista as $categoria) {
            ?>
                <option value="<?= $categoria->getCategoria_id(); ?>"><?= $categoria->getTitulo(); ?></option>
            <?php
            }
            ?>
        </select>
    </div>

    <!-- DESCRIPCION -->
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>

    <!-- CONTENIDO -->
    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido</label>
        <input type="text" class="form-control" id="contenido" name="contenido">
    </div>

    <!-- PERSONALIZACION -->
    <div class="mb-3">
        <label for="personalizacion" class="form-label">Personalización</label>
        <select class="form-select" id="personalizacion" name="personalizacion">
            <option selected disabled>Seleccione nivel</option>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
        </select>
    </div>

    <!-- DESTINATARIO -->
    <div class="mb-3">
        <label for="destinatario" class="form-label">Destinatario</label>
        <select class="form-select" id="destinatario" name="destinatario">
            <option selected disabled>Seleccione destinatario</option>
            <option value="Para ella">Para ella</option>
            <option value="Para él">Para él</option>
            <option value="Unisex">Unisex</option>
        </select>
    </div>

    <!-- PRECIO -->
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio">
    </div>

    <!-- IMAGEN -->
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input class="form-control" type="file" id="imagen" name="imagen">
    </div>

    <input type="submit" class="btn btn-success" value="Crear">
    <a href="?sec=productos" class="btn btn-danger">Cancelar</a>
</form>