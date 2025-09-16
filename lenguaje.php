<?php
//Sacado de https://aitor-medrano.github.io/dwes2122/02php.html

// COMENTARIOS
// Este es un comentario de una sola línea

/*
  Este es
  un comentario
  que ocupa
  varias líneas
*/ 

// Control K + Control C para comentar
// Control K + Control U para descomentar


// ERRORES
// Fatal error: Uncaught Error: Call to undefined function plint() in C:\xampp\htdocs\202echo.php:11
//  Stack trace:
//  #0 {main}
//     thrown in C:\xampp\htdocs\202echo.php on line 11


// VARIABLES
$nombre = "Aitor";
$nombreCompleto = "Aitor Medrano";
$numero = 123;
$numero2 = 456;
$pi = 3.14;
$suerte = true;
$sinValor;

echo $sinValor;

// CONSTANTES
define("PI", 3.1416);
const IVA = 0.21;

echo PI, " ", IVA; // No se pone el símbolo dolar

// Aunque a priori no hay tipos de datos, internamente PHP trabaja con cuatro tipos escalares: boolean, integer, float y string y cuatro tipos compuestos: array, object, callable e iterable.


// CONCATENACIÓN
// En el caso de cadenas, si queremos concatenarlas, se utiliza el operador .:
$x = 33;
$y = 11;
$z = $x + $y;
echo "La suma de 33 y 11 es ".$z."<br />";
echo "La suma de ".$x." y ".$y." es ".(33 + 11)."<br />";
echo "La suma de ".$x." y ".$y." es ".$z."<br />";

// Realmente, en vez de concatenar cadenas con variables, podemos imprimirlas directamente ya que se expanden automáticamente:
echo "La suma de $x y $y es $z <br />";

// En ocasiones, necesitamos rodear el nombre de la variable entre llaves para poder unir más texto al resultado:
$color = "rojo";
echo "El plural de $color es ${color}s";

?>