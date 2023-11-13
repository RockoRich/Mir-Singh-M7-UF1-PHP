<?php
    $note=<<<XML
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body date="2014-01-01" type="private">Do not forget me this weekend!</body>
    </note>
    XML;

    $xml = simplexml_load_string($note);
    
    // Cadena de texto $note que la convierte en objeto de PHP con XML dentro.

    foreach($xml->body[0]->attributes() as $a => $b) {
        echo $a,'="',$b,"<br>";
    }

    // Se realiza un bucle foreach que itera a través de los atributos del elemento <body>.
    // $xml->body[0]->attributes() accede a los atributos del primer elemento <body> encontrado en el XML.
    // En cada iteración, $a representa el nombre del atributo y $b representa el valor del atributo.
    // Dentro del bucle, se imprime el nombre del atributo ($a) y su valor ($b) en el formato nombre="valor"<br>.
?>