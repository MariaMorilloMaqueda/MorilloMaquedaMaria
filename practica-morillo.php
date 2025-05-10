<?php
/**
 * @author María Morillo
 * @version 1.0
 */

/**
 * Calcula el área de un rectángulo.
 *
 * @internal Esta función calcula el área de un rectáculo multiplicando sus parámetros (que son la base y la altura).
 *
 * @param float $base La base del rectángulo.
 * @param float $altura La altura del rectángulo.
 * @return float El área calculada del rectángulo.
 */
function calcularAreaRectangulo($base, $altura) {
    return $base * $altura;
}

/**
 * Convierte grados Celsius a Fahrenheit.
 *
 * @internal Esta función covierte una temperatura de grados Celsius a Fahrenheit.
 *
 * @param float $celsius Temperatura en grados Celsius.
 * @return float Temperatura convertida a Fahrenheit.
 */
function convertirAFah($celsius) {
    return ($celsius * 9 / 5) + 32;
}
?>