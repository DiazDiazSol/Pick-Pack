<?PHP
class Categoria
{

    private $categoria_id;
    private $nombre;
    private $titulo;


    public static function listado_completo(): array
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM categoria";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $lista = $PDOStatement->fetchAll();

        return $lista;
    }

    public static function total_categorias(): int
    {
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT COUNT(*) AS total FROM categoria";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute();

        $resultado = $PDOStatement->fetch(PDO::FETCH_ASSOC);

        return (int)$resultado['total'];
    }

    public static function get_x_id(int $id): ?Categoria
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM categoria WHERE categoria_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(["id" => $id]);


        $lista = $PDOStatement->fetch();

        return !empty($lista) ? $lista : null;
    }

    public static function insert(string $nombre, string $titulo)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "INSERT INTO categoria (nombre, titulo) VALUES (:nombre, :titulo)";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'nombre' => $nombre,
            'titulo' => $titulo
        ]);
    }

    public static function getPorProducto(int $producto_id): array
    {
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT c.*
              FROM categoria c
              JOIN producto_categoria pc ON pc.categoria_id = c.categoria_id
              WHERE pc.producto_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(['id' => $producto_id]);

        return $PDOStatement->fetchAll();
    }

    public function edit(string $nombre, string $titulo)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "UPDATE categoria 
              SET nombre = :nombre, titulo = :titulo
              WHERE categoria_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            "nombre" => $nombre,
            "titulo" => $titulo,
            "id"     => $this->categoria_id
        ]);
    }

    public function delete()
    {
        $conexion = (new Conexion())->getConexion();
        $query = "DELETE FROM categoria WHERE categoria_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            "id" => $this->categoria_id
        ]);
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function getTitulo()
    {
        return $this->titulo;
    }


    public function getCategoria_id()
    {
        return $this->categoria_id;
    }
}
