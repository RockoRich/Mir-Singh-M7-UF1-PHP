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

    var_dump($xml->valid());
    // valid() verifica si el iterador está en una posición válida (es decir, si hay elementos para recorrer). 
    // En este caso, como el iterador se inicia en el primer elemento, devolverá true.

    $xml->next();
    // Se utiliza next() para mover el iterador al siguiente elemento en la lista. 
    // En este caso, esto moverá el iterador al segundo elemento.

    var_dump($xml->valid());
    // Se utiliza valid() nuevamente para verificar si el iterador está en una posición válida después de moverse. 
    // En este caso, como hay un segundo elemento, devolverá true.

    // RESULTADO = bool(true) bool(true)

?>