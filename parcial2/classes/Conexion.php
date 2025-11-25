<?PHP

/**
 * Clase para proveer la conexión de PDO al proyecto.
 */
class Conexion{

    private const DB_HOST = 'localhost';
    private const DB_USER = 'root';
    private const DB_PASS = '';
    private const DB_NAME = 'tienda';
    private const DB_CHARSER = 'utf8mb4';
    private const DB_DSN = 'mysql:host=' . self::DB_HOST . ';
    dbname=' . self::DB_NAME . ';charset=' . self::DB_CHARSER;
    
  
    private PDO $db;

    public function __construct()
    {
        try{
            $this->db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS);
        } catch (Exception $error){
            die("Error al conectar a la base de datos");
        }
        
    }

    public function getConexion():PDO{
        return $this->db;
    }
}
?>
