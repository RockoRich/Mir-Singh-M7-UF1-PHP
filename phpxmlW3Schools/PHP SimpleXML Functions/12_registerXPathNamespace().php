<?php
    $xml=<<<XML
    <book xmlns:chap="http://example.org/chapter-title">
    <title>My Book</title>
    <chapter id="1">
        <chap:title>Chapter 1</chap:title>
        <para>Donec velit. Nullam eget tellus...</para>
    </chapter>
    <chapter id="2">
        <chap:title>Chapter 2</chap:title>
        <para>Lorem ipsum dolor sit amet....</para>
    </chapter>
    </book>
    XML;

    $sxe=new SimpleXMLElement($xml);
    // Cadena de texto $xml que la convierte en objeto de PHP = $sxe con XML dentro.

    $sxe->registerXPathNamespace('c','http://example.org/chapter-title');
    /*Se utiliza el método registerXPathNamespace() para registrar un espacio de nombres 
    con el prefijo c y la URI http://example.org/chapter-title. Esto permitirá realizar búsquedas XPath usando este espacio de nombres.*/

    $result=$sxe->xpath('//c:title');

    /*Se utiliza el método xpath() para ejecutar una consulta XPath en el objeto SimpleXMLElement. 
    La consulta busca todos los elementos <chap:title> en el documento XML.*/

    foreach ($result as $title) {
        echo $title . "<br>";
    }
    /*Se inicia un bucle foreach que itera a través de los resultados de la consulta XPath.
    En cada iteración, $title representa uno de los elementos encontrados.
    Se imprime el contenido del elemento $title seguido de un salto de línea.*/

    /*
        En resumen, este código PHP toma una cadena de texto que contiene un fragmento de XML, 
        lo convierte en un objeto manejable, registra un espacio de nombres, 
        ejecuta una consulta XPath para encontrar elementos <chap:title>, 
        y luego imprime los títulos encontrados. El resultado sería:

            Chapter 1
            Chapter 2
    */


?>