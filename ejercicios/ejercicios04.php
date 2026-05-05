<?php
function contarPares($inicio, $fin) {
    $contador = 0;
    for ($i = $inicio; $i <= $fin; $i++) {
        if ($i % 2 == 0) {
            $contador++;
        }
    }
    return $contador;
}
echo "Ejercicio 4: Cantidad de números pares entre 1 y 20 = " . contarPares(1, 20) . "<br><br>";
?>