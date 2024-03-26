<?php
  // Incluye la clase Conexion
    require "../src/Conexion.php";

    // // Incluye la clase Producto
    require "../src/Producto.php";

        // // Incluye la clase operaciones
        require "../src/Operaciones.php";

    // //Recupreamos los productos
    $productos = new barbara\tarea\src\Producto();
    $productos->setId(1);
    $resultado = $productos->leerPVP();
    echo $resultado[0]->pvp;
    //Recuperamos products desde operaciones
    $operacion = new barbara\tarea\src\Operaciones();
    $resultado1 = $operacion->getPVP(1);
    echo "<br>";
    echo $resultado1[0]->pvp;

?>