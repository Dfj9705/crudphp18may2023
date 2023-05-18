<?php

require '../../modelos/Producto.php';

try {
    $producto = new Producto($_POST);
    $resultado = $producto->guardar();
    var_dump($resultado);
} catch (PDOException $e) {
    echo $e->getMessage();
}


