<?php
    require '../vendor/autoload.php';

    use Barbara\Tarea\Clases1\BarbaraTareaOperacionesService;

    $service = new BarbaraTareaOperacionesService();

    echo "El PVP del producto numero " . 1 . " es " . $service->getPVP(1) . "€";
    echo "<br>";
    echo "\nEl numero de unidades del producto con ID " . 1 . "en la tienda " . 1 . " es de " . $service->getStock(1,1) . "Unidades";
    echo "<br>";
    $familias = $service->getFamilias();
    echo "\nLas familias obtenidas son: ";
    for($i = 0 ; $i <= count($familias) - 1 ; $i++){
        echo "\n" . $familias[$i]->cod;
    }
    echo "<br>";
    $productosFamilia = $service->getProductosFamilia('CAMARA');
    echo "\nLos productos que pertenecen a la familia CAMARA son: ";
    for($j = 0 ; $j <= count($productosFamilia) - 1 ; $j++){
        echo "\n" . $productosFamilia[$j]->id;
    }

?>