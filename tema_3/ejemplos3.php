<?php
    function saludar(){
        echo "Hola, bienvenido";
    }

    saludar();

    function saludarUsuario($nombre){
        echo "Bienvendo " . $nombre;
    }

    saludarUsuario("Fontecha");

    
    function sumar($a, $b){
        return $a + $b;
    }

    $resultado = sumar(5, 10);

    echo $resultado;
?>