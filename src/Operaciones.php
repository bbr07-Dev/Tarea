<?php
    namespace barbara\tarea\src;
    require_once '../src/Conexion.php';
    require_once '../src/Producto.php';
    require_once '../src/Stock.php';
    require_once '../src/Familia.php';
    use PDO;
    use PDOException;

    class Operaciones extends Conexion {
        //Creamos el constructor para poder crear el objeto cuando lo necesitemos
        public function __contruct(){
            parent::__construct();
        }

        /**
         * @soap
         * @param int $codigoProducto
         * @return float
         */
       public function getPVP (int $codigoProducto) :float{
        //Creamos el objeto de la clase producto
        $producto = new Producto();
        //Le indicamos el ID que recibimos como parametro
        $producto->setId($codigoProducto);
        //Con el ID del objeto ya setteado en la clase llamamos a la funcion
        return $producto->leerPVP();
       }
        /**
         * @soap
         * @param int $codigoProducto
         * @param int $codTienda
         * @return int
         */       
       public function getStock (int $codigoProducto, int $codTienda) :int{
        //Creamos obeto de la clase stock
        $stock = new Stock();
        //Setteamos la info para poder llamar a la funcion de su clase
        $stock->setProducto($codigoProducto);
        $stock->setTienda($codTienda);
        //Llamamos a la funcion para que nos devuelva la respuesta
        return $stock->leetStock();
       }

        /**
         * @soap
         * @return int
         */  
       public function getFamilias() :int{
        $familia = new Familia();
        return $familia->getCodFamilias();
       }

        /**
         * @soap
         * @param int $codFamilia
         * @return int
         */   
       public function getProductosFamilia (int $codFamilia) :int{
        $producto = new Producto();
        $producto->setFamilia($codFamilia);
        return $producto->getProdFamilia();
       }
    }
?>