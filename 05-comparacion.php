<?php include 'includes/header.php';


$n1 = 20;
$n2 = 30;
$n3 = 30;
$n4 = "30";

var_dump($n1 > $n2);
echo "</br>";

var_dump($n1 < $n2);
echo "</br>";

var_dump($n1 <= $n2);
echo "</br>";

var_dump($n1 >= $n2);
echo "</br>";

var_dump($n2 == $n3);
echo "</br>";


var_dump($n3 == $n4);
echo "</br>";

var_dump($n3 === $n4);
echo "</br>";

// -1 si Izquierda es meno, 0 Si es igual, y 1 si Izquierda es mayor
var_dump($n1 <=> $n2);
echo "</br>";


include 'includes/footer.php';