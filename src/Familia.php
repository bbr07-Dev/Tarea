<?php
    namespace barbara\tarea\src;

    use PDO;
    use PDOException;

    class Familia extends Conexion {
        //Atributos privados
        private $cod;
        private $nombre;
        //Constructor
        public function __construct(){
            parent::__construct();
        }
        //Setters
        public function setCod($c){
            $this->cod = $c;
        }
        public function setNombre($n){
            $this->nombre = $n;
        }

        //Funcion para obtener los codigos de todas las familias
        function getCodFamilias(){
            $consulta = 'SELECT cod FROM familias';
            $stmt = $this->conexion->prepare($consulta);
            try {
                $stmt->execute();
            } catch (PDOException $e){
                die("Error al intentar realizar la consulta, mensaje: " . $e->getMessage());
            }
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

    }


?>