<?php
    $xml=<<<XML
    <?xml version="1.0" standalone="yes"?>
    <cars xmlns:c="http://w3schools.com/ns" xmlns:a="http://w3schools.com/country">
        <c:car id="1">Volvo</c:car>
        <c:car id="2">BMW</c:car>
        <c:car id="3">Saab</c:car>
    </cars>
    XML;

    $sxe=new SimpleXMLElement($xml);
    // Cadena de texto $xml que la convierte en objeto de PHP = $sxe con XML dentro.

    $ns=$sxe->getNamespaces(true);
    // Se utiliza el método getNamespaces(true) para obtener todos los espacios de nombres definidos en el documento XML.

    var_dump($ns);
    // Se utiliza var_dump() para imprimir en pantalla la estructura de datos de los espacios de nombres. 
    // var_dump() es útil para imprimir estructuras de datos complejas, como arrays.
?>