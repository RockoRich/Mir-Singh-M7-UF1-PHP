<?php

// ChatGPT = php que devulve un xml

// Encabezado para indicar que se trata de un documento XML
header('Content-Type: application/xml');

// Crear el documento XML
$xml = new DOMDocument('1.0', 'utf-8');

// Crear el elemento raíz
$root = $xml->createElement('raiz');
$xml->appendChild($root);

// Agregar elementos al XML
$nombre = $xml->createElement('nombre', 'Mir');
$root->appendChild($nombre);

$apellido = $xml->createElement('apellido', 'Singh');
$root->appendChild($apellido);

$edad = $xml->createElement('edad', '20');
$root->appendChild($edad);

// Transformar el XML a una cadena y devolverlo
echo $xml->saveXML();
?>