<?php


/**
 * Fonction de formattage du texte avec htmlentities
 * e
 * @param  string $string
 * @return string
 */
function e(string $string) {
    return htmlentities($string);
}