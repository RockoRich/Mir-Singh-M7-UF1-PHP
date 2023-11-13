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

    var_dump($xml->current());
    // current() devuelve el elemento actual en el iterador. En este caso, devolverá el primer elemento del XML.

    // RESULTADO = object(SimpleXMLIterator)#2 (1) { [0]=> string(4) "Tove" }

?>