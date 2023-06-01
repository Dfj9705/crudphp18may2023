<?php

$nit = $_GET['nit'];

$tamanio = strlen($nit);
$validador = $nit[$tamanio-1];
$validador = strtolower( $validador ) == 'k' ? 10 : $validador;
$posicion = 2;
$suma = 0;
for($i = $tamanio -  2; $i >= 0 ; $i--){

    $suma += $nit[$i] * $posicion;
    echo $nit[$i] . "pos: " . $posicion;
    echo "<br>";
    $posicion++;
}
echo "suma" . $suma;
echo "<br>";
$residuo = $suma % 11;
echo "residuo" . $residuo;
echo "<br>";
$residuo2 = $residuo % 11;
echo "residuo2" . $residuo2;
echo "<br>";
$resta = 11 - $residuo2;
echo "resta" . $resta;
echo "<br>";
echo $resta == $validador ? "SI ES VALIDO" : " NO ES VALIDO";
