<?PHP
class Producto
{
    private $id;
    private $nombre;
    private $descripcion;
    private $contenido;
    private $personalizacion;
    private $destinatario;
    private $imagen;
    private $precio;

    public static function catalogo_completo(): array
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM producto";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $catalogo = $PDOStatement->fetchAll();
        return $catalogo;
    }

    public static function total_productos()
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT COUNT(*) FROM producto";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute();

        return $PDOStatement->fetchColumn();
    }

    public static function productos_sin_imagen()
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT COUNT(*) FROM producto WHERE imagen = '' OR imagen IS NULL";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute();

        return $PDOStatement->fetchColumn();
    }

    public static function actividad_reciente()
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT id, nombre FROM producto ORDER BY id DESC LIMIT 5";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute();

        return $PDOStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function get_x_id(int $id): ?Producto
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM producto WHERE id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(["id" => $id]);

        $producto = $PDOStatement->fetch();

        return !empty($producto) ? $producto : null;
    }

    public static function productos_x_categoria(int $categoria_id): array
    {
        $conexion = (new Conexion())->getConexion();
        $query = "
            SELECT p.*
            FROM producto p
            INNER JOIN producto_categoria pc ON pc.producto_id = p.id
            WHERE pc.categoria_id = :categoria_id
        ";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(['categoria_id' => $categoria_id]);

        return $PDOStatement->fetchAll();
    }


    public function getCategorias(): array
    {
        return Categoria::getPorProducto($this->id);
    }

    public static function insert(string $nombre, string $descripcion, string $contenido, string $personalizacion, string $destinatario, string|null $imagen, float $precio)
    {
        $conexion = (new Conexion())->getConexion();

        $query = "INSERT INTO producto 
        (nombre, descripcion, contenido, personalizacion, destinatario, imagen, precio)
        VALUES (:nombre, :descripcion, :contenido, :personalizacion, :destinatario, :imagen, :precio)";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'contenido' => $contenido,
            'personalizacion' => $personalizacion,
            'destinatario' => $destinatario,
            'imagen' => $imagen,
            'precio' => $precio
        ]);

        // devolvemos el ID generado
        return $conexion->lastInsertId();
    }

    public static function asignar_categoria(int $producto_id, int $categoria_id)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "INSERT INTO producto_categoria (producto_id, categoria_id)
              VALUES (:producto_id, :categoria_id)";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'producto_id' => $producto_id,
            'categoria_id' => $categoria_id
        ]);
    }

    public function edit(string $nombre, string $descripcion, string $contenido, string $personalizacion, string $destinatario, string $imagen, float $precio)
    {
        $conexion = (new Conexion())->getConexion();

        $query = "UPDATE producto SET
                nombre = :nombre,
                descripcion = :descripcion,
                contenido = :contenido,
                personalizacion = :personalizacion,
                destinatario = :destinatario,
                imagen = :imagen,
                precio = :precio
              WHERE id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'contenido' => $contenido,
            'personalizacion' => $personalizacion,
            'destinatario' => $destinatario,
            'imagen' => $imagen,
            'precio' => $precio,
            'id' => $this->id
        ]);
    }

    public function delete(): bool
    {
        $conexion = (new Conexion())->getConexion();

        $query = "DELETE FROM producto WHERE id = :id";
        $PDOStatement = $conexion->prepare($query);

        return $PDOStatement->execute(['id' => $this->id]);
    }

    // GETTER --------------------------------

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getPersonalizacion()
    {
        return $this->personalizacion;
    }

    public function getDestinatario()
    {
        return $this->destinatario;
    }

    public function getImagen()
    {
        if(is_null($this->imagen)){
            return "defecto.png";
        }else{
            return $this->imagen;
        }
    }

    public function getPrecio()
    {
        return $this->precio;
    }


    // SETTER --------------------------------


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function setPersonalizacion($personalizacion)
    {
        $this->personalizacion = $personalizacion;
    }

    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
}
