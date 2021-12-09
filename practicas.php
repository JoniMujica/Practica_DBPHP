<?php
// asd
//echo "Hello world!";
//echo hello,world!; //esto mal
/*
$nombre = "Juan Ignacio";
var_dump($nombre); //devuelve Juan Ignacio string(12)
$nombre = 1;
var_dump($nombre); //devuelve int(1)
*/

/*
$nombre = "Juan Ignacio";
echo $nombre;
echo "\n"
$apellido = "Spadosi";
echo $nombre*/


/*
$unNumero = "1";
$otroNumero = "2";
echo $unNumero + $otroNumero; //convierte a int y suma variables
*/
/*
$unNumero = "1";
$otroNumero = "2";
echo $unNumero . $otroNumero; //concateba las variables
*/

/*
$unNumero = 1;
$otroNumero = 2;
echo $unNumero . $otroNumero . "algo"; //concatenacion entre tipo de datos

$bool = true;
 echo $unNumero . $otroNumero . $bool;

//var_dump($nombre);*/

//Operaciones aritmeticas
/*
$unNumero = 5;
$otroNumero = 3;
echo $unNumero * $otroNumero . "\n";
echo $unNumero + $otroNumero . "\n";
echo $unNumero - $otroNumero . "\n";
echo $unNumero ** $otroNumero . "\n";
echo $unNumero / $otroNumero . "\n";
echo $unNumero % $otroNumero . "\n";*/

$unNumero = 5;
$otroNumero = 3;
$otroNumeroS = "3";
/*
$resultado = $unNumero > $otroNumero;
$resultado = $unNumero < $otroNumero;
$resultado = $unNumero == $otroNumero;
$resultado = $unNumero != $otroNumero;*/
$resultado = $otroNumero == $otroNumeroS; // los contenidos de valor, son iguales?
$resultado = $otroNumero === $otroNumeroS; // se fijla el valor y los tipos de datos son iguales
var_dump($resultado);



function sumarNumero($num1,$num2){
  $res = $num1 + $num2;
  return $res;
}
echo sumarNumero(3,4);

for($i = 11;$i<10;$i++){
  echo ($i+1)." Vuelta"."\n";
}
?>