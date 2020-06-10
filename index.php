<?php
echo("EJERCICIO1");
$numero1 = 20;
$numero2 = 8;
echo("<br>");
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
echo("<br>");
echo("la suma de "  . $numero1 . "+" . $numero2 . "=" . $suma);
echo("<br>");
echo("la resta de "  . $numero1 . "-" . $numero2 . "=" . $resta);
echo("<br>");
echo("la multiplicacion de "  . $numero1 . "*" . $numero2 . "=" . $multiplicacion);
echo("<br>");
echo("la division de "  . $numero1 . "/" . $numero2 . "=" . $division);
echo("<br>");
echo("<br>");

echo("EJERCICIO2");
echo("<br>");
$peso = 69;
$altura = 1.65;

$imc = $peso/ ($altura * $altura);
echo("<br>");
echo("INDICE DE MASA CORPORAL:".$imc);
echo("<br>");
if ($imc <= 18.4){
echo("Insuficiencia de peso");
} elseif($imc <= 24.9) {
    echo("peso normal");
} elseif ($imc <= 29.9) {
    echo("sobre peso");
} elseif ($imc <= 34.9) {
    echo ("obesidad 1");
} elseif ($imc <= 39.9) {
    echo ("obesidad 2");
} else {
    echo("obesidad 3");
}
echo("<br>");
echo("<br>");

echo("EJERCICIO3");
echo("<br>");
$numerozapatos =5;
$valor =150000;
$totalcompra = $numerozapatos*$valor;
$descuento;
$totalpagar;

if ($numerozapatos ==3) {
    $descuento = $totalcompra*0.10;
} elseif ($numerozapatos > 3 && $cantidad <=5) {
    $descuento = $totalcompra * 0.20;
} elseif ($numerozapatos > 5) {
    $descuento = $totalcompra * 0.40;
}

$totalpagar = $totalcompra - $descuento;
echo("<br>");
echo("EL TOTAL DE LA COMPRA POR " . $numerozapatos ." pares de zapatos es $".$totalpagar);
echo("<br>");
echo("<br>");

echo("EJERCICIO4");

$horasTrabajadas =58;
$horasExtras = 0;
$salario;
echo("<br>");
if ($horasTrabajadas >40) {
    $horasExtras =$horasTrabajadas -40;
}

if ($horasTrabajadas <=40) {
    $salario = $horasTrabajadas *20000;
} else {
    $salario = 40 *20000+$horasExtras*25000;
}
echo("<br>");
echo("EL SALARIO SEMANAL DEL TRABAJADOR ES $" . $salario);
echo("<br>");
echo("<br>");

echo("EJERCICIO5");
echo("<br>");
echo("<br>");
$salpicon = array("Dulce1"=>"Banano","Dulce2"=>"Manzana","Dulce3"=>"Durazno","Ácido1"=>"Piña","Ácido2"=>"Naranja","Ácido4"=>"Lulo");
foreach ($salpicon as $clave => $valor) {
    echo($clave.":".$valor);
    echo("<br>");
}
?>


