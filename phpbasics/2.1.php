<?php

// ChatGPT = php que devulve un xml, pero una manera mucho mas sencilla

// Verificar si se proporcionó un parámetro en la URL
if(isset($_GET['parametro'])){
    // Obtener el valor del parámetro
    $parametro = $_GET['parametro'];
} else {
    // Si no se proporcionó un parámetro, se utiliza un valor predeterminado
    $parametro = 'No se paso ningun parametro';
}

header('Content-Type: application/xml');

$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
<movie>
    <title>The Shawshank Redemption</title>
    <director>Frank Darabont</director>
    <genre>Drama</genre>
    <year>1994</year>
    <rating>'.$parametro.'</rating>
</movie>';

echo $xmlString;

/* 
Este script PHP simplemente imprime una cadena XML utilizando echo. Luego, la
cabecera Content-Type está configurada como application/xml para indicar que se 
trata de un documento XML. Este enfoque es más directo y es adecuado para casos en los 
que la estructura del XML es relativamente simple y no requiere una construcción dinámica.
*/

?>
