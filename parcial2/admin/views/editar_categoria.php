<?php
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if($id === 0){
    die("ID inválido");
}

$categoria = Categoria::get_x_id($id);
?>

<div class="container my-4">
    <h2>Editar categoría</h2>
    <form action="actions/editar_categoria_acc.php" method="post">
        <input type="hidden" name="categoria_id" value="<?= $categoria->getCategoria_id(); ?>">

        <!-- NOMBRE -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de categoría</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= htmlspecialchars($categoria->getNombre()); ?>" required>
        </div>

        <!-- TÍTULO -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título de categoría</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= htmlspecialchars($categoria->getTitulo()); ?>" required>
        </div>

        <input type="submit" class="btn btn-warning" value="Editar">
        <a href="?sec=categoria" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
