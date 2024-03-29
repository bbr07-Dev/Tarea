<?php
    $url = 'http://localhost/xampp/Tarea/servidorSoap/servicio.wsdl';
    $paramProducto = ['codProducto'=>1];

    try {
        ini_set("soap.wsdl_cache_enabled", "0");
        //Cremos objeto cliente
        $cliente = new SoapClient($url);
    } catch (SoapFault $e){
        echo "Error, mensaje: " . $e->getMessage();
    }

    //Pasamos los datos directamente a los objetos para hacer el programa mas pequeño
    
    //PROBAMOS PRIMERA FUNCION DEL ENUNCIADO
    $pvpProducto = $cliente->getPVP(1);
    // $pvpProducto = $cliente->__soapCall('getPVP', $paramProducto);
    echo "El PVP del producto numero " . 1 . " es " . $pvpProducto . "€";

    //PROBAMOS SEGUNDA FUNCION DEL ENUNCIADO
    // $stockExistente = $cliente->getStock(1,1);
    $stockExistente = $cliente->__soapCall('getStock', array(0=>1, 1=>1));
    echo "\nEl numero de unidades del producto con ID " . 1 . "en la tienda " . 1 . " es de " . $stockExistente . "Unidades";

    //PROBAMOS TERCERA FUNCION DEL ENUNCIADO
    $familias = $cliente->getFamilias();
    echo "\nLas familias obtenidas son: ";
    for($i = 0 ; $i <= count($familias) - 1 ; $i++){
        echo "\n" . $familias[$i]->cod;
    }
    
    //PROBAMOS CUARTA FUNCION DEL ENUNCIADO
    $productosFamilia = $cliente->getProductosFamilia('CAMARA');
    echo "\nLos productos que pertenecen a la familia CAMARA son: ";
    for($j = 0 ; $j <= count($productosFamilia) - 1 ; $j++){
        echo "\n" . $productosFamilia[$j]->id;
    }

?>