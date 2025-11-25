<div class="container my-4">
    <h2>Agregar una nueva categoría</h2>
    <form action="actions/crear_categoria_acc.php" method="post">

        <!-- NOMBRE -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de categoría</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <!-- TÍTULO -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título de categoría</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        
        <input type="submit" class="btn btn-success" value="Crear">
        <a href="?sec=categoria" class="btn btn-danger">Cancelar</a>
    </form>
</div>
