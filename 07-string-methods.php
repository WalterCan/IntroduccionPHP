<?php include 'includes/header.php';


$nombre = "     Walter Cantero    ";

// CONOCER EXTENSION DE UN STRING

echo strlen($nombre);
echo "<br>";
var_dump($nombre);

echo "<br>";

// ELIMINAR ESPACIOS EN BLANCO

$texto = trim($nombre);
echo $texto;
echo "<br>";
var_dump($texto);

// CONVERTIRLO A MAYUSCULAS

echo "<br>";

echo strtoupper($texto);

// CONVERTIRLO EN MISNUSCULAS
echo "<br>";

echo strtolower($texto);
echo "<br>";


// REEMPLAZAR UNA CADENA DE TEXTO

echo str_replace("Walter", "W", $texto);

echo "<br>";

// REVISAR SI UN STRING EXISTE O NO

echo strpos($texto, "Walter");
echo "<br>";

// CONCATENAR STRING

$tipoCliente ="Premium";

echo "El Cliente ". $texto . " es " . $tipoCliente;


// SEgunda forma de concatenar, solamente funciona con llaves dobles

echo "<br>";


echo "El Cliente {$texto} es {$tipoCliente}";


include 'includes/footer.php';