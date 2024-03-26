<?php
    $url = 'http://localhost:3000/servidorSoap/servicio.php';
    $uri = 'http://localhost:3000/servidorSoap';
    $paramProducto = ['codProducto'=>1];

    try {
        //Cremos objeto cliente
        $cliente = new SoapClient(null, ['location'=>$url, 'uri'=>$uri, 'trace'=>true]);
    } catch (SoapFault $e){
        echo "Error, mensaje: " . $e->getMessage();
    }

    $pvpProducto = $cliente->getPVP(1);
    // $pvpProducto = $cliente->__soapCall('getPVP', $paramProducto);
    echo "El PVP del producto numero " . 1 . " es " . $pvpProducto[0]->pvp . "€";
?>