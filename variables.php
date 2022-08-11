<?php

#Variable Numérica
$numero = 5;
echo "esto es una variable Número: $numerro<br>";
var_dump($numero); #muestra el tipo de variable
echo "<br><br>"; #impime un espacio en pantalla.

#Variable texto
$palabra = "un texto cualquiera";
echo "esto es una variable de texto: $palabra<br>";
var_dump($palabra);#muestra el tipo de variable
echo "<br><br>"; #impime un espacio en pantalla.

#Variable Boleana
$boleana = true;
echo "esto es una variable boleana: $boleana";
var_dump($boleana);#muestra el tipo de variable
echo "<br><br>"; #impime un espacio en pantalla.

#Variable Arreglo
$colores = array("rojo","amarillo","violeta")
echo "esto es una variable arreglo: $colores[1]";
var_dump($colores);#muestra el tipo de variable
echo "<br><br>"; #impime un espacio en pantalla.

#Variable Arreglo con propiedades
$verduras = array("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura2]";
var_dump($colores);#muestra el tipo de variable
echo "<br><br>"; #impime un espacio en pantalla.

?>