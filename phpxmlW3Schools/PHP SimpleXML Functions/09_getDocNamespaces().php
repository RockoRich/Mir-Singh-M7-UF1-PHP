<?php
    $xml=<<<XML
    <?xml version="1.0" standalone="yes"?>
    <cars xmlns:c="http://w3schools.com/ns">
        <c:car id="1">Volvo</c:car>
        <c:car id="2">BMW</c:car>
        <c:car id="3">Saab</c:car>
    </cars>
    XML;

    $sxe=new SimpleXMLElement($xml);

    // Cadena de texto $xml que la convierte en objeto de PHP = $elem con XML dentro.

    $ns=$sxe->getDocNamespaces();

    // Se utiliza el método getDocNamespaces() para obtener los espacios de nombres definidos en el documento XML.

    print_r($ns);

    /*
    Se utiliza print_r() para imprimir en pantalla los resultados obtenidos en el paso anterior. 
    print_r() es útil para imprimir estructuras de datos complejas, como arrays.
    
    El resultado de este código sería un array que contiene los espacios de nombres definidos en el documento XML, en este caso:

    Esto indica que hay un espacio de nombres definido con el prefijo c y la URI http://w3schools.com/ns
    */

?>