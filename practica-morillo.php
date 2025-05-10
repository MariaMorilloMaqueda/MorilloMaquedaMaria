<?php
/**
 * @author María Morillo
 * @version 1.0
 */

/**
 * Calcula el área de un rectángulo.
 *
 * @internal Esta función calcula el área de un cilindro.
 *
 * @param float $radio El radio del cilindro.
 * @param float $altura La altura del cilindro.
 * @return float El área calculada del cilindro.
 */
function calcularAreaCilindro($radio, $altura) {
    $pi = 3.1416;
    $area = 2 * $pi * $radio * ($radio + $altura);
    return $area;
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