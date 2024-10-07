<?php
/*
    Escribe un script para probar algunas de las funciones mostradas debajo, el sript
    ha de contener al menos tres funciones de cada bloque
*/

echo "<h1>Funciones de variables</h1> <br>";
$var = "hola";
echo isset($var)."<br>";
$var = null;
echo is_null($var)."<br>";
$var = false;
echo empty($var)."<br>";

echo "<h1>Funciones de cadenas</h1> <br>";
$cad = "1234";
echo strlen($cad)."<br>";
$cad = "Hola_q_tal";
$token = "_";
$array = explode($token, $cad);
echo var_dump($array)."<br>";
$txt = implode($token, $array);
echo $txt."<br>";

echo "<h1>Funciones de array</h1> <br>";
$arr = array(5,3,2);
sort($arr);
echo var_dump($arr)."<br>";
$arr = array("size" => "XL", "color" => "gold");
$val = array_values($arr);
echo var_dump($val)."<br>";
echo  count($arr);


?>