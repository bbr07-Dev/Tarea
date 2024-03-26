<?php
    namespace barbara\tarea;
    //Como usamos namespaces es necesaria la utilizacion de estos use para evitar errores
    use PDO;
    use PDOException;

   Class Conexion {
    //Atributos privados de la clase
    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $dsn;
    //Para poder llamar desde las clases que eredan
    protected $conexion;
    //Constructor para poder crear el objeto
    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'tarea6';
        $this->user = 'gestor';
        $this->pass = 'secreto';
        $this->dsn = "mysql:host={$this->host}; dbname={$this->dbname}; charset=ytf8mb4";
        $this->conexion = $this->crearConexion();
    }
    //Funcion para abrir conexion y capturar el error mediante bloque try-catch
    public function crearConexion(){
        try {
            $conexion = new PDO($this->dsn, $this->user, $this->pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            die("Error al abrir la conexion, mensaje: " . $e->getMessage());
        }
        return $conexion;
    }
   }

?>