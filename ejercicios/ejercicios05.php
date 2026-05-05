<?php
function operaciones($numero) {
    $cuadrado = $numero ** 2;
    $cubo = $numero ** 3;
    $raiz = sqrt($numero);

    return [
        "Cuadrado" => $cuadrado,
        "Cubo" => $cubo,
        "Raíz cuadrada" => $raiz
    ];
}

$resultado = operaciones(9);
echo "Ejercicio 5: Para el número 9<br>";
foreach ($resultado as $op => $valor) {
    echo $op . ": " . $valor . "<br>";
}
?>