<?php
    namespace barbara\tarea;
    require_once 'Conexion.php';
    use PDO;
    use PDOException;

    class Operaciones extends Conexion {
        //Creamos el constructor para poder crear el objeto cuando lo necesitemos
        public function __contruct(){
            parent::__construct();
        }

       public function getPVP ($codigoProducto){
        //Creamos el objeto de la clase producto
        $producto = new Producto();
        //Le indicamos el ID que recibimos como parametro
        $producto->setId($codigoProducto);
        //Con el ID del objeto ya setteado en la clase llamamos a la funcion
        return $producto->getPVP();
       }
       
       public function getStock ($codigoProducto, $codTienda){
        //Creamos obeto de la clase stock
        $stock = new Stock();
        //Setteamos la info para poder llamar a la funcion de su clase
        $stock->setProducto($codigoProducto);
        $stock->setTienda($codTienda);
        //Llamamos a la funcion para que nos devuelva la respuesta
        return $stock->getStock();
       }

       public function getFamilias(){
        $familia = new Familia();
        return $familia->getCodFamilias();
       }

       public function getProductosFamilia ($codFamilia){
        $producto = new Producto();
        $producto->setFamilia($codFamilia);
        return $producto->getProdFamilia();
       }
    }
?>