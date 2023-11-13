<?php
    $note=<<<XML
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body>Do not forget me this weekend!</body>
    </note>
    XML;

    $xml = new SimpleXMLIterator($note);
    // Cadena de texto $note que la convierte en objeto de PHP = $xml con XML dentro.

    $xml->rewind();
    // Se utiliza rewind() para rebobinar el iterador al primer elemento. 
    // En este caso, esto no es necesario porque el iterador se inicia automáticamente en el primer elemento.

    var_dump($xml->key());
    // key() devuelve la clave del elemento actual en el iterador. 
    // En este caso, el iterador se inicia en el primer elemento, por lo que devolverá la clave del primer elemento

    // RESULTADO = string(2) "to"

?>