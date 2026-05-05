<?php
echo "Ejercicio 3: Dos primeras letras de los días de la semana<br>";
$dias = [
    "Lunes" => "Lu",
    "Martes" => "Ma",
    "Miércoles" => "Mi",
    "Jueves" => "Ju",
    "Viernes" => "Vi",
    "Sábado" => "Sa",
    "Domingo" => "Do"
];
foreach ($dias as $dia => $abreviatura) {
    echo $dia . ": " . $abreviatura . "<br>";
}
echo "<br>";
?>