<?php
    namespace barbara\tarea\src;

    use PDO;
    use PDOException;

    class Stock extends Conexion {
        //Atributos privados
        private $producto;
        private $tienda;
        private $unidades;
        //Constructor
        public function __construct(){
            parent::__construct();
        }
        //Setters
        public function setProducto ($p){
            $this->producto = $p;
        }
        public function setTienda ($t){
            $this->tienda = $t;
        }
        public function setUnidades ($u){
            $this->unidades = $u;
        }

        //Funcion para obtener el numero de unidades que quedan en una tienda
        function leetStock(){
            $consulta = 'SELECT unidades FROM stocks WHERE producto=:p AND tienda=:t';
            $stmt = $this->conexion->prepare($consulta);
            $stmt->bindParam(':p', $this->producto);
            $stmt->bindParam(':t', $this->tienda);
            try{
                $stmt->execute();
            } catch (PDOException $e){
                die("Error al realizar la consulta, mensaje: " . $e->getMessage());
            }
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }

?>