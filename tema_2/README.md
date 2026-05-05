
---

# Guía Técnica de Estructuras de Control en PHP: Masterclass para Desarrolladores


## 1. Estructuras de Selección (Decisión)

Controlan el flujo de ejecución basándose en condiciones booleanas o comparaciones de identidad.

### If, Elseif, Else y Sintaxis Alternativa
Es la forma más básica de control. En entornos profesionales, cuando mezclamos PHP con HTML, utilizamos la **sintaxis alternativa** (reemplazando `{}` por `:` y `endif;`) para mejorar drásticamente la legibilidad.

```php
<?php
$a = 5;

if ($a == 5):
    echo "a es igual a 5"; // Bloque ejecutado si es true
elseif ($a == 6):
    echo "a es igual a 6";
else:
    echo "a no es ni 5 ni 6";
endif; 
```

### Operador Ternario (Shorthand)
Ideal para asignaciones rápidas y decisiones simples de una sola línea.
**Sintaxis:** `(condición) ? valor_si_cierto : valor_si_falso`

```php
<?php
$age = 20;
$status = ($age >= 18) ? "adulto" : "menor";
```

### Match (PHP 8+) vs Switch
* **Switch:** Realiza comparaciones débiles (`==`) y requiere `break`.
* **Match:** Es la recomendación moderna. Utiliza **comparaciones estrictas** (`===`), devuelve un valor y es exhaustivo (obliga a manejar todos los casos o usar un `default`).

```php
<?php
// Ejemplo de Match para manejo de identidades
$food = 'cake';

$result = match ($food) {
    'apple' => 'Esto es una manzana',
    'cake'  => 'Esto es un pastel',
    default => 'Comida desconocida',
};

// Match con rangos lógicos
$age = 23;
$category = match (true) {
    $age >= 65 => 'senior',
    $age >= 18 => 'adulto',
    default    => 'niño',
};
```

---

## 2. Estructuras de Repetición (Iteración)

Los bucles optimizan el rendimiento al procesar grandes volúmenes de datos mediante secuencias automáticas.

### While y Do-While
* **While:** Evalúa la condición **antes** de cada iteración.
* **Do-While:** Evalúa la condición **después**, garantizando al menos una ejecución.

```php
<?php
$i = 1;
while ($i <= 5) {
    echo $i++; 
}

$j = 0;
do {
    echo "Se ejecuta una vez aunque la condición sea falsa";
} while ($j > 0);
```

### For
Estructura predilecta cuando se conoce de antemano el número exacto de repeticiones.

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Iteración número: $i";
}
```

### Foreach (La joya de PHP)
Es la forma más eficiente de iterar sobre **arrays y objetos**. Permite el uso de referencias (`&`) para modificar datos directamente.

```php
<?php
$user_data = ["id" => 1, "name" => "Senior Dev"];

// Iteración con Clave y Valor
foreach ($user_data as $key => $value) {
    echo "Campo: $key, Valor: $value";
}

// Modificación por referencia
$nums = [1, 2, 3];
foreach ($nums as &$value) {
    $value = $value * 2; // Duplica el valor en el array original
}
unset($value); // PRÁCTICA SENIOR: Eliminar la referencia para evitar errores lógicos
```

---

## 3. Control de Flujo y Estándares Profesionales

### Modificadores: Break y Continue
* **`break`**: Finaliza abruptamente la ejecución del bucle o switch actual.
* **`continue`**: Salta el resto de la iteración actual y pasa a la siguiente evaluación.

### Buenas Prácticas y Estilo (PSR-12)
Para mantener un código de nivel Senior, es imperativo seguir estas reglas de estilo:

1.  **Minúsculas:** Todas las palabras clave (`if`, `foreach`, `match`) deben estar en minúsculas.
2.  **Ubicación de Llaves:** La llave de apertura `{` debe estar en la **misma línea** que la estructura de control.
3.  **Sangría:** Utilizar estrictamente **4 espacios**, nunca tabulaciones.
4.  **Espaciado:** Un espacio después de la palabra clave de control y antes del paréntesis (ej. `if ($condicion)`).

> **Nota del Senior:** El uso de `match` sobre `switch` y la limpieza de referencias con `unset()` tras un `foreach` son los detalles que demuestran dominio sobre el lenguaje y prevención de bugs en producción.

# Imagen Explicativa con IA

![ImagenIA](/img/Gemini_Generated_Image_t53yn6t53yn6t53y.png)