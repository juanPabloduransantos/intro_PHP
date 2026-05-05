## Comentarios

Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.

## Variables y Constantes
Ambas sirven para guardar información, pero funcionan de forma distinta:

Variables: Son "contenedores" para datos que pueden cambiar durante la ejecución.

Siempre empiezan con el signo de peso ($)seguidodelnombre(ejemplo:‘edad = 25;`).

## Constantes
Son valores fijos que NO pueden modificarse ni eliminarse una vez definidos. 
Se crean usando la función define() o la palabra clave const, y a diferencia de las variables, no llevan el signo $ antes de su nombre.

## Arrays y Arrays Asociativos
Un array permite almacenar múltiples valores en una sola variable, funcionando como una lista potente.

Arrays (Indexados): Los datos se organizan por posiciones numéricas (índices), que automáticamente empiezan desde el 0.
Por ejemplo, en una lista de frutas, la primera sería la posición 0, la segunda la 1, y así sucesivamente.

Arrays Asociativos: En lugar de usar números, utilizas nombres o "claves" personalizadas para guardar y encontrar los datos.

Se escriben en formato clave → valor (ejemplo: "nombre" => "Ana"). 

Son ideales cuando quieres asociar etiquetas con significado a los valores, como los detalles de un usuario.

# Operadores

## Arimeticos 
Los operadores aritméticos en PHP permiten realizar cálculos matemáticos básicos y avanzados en variables numéricas. Los principales son suma (+), resta (-), multiplicación (*), división (/), módulo (%, resto de la división) y exponenciación (**). Además, incluye operadores unarios como identidad (+$a) y negación (-$a)

## Asignacion
Los operadores de asignación en PHP se utilizan para escribir valores en variables. El operador básico es =, que asigna el valor de la expresión derecha a la izquierda. Existen operadores combinados (ej. +=, -=, *=, /=) que actúan como atajos para realizar una operación aritmética y asignar el resultado en un solo paso

## Comparacion
Los operadores de comparación en PHP permiten evaluar relaciones entre dos valores (números, cadenas, objetos), devolviendo true (verdadero) o false (falso). Los principales incluyen igualdad/identidad (==, ===), desigualdad (!=, <>, !==), mayor/menor que (>, <), mayor/menor o igual (>=, <=) y el operador de nave espacial (<=>)

## Logicos 
Los operadores lógicos en PHP (&&, ||, !, and, or, xor) permiten evaluar múltiples condiciones combinadas, devolviendo un valor booleano (true o false). Son fundamentales para estructuras de control (if, while), siendo && (Y) y || (O) los más usados, a menudo en cortocircuito para mejorar el rendimiento

## Incremento/Decremento
Los operadores de incremento (++) y decremento (--) en PHP modifican rápidamente el valor de una variable numérica o de cadena en una unidad, soportando pre- y post-incremento/decremento. Son fundamentales en bucles y se aplican solo a variables, no a expresiones constantes