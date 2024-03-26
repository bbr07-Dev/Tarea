<?php

    namespace barbara\tarea;
    
    use PDO;
    use PDOException;

    class Producto extends Conexion {
        //Variables del producto al que accedemos
        private $id;
        private $nombre;
        private $nombreCorto;
        private $descripcion;
        private $pvp;
        private $familia;
        //Constructor
        public function __construct(){
            parent::__construct();
        }
        //Setters
        public function setId($i){
            $this->id = $i;
        }
        public function setNombre($nom){
            $this->nombre = $nom;
        }
        public function setNombreCorto($nomCor){
            $this->nombreCorto = $nomCor;
        }
        public function setDescripcion($deasc){
            $this->descripcion = $desc;
        }
        public function setPVP($p){
            $this->pvp = $p;
        }
        public function setFamilia($fam){
            $this->familia = $fam;
        }

        //Consulta para obtener el PVP de un producto
        function leerPVP(){
            $consulta = 'SELECT pvp FROM productos WHERE id=:i';
            $stmt = $this->conexion->prepare($consulta);
            $stmt->bindParam(':i', $this->id);
            try{
                $stmt->execute();
            } catch (PDOException $e){
                die("Error al recuperar el producto: " .$e->getNessage());
            }
            
            $respuesta = $stmt->fetchAll(PDO:FETCH_OBJ);
            $_SESSION['respuesta1'] = $respuesta;
            return $respuesta;
        }

        //Funcion para devolver todos los productos de una familia
        function getProdFamilia (){
            $consulta = 'SELECT id FROM productos WHERE familia=:f';
            $stmt = $this->conexion->prepare($consulta);
            $stmt->bindParam(':f', $familia);
            try{
                $stmt->execute();
            } catch (PDOException $e){
                die("Error al intentar realizar la consulta, mensaje: " . $e->getMessage());
            }
            return $stmt;
        }
    }


?>